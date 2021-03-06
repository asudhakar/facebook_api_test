<?php 
require_once __DIR__ . '/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '{506734579516110}',
  'app_secret' => '{941bd3c973033e6245842eb1ed1b169e}',
  'default_graph_version' => 'v2.5'
]);


$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
