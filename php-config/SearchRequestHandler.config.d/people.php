<?php

$conditions = ['AccountLevel != "Disabled"'];

if (!$GLOBALS['Session']->hasAccountLevel('User')) {
    $conditions[] = 'AccountLevel NOT IN ("Contact", "User") OR Class = "Slate\\\\People\\\\Student"';
}

SearchRequestHandler::$searchClasses[Emergence\People\User::class] = [
    'fields' => [
        [
            'field' => 'FirstName',
            'method' => 'like'
        ],
        [
            'field' => 'LastName',
            'method' => 'like'
        ],
        [
            'field' => 'Username',
            'method' => 'like'
        ],
        [
            'field' => 'FullName',
            'method' => 'sql',
            'sql' => 'CONCAT(FirstName, " ", LastName) = "%s"'
        ]
    ],
    'conditions' => $conditions
];