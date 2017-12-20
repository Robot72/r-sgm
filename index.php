<?php

ini_set('display_errors', 'On');

$uri = $_SERVER['REQUEST_URI'];
if( empty($uri)  ) {
    die();
} else {
    $tmpUri = explode('/', $uri);
    $uri = end($tmpUri);
//print_r($uri);die;
}

include_once('vendor/breadcrumbs_helper.php');
include('TemplateGenerator.php');
include_once('header.php');
include_once('content.php');
include_once('footer.php');
