<?php
namespace App\Models;

use App\Core\DatabaseConnection;
    class ZaposleniModel{
        private $dbc;

        public function __construct(DatabaseConnection $dbc){
            $this->dbc=$dbc;
        }

        public function getByID(int $zaposleniID){
            $sql = 'SELECT * FROM zaposleni WHERE zaposleni_id=?;';
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res=$prep->execute([$zaposleniID]);
            $zaposleni = NULL;
            if($res){
                $zaposleni = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $zaposleni;                                          
        }
        public function getAll(){
            $sql = 'SELECT * FROM zaposleni';
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res=$prep->execute([$zaposleniID]);
            $zaposleni = NULL;
            if($res){
                $zaposleni = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $zaposleni;                                          
        }
}