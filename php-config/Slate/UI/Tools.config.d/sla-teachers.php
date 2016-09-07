<?php

if (empty($GLOBALS['Session']) || !$GLOBALS['Session']->hasAccountLevel('Staff')) {
    return;
}

Slate\UI\Tools::$tools['ScholarChip'] = 'https://idserv.scholarchip.com/home.aspx';