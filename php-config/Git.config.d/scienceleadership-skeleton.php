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
        'php-config/Slate/Progress/Narratives/Report.config.d/sla.php'
    ]
];