<?php
require_once('vendor/autoload.php');

$databaseConfiguration = new App\Core\DatabaseConfiguration('localhost','root','','evidencija');
$databaseConnection = new App\Core\DatabaseConnection($databaseConfiguration);

<<<<<<< HEAD
$url = filter_input(INPUT_GET,'URL');
die($url);

$zaposleniModel = new App\Models\ZaposleniModel($databaseConnection);
=======
$controller = new \App\Controllers\MainController($databaseConnectionata);
$data = $controller->home();
>>>>>>> 76007b890b79e1d25cd7bdfbda10ac6ce6cd1a01

foreach ($data as $ime => $value) {

    $$name = $value;

}