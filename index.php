<?php

ini_set('display_errors', 'On');

$uri = $_SERVER['REQUEST_URI'];
if( empty($uri)  ) {
    die();
} else {
    $uri = end(explode('/', $uri));
}

include_once('vendor/breadcrumbs_helper.php');
include_once('Generator.php');
include_once('header.php');
include_once('content.php');
include_once('footer.php');