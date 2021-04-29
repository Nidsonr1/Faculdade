<?php
require_once "httpRequest.php";

$urlApi = "http://localhost/TDE/api-gateway/calculadora";
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$operacao = $_POST['operacao'];

$response = post($urlApi, [
  "operacao" => $operacao,
  "valor1" => $valor1,
  "valor2" => $valor2
]);

var_dump($response);

?>




