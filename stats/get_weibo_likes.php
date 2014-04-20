<?php

$uid =  "5040920641";
$token = "2.00djLJVF0Mp511fe9b9f30b4XzFW_B";
$url = "https://api.weibo.com/2/users/counts.json?uids=$uid&access_token=$token";

$info_arr =  json_decode(file_get_contents($url));
$follower_num = $info_arr[0]->{'followers_count'};

echo $follower_num;
?>

