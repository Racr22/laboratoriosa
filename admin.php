<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    require_once 'admin.php';
    require_once './vendor/autoload.php';
    $config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;
$app = new \Slim\App(["settings" => $config]);
$app->get('/adm',function(Request $request,Response $response){
    include("adm.html");
    
});
$app->run();
?>