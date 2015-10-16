<?php
header("Content-type: text/html; charset=utf-8"); 
$channel = new SaeChannel();
$connection = $channel->createChannel('test',3600);
$message_content = 'qwgxiaoxiao';
$ret = $channel->sendMessage('test',$message_content);
include 'test.html';
