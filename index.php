<?php
mb_internal_encoding("UTF-8");

require 'db.php';
include 'tokken.php';
include 'global_vars.php';
include 'cases.php';
include 'answer.php';



//Handlers Mode

$cases = $run;
$answers = $startbot;
handler($message, $cases, $answers, $tokken, $chat_id);


$cases = $rundef;
$answers = $gender_answer;
$key_buttons = [['Мужской'],['Женский']]; //заменить массивами
handlerInline ($message, $cases, $answers, $tokken, $chat_id,$key_buttons);


if(in_array($message,$female_case)){
    $cases = $female_case;
    $answers = $gender_reply;
    $key_buttons = [['Хочу пройти тест'],['Не хочу тест']];
    handlerInline ($message, $cases, $answers, $tokken, $chat_id,$key_buttons);

    $cases = $start_quest;
    $answers = $questions[0];
    $btn1 = array('text'=>'от 150 - 159см.','callback_data'=>"0");
    $btn2 = array('text'=>'от 160 - 169см.','callback_data'=>"1");
    $btn3 = array('text'=>'свыше 170см.','callback_data'=>"1");
    $inlinekey = [[$btn1],[$btn2],[$btn3]];
    handlerInlineKey ($message, $cases, $answers, $tokken, $chat_id,$inlinekey);

    $cases = $tst_case;
    $answers = $questions[1];
    $btn1 = array('text'=>'от 45 - 50кг.','callback_data'=>"0");
    $btn2 = array('text'=>'от 50 - 59кг.','callback_data'=>"1");
    $btn3 = array('text'=>'свыше 60кг.','callback_data'=>"1");
    $inlinekey = [[$btn1],[$btn2],[$btn3]];
    handlerInlineKey ($message, $cases, $answers, $tokken, $chat_id,$inlinekey);



    $cases = $hello_case;
    $answers = $hello_answer;
    handler($message, $cases, $answers, $tokken, $chat_id);

    $cases = $bye_case;
    $answers = $bye_answer;
    handler($message, $cases, $answers, $tokken, $chat_id);

    $cases = $fuck_case;
    $answers = $fuck_answer;
    handler($message, $cases, $answers, $tokken, $chat_id);

    $cases = $thanks_case;
    $answers = $thanks_answer;
    handler($message, $cases, $answers, $tokken, $chat_id);

    $cases = $jokes_case;
    $answers = $jokes_answer;
    handler($message, $cases, $answers, $tokken, $chat_id);

    $cases = $whatsup_case;
    $answers = $whatsup_answer;
    handler($message, $cases, $answers, $tokken, $chat_id);

    $cases = $whatsup_good_case;
    $answers = $whatsup_good_answer;
    handler($message, $cases, $answers, $tokken, $chat_id);

    $cases = $whatsup_bad_case;
    $answers = $whatsup_bad_answer;
    handler($message, $cases, $answers, $tokken, $chat_id);
}






//This is Future Class - IS WORKING

// MarkDown parsing and urlEncode
function sendMessage($tokken, $chat_id, $ans_message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $chat_id ."&parse_mode=markdown&text=".urlencode($ans_message));
}


// MarkDown parsing and not URL
function sendMessageInline($tokken, $chat_id, $ans_message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $chat_id ."&parse_mode=markdown&text=".$ans_message);
}



// Usability Keyboard/working
function KeyboardMenu ($key_buttons)
{
    $buttons = $key_buttons;
    $keyboard = json_encode($keyboard=["keyboard"=>$buttons,
                                       'resize_keyboard'=>true,
                                       'one_time_keyboard'=>true,
                                       'selective'=>false]);
    $reply_markup='&reply_markup='.$keyboard.'';
    return $reply_markup;
}


function inlineKeyboard($inlinekey){
    $reply_markup='';
    $inkeyboard=$inlinekey;
    $keyboard = array("inline_keyboard"=>$inkeyboard);
    $keyboard=json_encode($keyboard, true);
    $reply_markup='&reply_markup='.$keyboard;

    return $reply_markup;
}



// Функция отвечает за обработку полученных сообщений/WORKING
function handler ($message, $cases, $answers, $tokken, $chat_id)
{
    if (in_array($message, $cases)) {
        $ans_message = $answers[mt_rand(0, count($answers) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
    }
}

//WORKING
function handlerInline ($message, $cases, $answers, $tokken, $chat_id,$key_buttons)
{
    if (in_array($message, $cases)) {
        $ans_message = $answers[mt_rand(0, count($answers) - 1)];
        sendMessageInline($tokken, $chat_id, $ans_message.KeyboardMenu($key_buttons));
    }
}

//WORKING
function handlerInlineNoRand ($message, $cases, $answers, $tokken, $chat_id,$key_buttons)
{
    if (in_array($message, $cases)) {
        $ans_message = $answers;
        sendMessageInline($tokken, $chat_id, $ans_message.KeyboardMenu($key_buttons));
    }
}


function handlerInlineKey ($message, $cases, $answers, $tokken, $chat_id,$inlinekey)
{
    if (in_array($message, $cases)) {
        $ans_message = $answers;
        sendMessageInline($tokken, $chat_id, $ans_message.inlineKeyboard($inlinekey));
    }
}

file_put_contents("logs.txt", $message);

// END WORKONG FUNCTIONS//

//TESTING FUNCTIONS//
/*
function sendMessageInlineKey($tokken, $chat_id_in, $ans_message){
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $chat_id_in."&parse_mode=markdown&text=".$ans_message);
}


if (isset($update['callback_query']['data'])) {

function checkInline($tokken,$update,$ans_message){
        $callback_query = $update['callback_query'];
        $chat_id_in = $callback_query['message']['chat']['id'];
        $message = $callback_query['data'];
        sendMessageInlineKey($tokken, $chat_id_in, $ans_message);
    }
}
*/