<?php

$botToken = "YOUR_BOT_TOKEN";
$chatId = "YOUR_CHAT_ID";

$message = "New Payment Received";

$url = "https://api.telegram.org/bot$botToken/sendMessage";

$data = [
'chat_id'=>$chatId,
'text'=>$message
];

$options = [
'http'=>[
'method'=>'POST',
'header'=>"Content-type: application/x-www-form-urlencoded\r\n",
'content'=>http_build_query($data)
]
];

$context = stream_context_create($options);

file_get_contents($url,false,$context);

?>
