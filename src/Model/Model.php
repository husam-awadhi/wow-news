<?php

namespace App\Model;

use App\DB;

class Model
{

    public function __construct()
    {
        $this->db = DB::getConnection();
    }

    public function fetchArray($statement, $bindings = [])
    {
        $sth = $this->prepareSQL($statement, $bindings);
        
        return $sth->fetchAll();
    }
    
    public function fetchOne($statement, $bindings = [])
    {
        $sth = $this->prepareSQL($statement, $bindings);
        $result = $sth->fetchAll();
        return (isset($result[0]) ? $result[0] : []);
    }

    private function prepareSQL($statement, $bindings = [])
    {
        $sth = $this->db->prepare($statement);
        $sth->execute($bindings);
        return $sth; 
    }
}
