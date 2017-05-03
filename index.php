<?php
mb_internal_encoding("UTF-8");

require 'db.php';
include 'tokken.php';
include 'global_vars.php';
include 'cases.php';
include 'answer.php';


function handler ($message, $cases, $answers, $tokken, $chat_id)
{
    if (in_array($message, $cases)) {
        $ans_message = $answers[mt_rand(0, count($answers) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
    }
}


$cases = $hello_case;
$answers = $hello_answer;
handler ($message, $cases, $answers, $tokken, $chat_id);

$cases = $bye_case;
$answers = $bye_answer;
handler ($message, $cases, $answers, $tokken, $chat_id);

$cases = $fuck_case;
$answers = $fuck_answer;
handler ($message, $cases, $answers, $tokken, $chat_id);

$cases = $thanks_case;
$answers = $thanks_answer;
handler ($message, $cases, $answers, $tokken, $chat_id);

$cases = $jokes_case;
$answers = $jokes_answer;
handler ($message, $cases, $answers, $tokken, $chat_id);

$cases = $whatsup_case;
$answers = $whatsup_answer;
handler ($message, $cases, $answers, $tokken, $chat_id);

$cases = $whatsup_good_case;
$answers = $whatsup_good_answer;
handler ($message, $cases, $answers, $tokken, $chat_id);

$cases = $whatsup_bad_case;
$answers = $whatsup_bad_answer;
handler ($message, $cases, $answers, $tokken, $chat_id);



//Logics
/*
if (in_array($message,$test_case)) {
    $ans_message = $test_answer;
    sendMessage($tokken, $chat_id, $ans_message);
}
else{
    if (in_array($message,$hello_case)){
        $ans_message = $hello_answer[mt_rand(0, count($hello_answer) - 1)];
        sendMessage($tokken, $chat_id, $ans_message);
    }
    else{
        if(in_array($message,$bye_case)){
            $ans_message = $bye_answer[mt_rand(0, count($bye_answer) - 1)];
            sendMessage($tokken, $chat_id, $ans_message);
        }
        else{
            if(in_array($message,$fuck_case)){
                $ans_message = $fuck_answer[mt_rand(0, count($fuck_answer) - 1)];
                sendMessage($tokken, $chat_id, $ans_message);
            }
            else{
                if(in_array($message,$thaks_case)){
                    $ans_message = $thaks_answer[mt_rand(0, count($thanks_answer) - 1)];
                    sendMessage($tokken, $chat_id, $ans_message);
                }
                else{
                    if(in_array($message,$jokes_case)){
                        $ans_message = $jokes_answer[mt_rand(0, count($jokes_answer) - 1)];
                        sendMessage($tokken, $chat_id, $ans_message);
                    }
                    else{
                        if(in_array($message,$whatsup_case)){
                            $ans_message = $whatsup_answer[mt_rand(0, count($whatsup_answer) - 1)];
                            sendMessage($tokken, $chat_id, $ans_message);
                        }
                        else{
                            if(in_array($message,$whatsup_good_case)){
                                $ans_message = $whatsup_good_answer[mt_rand(0, count($whatsup_good_answer) - 1)];
                                sendMessage($tokken, $chat_id, $ans_message);
                            }
                            else{
                                if(in_array($message,$whatsup_bad_case)){
                                    $ans_message = $whatsup_bad_answer[mt_rand(0, count($whatsup_bad_answer) - 1)];
                                    sendMessage($tokken, $chat_id, $ans_message);
                                }
                                else{
                                    if(in_array($message,$start_test)){
                                        $ans_message = $questions[1];
                                        sendMessage($tokken, $chat_id, $ans_message);
                                    }
                                    else{
                                        if{
                                            $wotest = R::dispense('wotest');

                                            $wotest->question_num = $num_quest; //запись key questuions
                                            $wotest->answer = $message; //запись ответа на вопрос
                                            $ans_message = $questions[$num_quest+1];//??запись в ответное сообщение следующего вопроса??
                                            sendMessage($tokken, $chat_id, $ans_message); // отправка след вопроса
                                        }
                                    }
                                    $ans_message = 'Че-то я тебя не понял';
                                    sendMessage($tokken, $chat_id, $ans_message);
                                }
                            }
                        }
                    }
                }
            }
        }
    }

}
*/
########## Логика ветвей ###########
/*
 $arg1 = 'Почему?';
 $arg2 = 'Плохо';
 if (($message == $arg1) or ('$message[-1] == 'arg2'))
       $answer = $arg1_ans;
       sendMessage;


function sender ($message, $cases, $answers, $tokken, $chat_id){
        in_array($message,$cases)) {
        $ans_message = $answers;
        sendMessage($tokken, $chat_id, $ans_message);
    }
}
*/

//send Messages end put to logs file
function sendMessage($tokken, $chat_id, $ans_message)
{
    file_get_contents("https://api.telegram.org/bot". $tokken ."/sendMessage?chat_id=". $chat_id ."&text=". $ans_message);
}

file_put_contents("logs.txt", $message);


