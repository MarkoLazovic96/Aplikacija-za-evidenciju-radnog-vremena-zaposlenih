<?php
require_once('vendor/autoload.php');

$databaseConfiguration = new App\Core\DatabaseConfiguration('localhost','root','','evidencija');
$databaseConnection = new App\Core\DatabaseConnection($databaseConfiguration);

$controller = new \App\Controllers\MainController($databaseConnectionata);
$data = $controller->home();

foreach ($data as $ime => $value) {

    $$name = $value;

}