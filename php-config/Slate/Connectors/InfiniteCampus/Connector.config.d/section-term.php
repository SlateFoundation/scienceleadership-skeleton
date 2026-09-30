<?php

use Emergence\Connectors\Exceptions\RemoteRecordInvalid;
use Emergence\Connectors\IJob;
use Slate\Courses\Section;
use Slate\Term;

Slate\Connectors\InfiniteCampus\Connector::$getSectionTerm = function (
    IJob $Job,
    Term $MasterTerm,
    Section $Section,
    array $row
) {
    $year = substr($MasterTerm->StartDate, 0, 4);

    switch ($row['TermQuarters']) {
        case 4:
            $termHandle = 'y' . $year;
            break;
        case 2:
            if (!is_numeric($row['TermLastQuarter'] ?? null)) {
                throw new RemoteRecordInvalid(
                    'term-last-quarter-invalid',
                    sprintf('TermLastQuarter must be numeric for a semester section, got "%s"', $row['TermLastQuarter'] ?? ''),
                    $row,
                    $row['TermLastQuarter'] ?? null
                );
            }

            $termHandle = 's' . $year . '-' . $row['TermLastQuarter']/2;
            break;
        case 1:
            $termHandle = 'q' . $year . '-' . $row['TermLastQuarter'];
            break;
    }

    if (!$Term = Term::getByHandle($termHandle)) {
        throw new RemoteRecordInvalid(
            'term-not-found',
            'Term not found for handle: '.$termHandle,
            $row,
            $termHandle
        );
    }

    return $Term;
};
