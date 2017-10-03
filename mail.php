<?php

$name = (htmlspecialchars(trim(($_POST['name']))));
$phone = (htmlspecialchars(trim(($_POST['phone']))));
$email = (htmlspecialchars(trim(($_POST['email']))));


if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")
    &&(isset($_POST['email'])&&$_POST['email']!="")){

    $to = 'mail@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $site_name ='ЗПК';
    $subject = 'Заказ обратного звонка з сайта:'.$site_name; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$name.'</p>
                        <p>Телефон: '.$phone.'</p>
                        <p>Email: '.$email.'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}