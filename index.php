<?php
require_once 'Configuration.php';
require_once 'vendor/autoload.php';

$databaseConfiguration = new App\Core\DatabaseConfiguration(
    Configuration::DATABASE_HOST,
    Configuration::DATABASE_USER,
    Configuration::DATABASE_PASS,   
    Configuration::DATABASE_NAME
);
$databaseConnectionata = new App\Core\DatabaseConnection($databaseConfiguration);

$url= strval(filter_input(INPUT_GET,'URL'));
$httpMethod = filter_input(INPUT_SERVER,'REQUEST_METHOD');

$router = new App\Core\Router();
$routes = require_once 'Routes.php';

foreach ($routes as $route){
    $router->add($route);
}

$route = $router->find($httpMethod, $url);
$arguments = $route->exstractArguments($url);
#print_r($route);
#print_r($arguments);

$fullContollerName = '\\App\\Controllers\\' . $route->getControllerName() . 'Contoller';
$controller = new App\Controllers\MainController($databaseConnectionata);
call_user_func_array([$controller,$route->getMethodName()], $arguments);

$data = $controller->getData();

$loader = new Twig_Loader_Filesystem("./views");
$twig = new Twig_Environment($loader,[
"cache" => "./twig-cache",
"auto_reload" => true
]);
echo $twig->render(
    $route->getControllerName() . '/' . $route->getMethodName() . '.html', $data);
