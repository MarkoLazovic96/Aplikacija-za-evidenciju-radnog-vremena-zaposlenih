<?php
namespace App\Models;

use App\Core\Field;
use App\Core\Model;

    class AdministratorModel extends Model{
        protected function getFields(): array {
            return [
                'account_id' => Field::readonlyInteger(10),
                'name' => Field::editableString(45),
                'lastname' => Field::editableString(45),
                'username' => Field::editableString(45),
                'password_hash' => Field::editableString(128),
                'email' => Field::editableEmail(),
                'creted_at' => Field::readonlyDateTime()
             ];
        }     
}