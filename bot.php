<?php

$access_token = 'q30MmQc3ML9v7/o1R4yqt+HSDZvoupL04oSpI3LXl/nE43Vh49M0v4B69oFRIJjwwNH/9wsejZi04ILz8Z/P3U0g1IBEbECRd0VGaT3SKKr1FX6aH45tWa0qOlnL90T6ynTQQ3wG7hGcSeeejNadJwdB04t89/1O/w1cDnyilFU=';


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);
$response = $bot->getProfile('<userId>');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}