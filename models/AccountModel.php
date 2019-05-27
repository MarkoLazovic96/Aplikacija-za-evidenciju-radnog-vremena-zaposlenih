<?php
namespace App\Models;

use App\Core\Field;
use App\Core\Model;

    class AccountModel extends Model {
        protected function getFields(): array {
            return [
                'account_id' => Field::readonlyInteger(10),
                'status' => Field::readonlyString(2),
                'employee_id' => Field::readonlyInteger(10)
             ];  
        }  
}