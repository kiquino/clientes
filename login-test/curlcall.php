<?php 

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://kitsu.io/api/edge/anime/".$_GET["id"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>