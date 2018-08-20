<?php

require_once('src/Facebook/autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '2023680614561642', // Replace {app-id} with your app id
    'app_secret' => '022f93707f051fd2453740fcf61ffb96',
    'default_graph_version' => 'v3.1',
    ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['public_profile', 'email', ]; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    
</body>
</html>