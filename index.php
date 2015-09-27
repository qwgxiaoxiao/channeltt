<?php
#####
header("Content-type: text/html; charset=utf-8"); 
$channel = new SaeChannel();
$connection = $channel->createChannel('test',3600);
include 'test.html';
$message_content = 'qwgxiaoxiao';
$ret = $channel->sendMessage('test',$message_content);
