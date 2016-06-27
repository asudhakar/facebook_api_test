<?php 


require_once __DIR__ . '/Facebook/autoload.php';
require_once __DIR__ . '/Facebook/FacebookRequest.php';
$fb = new Facebook\Facebook([
  'app_id' => '{506734579516110}',
  'app_secret' => '{941bd3c973033e6245842eb1ed1b169e}',
  'default_graph_version' => 'v2.5'
]);


$request = new FacebookRequest(
  $session,
  'POST',
  '/250674131760799/members',
  array (
    'member' => '1234567',
  )
);
$response = $request->execute();
$graphObject = $response->getGraphObject();