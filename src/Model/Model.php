<?php

namespace App\Model;

use App\DB;

class Model
{

    protected $defaultWhere = '1=1';

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

    public function get($id) : array
    {
        return $this->fetchOne("SELECT * FROM `{$this->table}` WHERE ({$this->key} = ?) AND ({$this->defaultWhere})",[$id]);
    }

    public function getWhere($where = '1=1') : array
    {
        return $this->fetchArray("SELECT * FROM `{$this->table}` WHERE ($where) AND ({$this->defaultWhere})");
    }
}
