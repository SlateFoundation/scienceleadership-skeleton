<?php

Git::$repositories['scienceleadership-skeleton'] = [
    'remote' => 'git@github.com:SlateFoundation/scienceleadership-skeleton.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'localOnly' => true,
    'trees' => [
        'html-templates/app/SlateAdmin/ext.tpl',
        'html-templates/includes/site.branding.tpl',
        'php-config/Git.config.d',
        'php-config/Emergence/People/Person.config.d/notes.php',
        'php-config/Slate.config.d',
        'php-config/Slate/DashboardRequestHandler.config.d/800_sla-teachers.php',
        'php-config/Slate/UI/Tools.config.d/lucid-charts.php',
        'php-config/Slate/UI/Tools.config.d/sla-students.php',
        'site-root/img/logo.png',
        'site-root/exports'
    ]
];