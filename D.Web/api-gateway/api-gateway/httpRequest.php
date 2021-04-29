<?php

function post(string $url, array $dados=[]) {

  $c = curl_init($url);
  
  curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($c, CURLOPT_POST, true);
  curl_setopt($c, CURLOPT_POSTFIELDS, json_encode(($dados)));

  $response = curl_exec($c);
  $response = json_decode($response, true);

  curl_close($c);

  return $response;
}