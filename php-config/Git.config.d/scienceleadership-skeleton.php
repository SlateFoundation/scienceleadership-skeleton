<?php

Git::$repositories['scienceleadership-skeleton'] = [
    'remote' => 'git@github.com:SlateFoundation/scienceleadership-skeleton.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'localOnly' => true,
    'trees' => [
        'content-blocks',
        'html-templates/includes/site.branding.tpl',
        'php-config/Git.config.d',
        'php-config/Emergence/People/Person.config.d/notes.php',
        'php-config/Emergence/People/User.config.d/usernames.php',
        'php-config/SearchRequestHandler.config.d/people.php',
        'php-config/Slate.config.d',
        'php-config/Slate/DashboardRequestHandler.config.d/800_sla-teachers.php',
        'php-config/Slate/UI/Tools.config.d/lucid-charts.php',
        'php-config/Slate/UI/Tools.config.d/sla-students.php',
        'php-config/Slate/UI/Tools.config.d/sla-teachers.php',
        'php-config/Slate/UI/Navigation.config.d',
        'site-root/img/logo.png',
        'site-root/exports',
        'site-root/sass/site'
    ]
];