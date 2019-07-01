<?php
session_start();
require_once "Facebook/autoload.php";
$fb = new \Facebook\Facebook([
    'app_id' => "1063949697136529",
    "app_secret" => "4c970c71c3cb24695487d9e2ccb13391",
    "default_graph_version" => "v2.10"
]);
$helper = $fb->getRedirectLoginHelper();
