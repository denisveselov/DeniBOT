<?php
mb_internal_encoding("UTF-8");

$tokken = '349744629:AAFgS16duCHVAd-gghOetwIaQUOs_KTgcbM'; //Токкен бота
const API_URL = 'https://api.telegram.org/bot';
$api_url = API_URL;
$parse_method = 'markdown';
$method = array();
$update = json_decode(file_get_contents('php://input'), true);

class TelegramBot{
    function getUpdate($update)
    {
        $chat_id = $update['message']['chat']['id'];
        $message_id = $update['message']['message_id'];
        $user_name = $update['message']['from']['username'];
        $message = $update['message']['text'];
        $message = mb_strtolower($message);
    }


    function callbackQuery($update)
    {
        $callback_query = $update['callback_query'];
        $message = $callback_query['data'];
        $message_id = ['callback_query']['message']['message_id'];
        $chat_id = $callback_query['message']['chat']['id'];
    }

    function postMessage($chat_id, $message_id, $user_name, $message)
    {
        $usermsg = R::dispense('usermsg');
        $usermsg->chat_id = $chat_id;
        $usermsg->msgid = $message_id;
        $usermsg->user_name = $user_name;
        $usermsg->message = $message;
        $id = R::store($usermsg);
    }

    function sendMessage($api_url,$tokken, $chat_id, $ans_message)
    {
        file_get_contents($api_url.$tokken . "/sendMessage?chat_id=" . $chat_id . "&parse_mode=markdown&text=" . urlencode($ans_message));
    }


    function sendMessageInline($tokken, $chat_id, $ans_message)
    {
        file_get_contents("https://api.telegram.org/bot" . $tokken . "/sendMessage?chat_id=" . $chat_id . "&parse_mode=markdown&text=" . $ans_message);
    }


    function KeyboardMenu($key_buttons)
    {
        $buttons = $key_buttons;
        $keyboard = json_encode($keyboard = ["keyboard" => $buttons,
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
            'selective' => false]);
        $reply_markup = '&reply_markup=' . $keyboard . '';
        return $reply_markup;
    }


    function inlineKeyboard($inlinekey)
    {
        $reply_markup = '';
        $inkeyboard = $inlinekey;
        $keyboard = array("inline_keyboard" => $inkeyboard);
        $keyboard = json_encode($keyboard, true);
        $reply_markup = '&reply_markup=' . $keyboard;

        return $reply_markup;
    }


// Функция отвечает за обработку полученных сообщений/WORKING
    function handler($api_url,$message, $cases, $answers, $tokken, $chat_id)
    {
        if (in_array($message, $cases)) {
            $ans_message = $answers[mt_rand(0, count($answers) - 1)];
            sendMessage($api_url,$tokken, $chat_id, $ans_message);
        }
    }


    function handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons)
    {
        if (in_array($message, $cases)) {
            $ans_message = $answers[mt_rand(0, count($answers) - 1)];
            sendMessageInline($tokken, $chat_id, $ans_message . KeyboardMenu($key_buttons));
        }
    }

    function handlerInlineNoRand($message, $cases, $answers, $tokken, $chat_id, $key_buttons)
    {
        if (in_array($message, $cases)) {
            $ans_message = $answers;
            sendMessageInline($tokken, $chat_id, $ans_message . KeyboardMenu($key_buttons));
        }
    }


    function handlerInlineKey($message, $cases, $answers, $tokken, $chat_id, $inlinekey)
    {
        if (in_array($message, $cases)) {
            $ans_message = $answers;
            sendMessageInline($tokken, $chat_id, $ans_message . inlineKeyboard($inlinekey));
        }
    }
}