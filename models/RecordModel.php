<?php
namespace App\Models;

use App\Core\Field;
use App\Core\Model;
    class RecordModel extends Model{
        protected function getFields(): array {
            return [
                'record_id' => Field::readonlyInteger(10),
                'account_id' => Field::editableInteger(10),
                'creted_at' => Field::editableInteger(10)
             ];
        }

        public function getReccordByAccountId(int $accountId){
            $sql = 'SELECT
            record.creted_at,
            employee.name,
            employee.lastname,
            account.status
            FROM
            record,
            employee,
            account
            WHERE
            account.account_id = ? AND
            record.account_id = ? AND
            employee.employee_id = account.employee_id
            ORDER BY record.creted_at DESC
            limit 1;';
            $prep = $this->getConnection()->prepare($sql);
            $res=$prep->execute([$accountId,$accountId]);
            $recors = null;
            if($res){
                $recors = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $recors;                                          
        }
}