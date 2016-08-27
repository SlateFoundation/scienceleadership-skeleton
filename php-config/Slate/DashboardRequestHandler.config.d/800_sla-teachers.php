<?php

if (empty($GLOBALS['Session']) || !$GLOBALS['Session']->hasAccountLevel('Staff')) {
    return;
}


Slate\DashboardRequestHandler::$sources['sla-teachers'] = [
    'For Teachers' => [
        'Engrade' => 'https://ww3.engrade.com/openid/index.php?from=google&domain=' . \RemoteSystems\GoogleApps::$domain,
#       ,'Teacher Dashboard' => 'https://teacherdashboard.appspot.com/' . GoogleApps::$domain,
        'Naviance' => 'https://succeed.naviance.com/auth/signin',
        'Login SDP' => 'https://www.philasd.org/login/',
        'Zimbra - SDP email' => 'https://cc.philasd.org/',
        'ScholarChip - Attendance' => 'https://idserv.scholarchip.com/login.aspx',
        'Standards Reports (beta)' => '/sbg/teachers'
    ]
];