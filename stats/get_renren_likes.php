<?php
include_once ('renren/rennclient/RennClient.php');
require_once join('/', array(__DIR__, '../firebase-php', 'firebaseLib.php'));

$accessToken = new AccessToken ( TokenType::MAC, "227720|2.K0UHjna9hjyGJiI5bH1IQhogPlKDVXJQ.318782080.1361525465413", null, "38c7412e45d34cf2b7b163b797706a14", "hmac-sha-1" );
$client = new RennClientBase ( '027e422830604dc3b90cc70e6dd4bf54', '9bf8dc994471449c8300380f768bebd8' );
$client->authWithToken ( $accessToken );

$queryParams = array ();
$queryParams ['pageId'] = 601871434;
$response = $client->execute ( "/v2/page/get", "GET", $queryParams );

$like_num = $response['fansCount'];
echo $like_num;

$firebase = new Firebase('https://radiant-fire-8364.firebaseio.com/');
// $res_num = $firebase->set('likes/renren_fans', $like_num);
?>