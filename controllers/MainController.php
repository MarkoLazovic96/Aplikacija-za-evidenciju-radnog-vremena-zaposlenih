<?php

namespace App\Contollers;

class MainController {
    private $dbc;

    public function __constuct(\App\Core\DatabaseConnection &$dbc){ 
        $this->dbc = $dbc;
    }
    
    public function home() {
        $ZaposleniModel = new \App\Models\ZaposleniModel(this->dbc);
        $Zaposleni = $ZaposleniModel->getByID(11); 
        

        return 
            'Zaposleni' => $Zaposleni
    ];
    }
}