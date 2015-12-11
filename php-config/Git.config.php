<?php

Git::$repositories['scienceleadership-skeleton'] = [
    'remote' => 'git@github.com:SlateFoundation/scienceleadership-skeleton.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'localOnly' => true,
    'trees' => [
        'html-templates/designs/site.tpl',
        'php-config/Git.config.php',
        'php-config/Emergence/People/Person.config.php'
    ]
];

Git::$repositories['scienceleadership-sbg'] = [
    'remote' => 'git@github.com:SlateFoundation/scienceleadership-sbg.git'
    ,'originBranch' => 'master'
    ,'workingBranch' => 'master'
    ,'localOnly' => true
    ,'trees' => [
        'html-templates/sbg',
        'php-classes/ScienceLeadership/SBG',
        'sencha-workspace/packages/scienceleadership-sbg',
        'sencha-workspace/pages/src/page/StandardsTeacher.js',
        'site-root/sbg'
    ]
];

Git::$repositories['slate-backup'] = [
    'remote' => 'git@github.com:JarvusInnovations/slate-backups.git',
    'originBranch' => 'releases/v1',
    'workingBranch' => Site::getConfig('primary_hostname'),
    'localOnly' => true,
    'trees' => [
        'ext-library',
        'html-templates',
        'php-classes',
        'php-config',
        'php-migrations',
        'phpunit-tests',
        'sencha-build',
        'sencha-workspace',
        'sencha-docs',
        'site-root'
    ],
];