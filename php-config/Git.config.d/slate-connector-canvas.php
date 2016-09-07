<?php

Git::$repositories['slate-connector-canvas'] = [
    'remote' => 'git@github.com:SlateFoundation/slate-connector-canvas.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'trees' => [
        'html-templates/connectors/canvas/createJob.tpl',
        'php-classes/Slate/Connectors/Canvas/Connector.php',
        'php-migrations/Slate/Connectors/20160901_canvas-keys.php',
        'site-root/connectors/canvas.php'
    ]
];