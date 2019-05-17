<?php
require_once('DatabaseConfiguration.php');
require_once('DatabaseConnection.php');
require_once('models/ZaposleniModel.php');

$databaseConfiguration = new DatabaseConfiguration('localhost','root','','evidencija');
$databaseConnection = new DatabaseConnection($databaseConfiguration);

$zaposleniModel = new ZaposleniModel($databaseConnection);

$zaposleni = $zaposleniModel->getByID(11);

print_r($zaposleni);