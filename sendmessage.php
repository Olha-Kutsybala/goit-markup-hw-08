<?php
$content = '';
foreach($_POST as $key => $value){
    if($value){
        $content .= "<b>$key</b>: <i>$value</i>\n";
    }
}
if(trim($content)){
    $content = "<b>Message from Site</b>\n".$content;
    $apiToken = "6667312532:AAGbSX8Er9D7YQnTFX5u6QnqyL_S40cnRok";
    $data = [
        'chat_id' => '@testMusicSchool2Bot',
        'text' => $content,
        'parse_mode' => 'HTML'
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data))
}
?>
