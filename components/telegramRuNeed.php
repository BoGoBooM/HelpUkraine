<?php 

/* https://api.telegram.org/bot5322562951:AAENujJOUemepr4GmM_kVysjpiKGG0GQnEg/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$locate = $_POST['user_locate'];
$help = $_POST['user_need'];
$token = "5322562951:AAENujJOUemepr4GmM_kVysjpiKGG0GQnEg";
$chat_id = "-682543421";
$arr = array(
     $name => ' Нуждается в помощи',
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
    'Местонахождение:  ' => $locate,
    'Нуждаюсь в помощи: ' => $help
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    echo "Спасибо за ваше обращение. Мы свяжемся с вами в ближайшее время";
} else {
    echo "Ошибка отправки"
}
?>