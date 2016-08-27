<?php

if (empty($GLOBALS['Session']) || $GLOBALS['Session']->hasAccountLevel('Staff')) {
    return;
}

Slate\UI\Tools::$tools['Naviance'] = 'https://www.philasd.org/login/';
Slate\UI\Tools::$tools['SchoolNet'] = 'https://www.philasd.org/login/';