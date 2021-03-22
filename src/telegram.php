<?php

/* https://api.telegram.org/bot1757083490:AAFBpogLY1TfKMpqe33kNp4WaOQUhj__guU/getUpdates */

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['text'];

$token = "1757083490:AAFBpogLY1TfKMpqe33kNp4WaOQUhj__guU";
$chat_id = "-557721662";
$arr = array (
    'Имя пользователя:' => $name,
    'Email:' => $email_address,
    'Сообщение:' => $message
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    header('Location: index.html');
} else {
    echo "Ошибка...";
}
?>