<?php

namespace App\Controllers;
class MainController extends \App\Core\Controller {
    public function home() {
        $zaposleniModel = new \App\Models\ZaposleniModel($this->getDatabaseConnection());
        $zaposleniList = $zaposleniModel->getAll(); 

        $this->set('zaposleniList',$zaposleniList);

    }
}