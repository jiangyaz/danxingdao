<?php
date_default_timezone_set('America/Los_Angeles');
require_once join('/', array(__DIR__, '../firebase-php', 'firebaseLib.php'));

$time = date('m/d/Y, h:i a', time());

$firebase = new Firebase('https://radiant-fire-8364.firebaseio.com/');
$res_num = $firebase->set('likes/update_time', $time);
echo $res_num;
?>