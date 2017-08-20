<?php
$access_token = 'q30MmQc3ML9v7/o1R4yqt+HSDZvoupL04oSpI3LXl/nE43Vh49M0v4B69oFRIJjwwNH/9wsejZi04ILz8Z/P3U0g1IBEbECRd0VGaT3SKKr1FX6aH45tWa0qOlnL90T6ynTQQ3wG7hGcSeeejNadJwdB04t89/1O/w1cDnyilFU=';
$userid = 'U3ecb2860486ae1014519e0d957ae51c4';

// Make a POST Request to Messaging API to reply to sender

$url = 'https://api.line.me/v2/bot/profile/'.$userid;

$headers = array('Content-Type: application/json', 'Authorization: Bearer ' .$access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
curl_close($ch);

$idata = json_decode($result, true);
if (!is_null($idata['userId'])) {
    $text = $idata['displayName'];

}



echo $text;
echo $url;
echo $result;

