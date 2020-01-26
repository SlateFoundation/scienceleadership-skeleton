<?php

$GLOBALS['Session']->requireAccountLevel('Administrator');

$headers = [
    'Report ID',
    'Report Date',
    'Student Name',
    'Student ID',
    'Student Year',
    'Student Grade Level',
    'Student Advisor',
    'Interim Section',
    'Interim Author',
    'Interim Grade'
];


// build query
$conditions = [];

if (!empty($_REQUEST['term'])) {
    if (!$Term = Slate\Term::getByHandle($_REQUEST['term'])) {
        RequestHandler::throwNotFoundError('term not found');
    }
} else {
    $Term = Slate\Term::getClosest();
}

$conditions['TermID'] = ['values' => $Term->getRelatedTermIDs()];


// calculate closest graduation year for converting year to grade
$closestGraduationYear = Slate\Term::getClosestGraduationYear();


// init spreadsheet writer
$sw = new SpreadsheetWriter([
    'filename' => 'interims-'.$Term->Handle
]);


// write header
$sw->writeRow($headers);


// enable model caching globally for quick resolution of relationships
ActiveRecord::$useCache = true;


// retrieve results
$reports = Slate\Progress\SectionInterimReport::getAllByWhere($conditions, ['order' => 'ID']);


// output results
foreach ($reports as $Report) {
    // write row
    $sw->writeRow([
        $Report->ID,
        date('Y-m-d H:i', $Report->Created),
        $Report->Student->LastName.', '.$Report->Student->FirstName,
        $Report->Student->StudentNumber,
        $Report->Student->GraduationYear,
        12 - ($Report->Student->GraduationYear - $closestGraduationYear),
        $Report->Student->Advisor->LastName.', '.$Report->Student->Advisor->FirstName,
        $Report->Section->Code,
        $Report->Creator->LastName.', '.$Report->Creator->FirstName,
        $Report->Grade
    ]);
}


// finish output
$sw->close();
