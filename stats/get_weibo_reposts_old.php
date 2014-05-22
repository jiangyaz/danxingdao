<?php

require_once join('/', array(__DIR__, '../firebase-php', 'firebaseLib.php'));

$uid   =  "5040920641";
$token = "2.00djLJVF0Mp511fe9b9f30b4XzFW_B";

$reposts_url ="https://api.weibo.com/2/statuses/user_timeline.json?access_token=2.00djLJVF0Mp511fe9b9f30b4XzFW_B&count=200";
$reposts_info =  json_decode(file_get_contents($reposts_url));
$reposts_arr = $reposts_info->{'statuses'};

$total_reposts = 0;

for ($i = 0; $i < count($reposts_arr); $i++) {
	$post = $reposts_arr[$i];
	// echo $i.": ".$post->{'reposts_count'}."\n";
	$total_reposts = $total_reposts + $post->{'reposts_count'};
}

if ($total_reposts != NULL){
	$firebase = new Firebase('https://radiant-fire-8364.firebaseio.com/');
	$res_num = $firebase->set('likes/weibo_reposts', $total_reposts);
	echo "total reposts: ".$res_num."\n";

	$file = fopen('local_backup/weibo_reposts.txt', 'w');
	fwrite($file, "$total_reposts");
	fclose($file);
}
?>
