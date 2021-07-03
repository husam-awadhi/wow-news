<?php 

namespace App\Model;

use App\Model\Model;


class Home extends Model{

    protected $table = '';
    protected $key = '';

    public function get($id) : array
    {
        return [];
    }

    public function getWhere($where = '1=1') : array
    {
        return [];
    }
}