<?php
require_once join('/', array(__DIR__, '../firebase-php', 'firebaseLib.php'));

// Calling graph API to get the number of facebook likes
$url = 'http://graph.facebook.com/?id=588369624589153';
$like_num =  json_decode(file_get_contents($url))->{'likes'};

$firebase = new Firebase('https://radiant-fire-8364.firebaseio.com/');
$res_num = $firebase->set('likes/fb_likes', $like_num);
echo $res_num;

?>
