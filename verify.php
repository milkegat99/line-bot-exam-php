<?php
$access_token = '09MxCV4dElHkhDH+UygLCPT1aMsNT3g//Zyoj986C1BGPjC2ynmkVOTHVNSEGwkrFHP7YvUony1Ij0JS6TeAJ85R6ojfbPLUenUBlyYTqOhPcg1JaCVKP2YwkzYNtqPuI4QI6+ReeGeAP944QH7oPwdB04t89/1O/w1cDnyilFU=
';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
