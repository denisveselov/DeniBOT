<?php
mb_internal_encoding("UTF-8");



/*
function checkInlineMessage($tokken,$answers,$update)
{
    if (isset($update['callback_query']['data'])) {
        $chat_id = $update['callback_query']['message']['chat']['id'];
        $ans_message = $answers;
        sendMessage($tokken, $chat_id, $ans_message);
    }
}








//Ready test (Working ver.)
function testing_start ($message, $cases, $answers, $tokken, $chat_id)
{
    if (in_array($message, $cases)) {
        $ans_message = $answers[1];
        file_put_contents('ans.txt', $ans_message );
        sendMessage($tokken, $chat_id, $ans_message);
    }
}
// End Readyfunc //


//testing
function testinger ($message, $cases, $answers, $tokken, $chat_id, $curr_quest)
{
    $curr_quest = file_get_contents("https://gidroservice.info/ans.txt");
    $curr_quest = array_search($curr_quest,$answers);
    $ans_message = $answers[$curr_quest+1];
    file_put_contents('ans.txt', $ans_message );
    sendMessage($tokken, $chat_id, $ans_message);
}
*/

/*
 После старт предлагается написать "Привет"/ после чего бот требует выбрать пол (мужской или женский)
  if female{
    accept_var{ //БОТ ПРЕДЛАГАЕТ ПРОЙТИ ТЕСТИРОВАНИЕ (wo_test)
        if test_accept{
            test_cheking; // прохождение теста
                if good_feed{ // если юзер успешно прошел тест
                    sendmessage user & father // направляем соответствующее сообщение юзеру (№  тел. владельца + предл.встречи) и владельцу бота
                        if accept{
                            предлагаем выбрать из списка заведения


                        }
                        else{
                            сообщение о том, как много она потеряла
                        }
                }
                else{
                    lose_feed //иначе направляем уведомление о провале теста
                    sendmessage user
                }
    }
    else male{
        вопросы идут в стандартном режиме
            Общение завершается если перечень вопросов изчерпан.
}
 */
