<?php

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