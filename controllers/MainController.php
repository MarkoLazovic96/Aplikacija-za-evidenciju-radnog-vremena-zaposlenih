<?php

namespace App\Controllers;
class MainController extends \App\Core\Controller {
    public function home() {
        
    }
    public function getLogin(){

    } 
    public function postRecord(){
        $accountId = \filter_input(INPUT_POST,'account_id',FILTER_SANITIZE_STRING);
        $accountModel = new \App\Models\AccountModel($this->getDatabaseConnection());
        $account = $accountModel->getById($accountId);

        if(!$account){
            header('Location: /');
            exit;
        }

        $recordModel = new \App\Models\RecordModel($this->getDatabaseConnection());
        $recordModel->add(
            [
            'account_id'=>$accountId
            ]
        );
        $record = $recordModel->getReccordByAccountId($accountId);
        $this->set('record', $record);
    }
    public function postLogin(){
        $username = \filter_input(INPUT_POST,'login_username',FILTER_SANITIZE_STRING);
        $password = \filter_input(INPUT_POST,'login_password',FILTER_SANITIZE_STRING);
    }
   
}