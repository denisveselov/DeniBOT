<?php
mb_internal_encoding("UTF-8");

//Get Update
$update = json_decode(file_get_contents('php://input'),true);
$chat_id = $update['message']['chat']['id'];
$message_id = $update['message']['message_id'];
$user_name = $update['message']['from']['username'];
$message = $update['message']['text'];
$message = mb_strtolower($message);


/*
//Inline type var
$callback_query = $update['callback_query'];
$message = $callback_query['data'];
$message_id = ['callback_query']['message']['message_id'];
$chat_id = $callback_query['message']['chat']['id'];
*/

//create to DB
$usermsg = R::dispense('usermsg');
$usermsg->chat_id = $chat_id;
$usermsg->msgid = $message_id;
$usermsg->user_name = $user_name;
$usermsg->message = $message;
$id = R::store($usermsg);

