<?php

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