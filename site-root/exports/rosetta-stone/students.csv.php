<?php

$headers = array('Username','Group','Language','Middle Name','Curriculum','First Name','Last Name','Notes','E-mail');

// select term
if (!empty($_REQUEST['term'])) {
    if (!$Term = Slate\Term::getByHandle($_REQUEST['term'])) {
		die('term not found');
    }
} else {
	$Term = Slate\Term::getClosest()->getMaster()->getLongestParent();
}

// start output
header('Content-Type: text/csv');
$out = fopen('php://output', 'w');
fputcsv($out, $headers);

$result = DB::query(
	'SELECT stu.Username, "SLA", "English", MiddleName, "Spanish (Spain) Level 1", FirstName, LastName, s.Code, CONCAT(Username,"@scienceleadership.org")'
	.' FROM course_sections s'
	.' RIGHT JOIN course_section_participants p ON p.CourseSectionID = s.ID'
	.' JOIN people stu ON stu.ID = p.PersonID'
	.' WHERE s.TermID IN (%s) AND p.Role = "Student" AND s.CourseID IN (51,53,91,117)'
	.' ORDER BY stu.Username, s.Code'
	,array(
		implode(',', $Term->getRelatedTermIDs())
	)
);

while ($row = $result->fetch_row()) {
	fputcsv($out, $row);
}

fclose($out);