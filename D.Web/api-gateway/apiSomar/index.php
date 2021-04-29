<?php

require_once "vendor/autoload.php";

use Slim\App;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new App();

$app->post('/somar', function(Request $request, Response $response, array $args) {
  $dados = json_decode($request->getBody()->getContents(), true);

  $result = $dados['valor1'] + $dados['valor2'];
  
  return $response->withJson([
    'Resultado da Soma' => $result
  ]);
});

$app->run();
