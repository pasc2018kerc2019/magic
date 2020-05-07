<?php 

use Slim\Http\Request;
use Slim\Http\Response;
use Monolog\Logger;

$app = new \Slim\App();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write(file_get_contents('./src/views/index.php'));

    return $response;
});

$app->get('/plop', function (Request $request, Response $response, $args) {
    $response->getBody()->write(file_get_contents('./src/views/plop.php'));

    return $response;
});

$app->get('/infos', function (Request $request, Response $response, $args) {
    $hero = new Personage('John-Mickael Jr.', 100);

    return $response->withJson(['hero' => $hero->infos()]);
});

$app->run();
