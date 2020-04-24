<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    private $users = array('admin'=>'none', 'denys'=>'churchyn');
    protected $products = array('Apples'=>10, 'Bananas'=>3, 'Grapes'=>22);
    private $additional = array('Apples'=>'They are rounded', 'Bananas'=>'They are yellow', 'Grapes'=>'They are good for wine');

    public function getProducts($number) {
        return array_slice($this->products, 0, $number);
    }
    public function getAdditional($name){
        return $this->additional[$name] ?? 'no info';
    }
    public function checkUser($login, $password){
        $login = isset($login) ? $login : '';
        $password = isset($password) ? $password : '';

        if(!isset($this->users[$login]) or $this->users[$login] != $password )
            return false;
        else
            return true;
    }
}
