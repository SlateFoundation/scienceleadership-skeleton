<?php

Git::$repositories['scienceleadership-interims'] = [
    'remote' => 'https://github.com/SlateFoundation/scienceleadership-interims.git',
    'originBranch' => 'builds/v1',
    'workingBranch' => 'builds/v1',
    'trees' => [
        'html-templates/scienceleadership-interims/_body.tpl',
        'html-templates/scienceleadership-interims/_body.email.tpl',
        'php-config/Git.config.d/scienceleadership-interims.php',
        'php-config/Slate/Progress/SectionInterimReport.config.d/scienceleadership-interims.php',
        'php-config/SlateAdmin.config.d/scienceleadership-interims.php',
        'php-migrations/ScienceLeadership/Interims',
        'sencha-workspace/packages/scienceleadership-interims'
    ]
];