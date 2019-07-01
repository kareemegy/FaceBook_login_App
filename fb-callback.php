<?php

use Facebook\Authentication\AccessToken;

require_once "config.php";

try {
    $accessToken = $helper->getAccessToken();
} catch (\Facebook\Exceptions\FacebookResponseException $e) {
    echo "Responce Exeption: " . $e->getMessage();
    exit();
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
    echo "SDK Exeption: " . $e->getMessage();
    exit();
}
if (!$accessToken) {
    header("Location: login.php");
    exit();
}
$oAuth2clint = $fb->getOAuth2Client();
if (!$accessToken->isLongLived()) {
    $accessToken = $oAuth2clint->getLongLivedAccessToken($accessToken);
}
$response = $fb->get("/me?fields=id,first_name,last_name,email,picture.type(large)", $accessToken);
$user_data = $response->getGraphNode()->asArray();
echo "<pre>";
var_dump($user_data);
$_SESSION['userdata'] = $user_data;
$_SESSION['access_token'] = (string) $accessToken;
header("Location: index.php");
exit();
