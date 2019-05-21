<?php
require_once('vendor/autoload.php');

$databaseConfiguration = new App\Core\DatabaseConfiguration('localhost','root','','evidencija');
$databaseConnection = new App\Core\DatabaseConnection($databaseConfiguration);

$zaposleniModel = new App\Models\ZaposleniModel($databaseConnection);

$zaposleni = $zaposleniModel->getByID(11);

print_r($zaposleni);