<?php

$GLOBALS['Session']->requireAccountLevel('Administrator');

$headers = array('Year', 'Advisor', 'Last Name', 'First Name', 'Student Number', 'Username', 'Email', 'Temporary Password');


// select range
if (!empty($_REQUEST['from']) && ctype_digit($_REQUEST['from'])) {
    $from = $_REQUEST['from'];
} else {
    $from = date('Y', strtotime(Slate\Term::getClosest()->getMaster()->EndDate));
}

if (!empty($_REQUEST['to']) && ctype_digit($_REQUEST['to'])) {
    $to = $_REQUEST['to'];
} else {
    $to = $from+3;
}


// init spreadsheet writer
$sw = new SpreadsheetWriter();

// write header
$sw->writeRow($headers);

// enable model caching globally for quick resolution of relationships
ActiveRecord::$useCache = true;

// retrieve results
$students = Slate\People\Student::getAllByQuery("SELECT Student.* FROM people Student JOIN people Advisor ON Advisor.ID = Student.AdvisorID WHERE Student.Class = 'Slate\\\\People\\\\Student' AND Student.GraduationYear BETWEEN $from AND $to ORDER BY Student.GraduationYear, Advisor.LastName, Advisor.FirstName, Student.LastName, Student.FirstName");

// output results
foreach($students AS $Student)
{
    // write row
    $sw->writeRow(array(
        $Student->GraduationYear
        ,$Student->Advisor->LastName.', '.$Student->Advisor->FirstName
        ,$Student->LastName
        ,$Student->FirstName
        ,$Student->StudentNumber
        ,$Student->Username
        ,$Student->PrimaryEmail->Data
        ,$Student->TemporaryPassword
    ));
}

$sw->close();