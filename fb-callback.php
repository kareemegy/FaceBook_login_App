<?php
require_once "config.php";

try {
    $accessToken = $helper->getAccessToken() 
}catch (\Facebook\Exceptions\FacebookResponseException $e) { }
