<?php


$ch =curl_init('http://thisisjay.me/user_list_curl.php');

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST, 1);
$result = curl_exec($ch);

//  echo $result;  

echo $result;

// $res =json_decode($result);




?>