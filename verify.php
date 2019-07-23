<?php
$access_token = 'etf4w8zZdlT2cfYoSLWTFWlQNfCSezV6FF9lB79Ru5VePFLK+o2ziPBhInBrHLw++P2MdXiatPEEFW/L+UhA9Ds5PuWkt27O6yJbUq0yZEaO6c3V9s8lzNXi901Zw8q4yFb7JKoJM1hP/I2KRFH62gdB04t89/1O/w1cDnyilFU=
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
