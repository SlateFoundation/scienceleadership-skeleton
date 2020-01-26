<?php

Git::$repositories['slate-connector-teacherdashboard'] = [
    'remote' => 'git@github.com:SlateFoundation/slate-connector-teacherdashboard.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'trees' => [
        'html-templates/connectors/teacher-dashboard/connector.tpl',
        'php-classes/Slate/Connectors/TeacherDashboard/Connector.php',
        'site-root/connectors/teacher-dashboard.php'
    ]
];