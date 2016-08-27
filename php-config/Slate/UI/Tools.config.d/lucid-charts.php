<?php

$googleDomain = RemoteSystems\GoogleApps::$domain;

if (empty($GLOBALS['Session']) || !$googleDomain) {
    return;
}

Slate\UI\Tools::$tools['Lucid Apps'] = [
    'LucidChart' => 'https://www.lucidchart.com/users/googleLogin?domain=' . $googleDomain,
    'LucidPress' => 'https://www.lucidpress.com/users/googleLogin?domain=' . $googleDomain
];