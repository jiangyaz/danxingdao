<?php

// Calling graph API to get the number of facebook likes
$url = 'http://graph.facebook.com/?id=588369624589153';
$like_num =  json_decode(file_get_contents($url))->{'likes'};
echo $like_num;

?>