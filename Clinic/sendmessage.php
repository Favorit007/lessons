<?php
$content = '';
foreach ($_POST as $key => $value){
  if($value){
    $content .= "<b>$key</b>: <i>$value</i>\n";
  }
}
if(trim($content)){
  $content ="<b>Message from Site:</b>\n".$content;
  // my bot-token
  $apiToken = "6384724720:AAFTCgrVAnqDkAP6Ln7FtXeRnt0oWjizwkU";
  $data = [
    // user chat(width bot) telegramm chat id
    'chat_id' => '@Favorit007Shop',
    'text' => $content,
    'parse_mode' => 'HTML'
  ];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
}
?>