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
            $username = mb_substr($User->FirstName, 0, $firstNameLength, 'utf-8');
            $username .= mb_substr($User->MiddleName, 0, $middleNameLength, 'utf-8');
            $username .= $User->LastName;

            $username = preg_replace('/\PL/u', '', $username);

            if ($User->GraduationYear) {
                $username .= substr($User->GraduationYear, -2);
            }

            $username = HandleBehavior::transformText($username, ['lower' => true, 'transliterate' => true]);

            if (!User::getByWhere(array_merge($options['domainConstraints'], ['Username' => $username]))) {
                break;
            }

            if ($middleNameLength < mb_strlen($User->MiddleName, 'utf-8')) {
                $middleNameLength++;
            } elseif ($firstNameLength < mb_strlen($User->FirstName, 'utf-8')) {
                $firstNameLength++;
            } else {
                break;
            }
        } while (true);

        return $username;
    }
];

User::$fallbackUserFinders['LegacyUsername'] = function($username) {
    return User::getByField('LegacyUsername', $username);
};