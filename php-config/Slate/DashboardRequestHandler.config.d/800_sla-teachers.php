<?php

if (empty($GLOBALS['Session']) || !$GLOBALS['Session']->hasAccountLevel('Staff')) {
    return;
}


Slate\DashboardRequestHandler::$sources['sla-teachers'] = [
    'For Teachers' => [
#       ,'Teacher Dashboard' => 'https://teacherdashboard.appspot.com/' . GoogleApps::$domain,
        'Naviance' => 'https://succeed.naviance.com/auth/signin',
        'Login SDP' => 'https://www.philasd.org/login/',
        'Zimbra - SDP email' => 'https://cc.philasd.org/',
        'SDP Report Card Calendar' => 'http://webgui.phila.k12.pa.us/offices/r/report-card-information',
        'Wifi Login' => 'https://nps-sth1.philasd.org',

    ]
];