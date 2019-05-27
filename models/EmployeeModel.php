<?php
namespace App\Models;

use App\Core\Field;
use App\Core\Model;

    class EmployeeModel extends Model{
        protected function getFields(): array {
            return [
                'employee_id' => Field::readonlyInteger(10),
                'name' => Field::editableString(45),
                'lastname' =>Field::editableString(45),
                'address' => Field::editableString(45),
                'phone' => Field::editableString(45),
                'mail' => Field::editableEmail(),
                'created_at' => Field::readonlyDateTime()
             ];   
        }
}