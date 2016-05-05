<?php

namespace Dbo\Models;

use Dbo\DbMan;

class Balance extends DbMan {
    
    public function getHighest(){
        return $this->simpleQuery('SELECT * FROM raw_balances ORDER BY balance DESC LIMIT 1')[0];
    }
    
    public function getDataByCardNum($cardnum = 57){
        return $this->prepareExecuteQuery(
            "SELECT * FROM raw_balances WHERE card_number = :card_number ORDER BY fetched_at DESC",
            [
                ":card_number" => [$cardnum, \PDO::PARAM_INT]
            ]
        );
    }
    
    public function getRandom($howMany = 5)
    {
        $res = $this->simpleQuery('SELECT * FROM raw_balances ORDER BY RAND() LIMIT 5');    
        return $res;
    }
    
}