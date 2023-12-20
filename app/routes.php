<?php
use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;



return function(App $app)
{
    $app->get('/application/', function (Request $request, Response $response, $args) {
        $output = ['id' => 1, 'name' => 'abc'];

        $response->getBody()->write(json_encode($output));

        return $response;
    });
};