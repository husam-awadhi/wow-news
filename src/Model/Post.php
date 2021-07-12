<?php 

namespace App\Model;

use App\Model\Model;


class Post extends Model{

    protected $table = 'posts';
    protected $key = 'id';
    protected $defaultWhere = '`show` = 1';
}