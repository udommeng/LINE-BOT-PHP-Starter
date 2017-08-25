<?php

$access_token = 'q30MmQc3ML9v7/o1R4yqt+HSDZvoupL04oSpI3LXl/nE43Vh49M0v4B69oFRIJjwwNH/9wsejZi04ILz8Z/P3U0g1IBEbECRd0VGaT3SKKr1FX6aH45tWa0qOlnL90T6ynTQQ3wG7hGcSeeejNadJwdB04t89/1O/w1cDnyilFU=';


//-- user id ที่จะทำการส่ง --
$userID1 = 'U3ecb2860486ae1014519e0d957ae51c4';
$userID2 = 'U02196f392b0efbedefbfe0996d77ff34';

$date = date("Y-m-d");
$time = date("H:i:s");

// Build message to reply back
$messages = [
    'type' => 'text',
    'text' => "ทดสอบส่ง ข้อความจาก Line เวลา " .$date ." / " . $time
];
            

// Make a POST Request to Messaging API to reply to sender
$url = 'https://api.line.me/v2/bot/message/push';
$data = [
    'to' => $userID1,
    'messages' => [$messages],
];

$post = json_encode($data);
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' .$access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);


$data = [
    'to' => $userID2,
    'messages' => [$messages],
];

$post = json_encode($data);
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' .$access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $post;