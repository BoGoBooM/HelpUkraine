<?php 

/* https://api.telegram.org/bot5322562951:AAENujJOUemepr4GmM_kVysjpiKGG0GQnEg/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$locate = $_POST['user_locate'];
$help = $_POST['user_can'];
$token = "5322562951:AAENujJOUemepr4GmM_kVysjpiKGG0GQnEg";
$chat_id = "-682543421";
$arr = array(
     $name => ' Пропонує свою допомогу',
    "Ім'я користувача: " => $name,
    'Телефон: ' => $phone,
    'Місцезнаходження:  ' => $locate,
    'Пропоную допомогу: ' => $help
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    header('location: ua.html');
} else {
    echo "Error";
}
?>