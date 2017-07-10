<?php

use Emergence\People\User;

User::$fields['LegacyUsername'] = [
    'default' => null
];

User::$usernameGenerator = [
    'suffixFormat' => '%s-%u',
    'format' => function (User $User, array $options) {
        $firstNameLength = 1;
        $middleNameLength = 0;

        do {
            $username = substr($User->FirstName, 0, $firstNameLength);
            $username .= substr($User->MiddleName, 0, $middleNameLength);
            $username .= $User->LastName;
    
            if ($User->GraduationYear) {
                $username .= substr($User->GraduationYear, -2);
            }

            $username = strtolower($username);

            if (!User::getByWhere(array_merge($options['domainConstraints'], ['Username' => $username]))) {
                break;
            }

            if ($middleNameLength < strlen($User->MiddleName)) {
                $middleNameLength++;
            } elseif ($firstNameLength < strlen($User->FirstName)) {
                $firstNameLength++;
            } else {
                break;
            }
        } while (true);

        return $username;
    }
];