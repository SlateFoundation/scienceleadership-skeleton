<?php

Git::$repositories['slate-connector-pcr'] = [
    'remote' => 'git@github.com:SlateFoundation/slate-connector-pcr.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'trees' => [
        'html-templates/connectors/pcr/createJob.tpl',
        'php-classes/Slate/Connectors/PCR/Connector.php',
        'php-migrations/Slate/Connectors/20160831_pcr-keys.php',
        'site-root/connectors/pcr.php'
    ]
];