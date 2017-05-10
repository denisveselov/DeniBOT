<?php
mb_internal_encoding("UTF-8");
require 'db.php';
include 'tokken.php';
include 'global_vars.php';
include 'cases.php';
include 'answer.php';




//Handlers Mode
if (isset($update['callback_query']['data'])) {
    callbackQuery($update, $tokken);
}


    $cases = $run;
    $answers = $startbot;
    handler($message, $cases, $answers, $tokken, $chat_id);


    $cases = $rundef;
    $answers = $gender_answer;
    $key_buttons = [['Мужской'], ['Женский']]; //заменить массивами
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $female_case; //объявляем переменную для проверки с отправленным сообщением
    $answers = $gender_reply; // объявляем переменную для ответа юзеру
    $key_buttons = [['Хочу пройти тест'], ['Не хочу тест']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $start_quest;
    $answers = $questions1;
    $key_buttons = [['150-159см'], ['160-169см'], ['свыше 170см']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans1;
    $answers = $questions2;
    $key_buttons = [['45 - 50кг'], ['50 - 59кг'], ['свыше 60кг']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans2;
    $answers = $questions3;
    $key_buttons = [['Голубые'], ['Зеленые'], ['Карие'], ['Другой цвет']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans3;
    $answers = $questions4;
    $key_buttons = [['Блондинка'], ['Брюнетка'], ['Рыжая'], ['Русая']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans4;
    $answers = $questions5;
    $key_buttons = [['Есть'], ['Нет'], ['Мне не хватает времени']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans5;
    $answers = $questions6;
    $key_buttons = [['Я же сказала, что нет времени'], ['Тренировки'], ['Книги'], ['Рукоделье'], ['Иное']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans6;
    $answers = $questions7;
    $key_buttons = [['Ремарк'], ['Экзюпери'], ['Достоевский'], ['Брэдбери'], ['Толстой'], ['Иное']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans7;
    $answers = $questions8;
    $key_buttons = [['Карьера и деньги'], ['Семья и дети'], ['Самореализация'], ['Иное']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans8;
    $answers = $questions9;
    $key_buttons = [['1'], ['2'], ['3'], ['4'], ['5'], ['Не хочу детей']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans9;
    $answers = $questions10;
    $key_buttons = [['1й'], ['2й'], ['3й'], ['4й']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans10;
    $answers = $questions11;
    $key_buttons = [['Люблю'], ['Не люблю'], ['Только не для себя'], ['Только для себя']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans11;
    $answers = $questions12;
    $key_buttons = [['Астрал'], ['Мальчишник в Вегасе'], ['Исчезнувшая'], ['50 оттенков серого'], ['1+1'], ['Легенда №17']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans12;
    $answers = $questions13;
    $key_buttons = [['Английскому языку'], ['Рисовать'], ['Программировать'], ['Готовить'], ['Молчать в нужный момент']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans13;
    $answers = $questions14;
    $key_buttons = [['Очень! Подписана 18+'], ['Все люди пошлые'], ['Фу, это не про меня']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans14;
    $answers = $questions15;
    $key_buttons = [['Когда всегда вместе'], ['Во всем должен быть баланс'], ['В зависимости от занятости']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans15;
    $answers = $questions16;
    $key_buttons = [['Красное сухое'], ['Красное полусладкое'], ['Белое сухое'], ['Белое полусладкое'], ['Не люблю вино']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans16;
    $answers = $questions17;
    $key_buttons = [['Любовь'], ['Страсть'], ['Для меня важно наличие обоих факторов']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans17;
    $answers = $questions18;
    $key_buttons = [['Тусовки'], ['Должен быть баланс'], ['Только мир на двоих']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans18;
    $answers = $questions19;
    $key_buttons = [['Главное настоящее и будущее'], ['Прошлое говорит о многом']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_ans19;
    $answers = $questions20;
    $key_buttons = [['Да, пробовала'], ['Только марихуану'], ['Нет, и не желаю'], ['Нет, но хотелось бы']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    $cases = $test_total;
    $answers = $finished;
    $key_buttons = [['Завершить тест']];
    handlerInline($message, $cases, $answers, $tokken, $chat_id, $key_buttons);


    /*
    $cases = $test_case_ans1;
    $answers = $questions[1];
    $btn1 = array('text'=>'от 45 - 50кг.','callback_data'=>"малый вес");
    $btn2 = array('text'=>'от 50 - 59кг.','callback_data'=>"средний вес");
    $btn3 = array('text'=>'свыше 60кг.','callback_data'=>"высокий вес");
    $inlinekey = [[$btn1],[$btn2],[$btn3]];
    handlerInlineKey ($message, $cases, $answers, $tokken, $chat_id,$inlinekey);
    */

    $cases = $closed_test;
    $answers = $genderman_reply;
    handler($message, $cases, $answers, $tokken, $chat_id);


    $cases = $male_case;
    $answers = $genderman_reply;
    handler($message, $cases, $answers, $tokken, $chat_id);


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




//This is Future Class - IS WORKING
// MarkDown parsing and urlEncode



//Отвечает за отправку сообщений
function sendMessage($tokken, $chat_id, $ans_message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $chat_id ."&parse_mode=markdown&text=".$ans_message);
}



// Вызывает меню-клавиатуру
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


//Инлайновая клавиатура
function inlineKeyboard($inlinekey){
    $reply_markup='';
    $inkeyboard=$inlinekey;
    $keyboard = array("inline_keyboard"=>$inkeyboard);
    $keyboard=json_encode($keyboard, true);
    $reply_markup='&reply_markup='.$keyboard;
    return $reply_markup;
}

//// ОБРАБОТЧИКИ СООБЩЕНИЙ////
// Функция отвечает за обработку полученных обычных сообщений
function handler ($message, $cases, $answers, $tokken, $chat_id)
{
    if (in_array($message, $cases)) {
        $ans_message = $answers[mt_rand(0, count($answers) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
    }
}
// Функция отвечает за обработку полученных сообщений от кейбоард меню
function handlerInline ($message, $cases, $answers, $tokken, $chat_id,$key_buttons)
{
    if (in_array($message, $cases)) {
        $ans_message = $answers[mt_rand(0, count($answers) - 1)];
        sendMessage($tokken, $chat_id, $ans_message.KeyboardMenu($key_buttons));
    }
}


// Функция отвечает за обработку полученных инлайновых сообщений
function handlerInlineKey ($message, $cases, $answers, $tokken, $chat_id,$inlinekey)
{
    if (in_array($message, $cases)) {
        $ans_message = $answers;
        sendMessage($tokken, $chat_id, $ans_message.inlineKeyboard($inlinekey));
    }
}

function callbackQuery($update,$tokken)
{
    $chat_id = $update['callback_query']['message']['chat']['id'];
    $message = $update['callback_query']['data'];
    $ans_message = $message;
    sendMessage($tokken, $chat_id, $ans_message);
}

///




file_put_contents("logs.txt", $message);
