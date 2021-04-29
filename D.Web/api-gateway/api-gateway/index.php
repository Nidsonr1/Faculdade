<?php

require_once "vendor/autoload.php";
require_once "httpRequest.php";

use Slim\App;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app = new App();


$app->post('/calculadora', function(Request $request, Response $response, array $args) {
  $dados = json_decode($request->getBody()->getContents(), true);

  $operacao = $dados['operacao'];

  if($operacao == '1') {
    $url = "http://localhost/TDE/apiSomar";
    $result = post("$url/somar", $dados);

    return $response->withJson($result);
  } 
  if($operacao == '2') {
    $url = "http://localhost/TDE/apiMultiplicar";
    $result = post("$url/multiplicar", $dados);

    return $response->withJson($result);
  } 
});

$app->run();
