<?php
$content = '';
foreach($_POST as $key => $value){
    if($value){
        $content .= "<b>$key</b>: <i>$value</i>\n";
    }
}
if(trim($content)){
    $content = "<b>Message from Site</b>\n".$content;
    $apiToken = "6425077337:AAFg0JLNgMJ16QjCW3UxxoEafchRf8HlTxE";
    $data = [
        'chat_id' => '@WebstudioMy',
        'text' => $content,
        'parse_mode' => 'HTML'
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
}
?>
