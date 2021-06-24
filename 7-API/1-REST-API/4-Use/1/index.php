<?php
$params = http_build_query([
    "user_id"=>"3"

]);


$options = array(
    CURLOPT_URL => "https://api.coindesk.com/v1/bpi/currentprice.json",
    CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true
);

$ch = curl_init();
curl_setopt_array($ch, $options);

$response = curl_exec($ch);

curl_close($ch);


$price = json_decode($response,true)["bpi"]['USD']['rate'];
$code = json_decode($response,true)["bpi"]['USD']['code'];
$description = json_decode($response,true)["bpi"]['USD']['description'];


echo '<h1 style="font-family: sans-serif" > BITCOIN PRICE : </h1>';
echo'</br>';

echo '<h1 style="font-family: sans-serif" > USD </h1>';

echo '<p style="font-family: sans-serif; font-weight: 600;font-size: 35px" > price :  ' . $price . '</p>';
echo '<p style="font-family: sans-serif; font-weight: 600;font-size: 35px" > code : '  .$code . '</p>';
echo '<p style="font-family: sans-serif; font-weight: 600;font-size: 35px" > description : '  . $description  . '</p>';
echo '<p style="font-family: sans-serif; font-weight: 600;font-size: 35px" >'  . '---------------------------------------------'  . '</p>';


$price2 = json_decode($response,true)["bpi"]['EUR']['rate'];
$code2 = json_decode($response,true)["bpi"]['EUR']['code'];
$description2 = json_decode($response,true)["bpi"]['EUR']['description'];

echo '<h1 style="font-family: sans-serif" > EUR </h1>';

echo '<p style="font-family: sans-serif; font-weight: 600;font-size: 35px" > price :  ' . $price2 . '</p>';
echo '<p style="font-family: sans-serif; font-weight: 600;font-size: 35px" > code : '  .$code2 . '</p>';
echo '<p style="font-family: sans-serif; font-weight: 600;font-size: 35px" > description : '  . $description2  . '</p>';


 header("Refresh:5");
//echo $response;