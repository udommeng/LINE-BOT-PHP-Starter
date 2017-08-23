<?php

function insertUserId($userId,$message){

    $serverName = "ap-cdbr-azure-southeast-b.cloudapp.net";
    $userName = "b7d6df679dcdd2";
    $userPassword = "4f6be5a0";
	$dbName = "misschool";
	
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
		if (mysqli_connect_errno())
		{
			$sql = "insert into tbl_line(userId,message) values('$userId','$message')";
			$result = mysqli_query($conn,$sql) or die("เอ็กซิคิวต์คำสั่ง SQL ไม่ได้");
		}

	
		mysqli_close($conn);

}


$access_token = 'q30MmQc3ML9v7/o1R4yqt+HSDZvoupL04oSpI3LXl/nE43Vh49M0v4B69oFRIJjwwNH/9wsejZi04ILz8Z/P3U0g1IBEbECRd0VGaT3SKKr1FX6aH45tWa0qOlnL90T6ynTQQ3wG7hGcSeeejNadJwdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
            $replyToken = $event['replyToken'];

            // Get userID
            $userId = $event['source']['userId'];
			
			insertUserId($userid,$text);

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text.= " user ID" .$userId ." " .$result
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";