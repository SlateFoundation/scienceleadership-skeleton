<?php

Git::$repositories['slate-connector-rosettastone'] = [
    'remote' => 'git@github.com:SlateFoundation/slate-connector-rosettastone.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'trees' => [
        'html-templates/connectors/rosetta-stone/connector.tpl',
        'php-classes/Slate/Connectors/RosettaStone/Connector.php',
        'site-root/connectors/rosetta-stone.php'
    ]
];