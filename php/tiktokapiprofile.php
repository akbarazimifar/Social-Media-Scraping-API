<?php

$params = array(
    'url' => 'https://www.tiktok.com/@nba',
  	'target' => 'tiktok_api_profile',
    'count' => '20',
    'timestamp' => '1681938000',
  	'locale' => 'en-us',
  	'geo' => 'United States'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://scraper-api.smartproxy.com/v1/scrape');
curl_setopt($ch, CURLOPT_USERPWD, 'username' . ':' . 'password');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>