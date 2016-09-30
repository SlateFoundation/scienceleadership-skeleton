<?php

if (empty($GLOBALS['Session']) || !$GLOBALS['Session']->hasAccountLevel('Staff')) {
    return;
}


Slate\DashboardRequestHandler::$sources['sla-teachers'] = [
    'For Teachers' => [
#       ,'Teacher Dashboard' => 'https://teacherdashboard.appspot.com/' . GoogleApps::$domain,
        'Naviance' => 'https://succeed.naviance.com/auth/signin',
        'Login SDP' => 'https://www.philasd.org/login/',
        'Zimbra' => 'https://cc.philasd.org/',
        'SDP Report Card Calendar' => 'http://webgui.phila.k12.pa.us/offices/r/report-card-information',
        'Wifi Login' => 'https://nps-sth1.philasd.org',
        'Create an Account' => 'https://sites.google.com/a/scienceleadership.org/sla-account-new-user-request/',
        'EduCon' => 'http://educonphilly.org/',
        'Scrible' => 'https://www.scrible.com/sign-in/#/',


    ]
];