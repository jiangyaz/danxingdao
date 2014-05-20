<?php

require_once join('/', array(__DIR__, '../firebase-php', 'firebaseLib.php'));

$uid =  "5040920641";
$token = "2.00djLJVF0Mp511fe9b9f30b4XzFW_B";
$url = "https://api.weibo.com/2/users/counts.json?uids=$uid&access_token=$token";

$info_arr =  json_decode(file_get_contents($url));
$follower_num = $info_arr[0]->{'followers_count'};

if ($follower_num != NULL){
	$firebase = new Firebase('https://radiant-fire-8364.firebaseio.com/');
	$res_num = $firebase->set('likes/weibo_follows', $follower_num);
	echo $res_num;

	$file = fopen('local_backup/weibo_likes.txt', 'w');
	fwrite($file, "$follower_num");
	fclose($file);
}
?>

