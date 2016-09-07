<?php

if (empty($GLOBALS['Session']) || !$GLOBALS['Session']->Person || !$GLOBALS['Session']->Person->isA(Slate\People\Student::class)) {
    return;
}

Slate\UI\Tools::$tools['Naviance'] = 'https://www.philasd.org/login/';
Slate\UI\Tools::$tools['StudentNet'] = 'https://www.philasd.org/login/';
Slate\UI\Tools::$tools['RosettaStone'] = 'https://philadelphiasd.rosettastoneclassroom.com/en-US/portal';
Slate\UI\Tools::$tools['College Board'] = 'https://www.collegeboard.org/?navid=gh-cb';
Slate\UI\Tools::$tools['Scrible'] = 'https://www.scrible.com/sign-in/#/';
Slate\UI\Tools::$tools['College News Blog'] = 'https://slacollegenews.wordpress.com/';
Slate\UI\Tools::$tools['Lucid Press'] = 'https://www.lucidpress.com/users/login';