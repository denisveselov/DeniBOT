<?php

header('Content-Type: text/html; charset=utf-8');

require 'db.php';

$tokken = '349744629:AAFgS16duCHVAd-gghOetwIaQUOs_KTgcbM'; //Токкен бота

$update = json_decode(file_get_contents('php://input'),true);
var_dump($update);
$chat_id = $update['message']['chat']['id'];
$user_name = $update['message']['from']['username'];
$message = $update['message']['text'];







//send Messages end put to logs file
function sendMessage($tokken, $chat_id, $ans_message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $chat_id ."&text=". $ans_message);
}

file_put_contents("logs.txt", $message);
