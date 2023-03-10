<?php

use Random\Engine\Secure;
use User as GlobalUser;

class User extends Api{

    public $id;
    public $username;
    public $password;
    public $rule;
    protected static $columns = array('username','password','rule');
   
    public static function verify($username , $password){
        $password = hash('gost',$password);
        $result = self::query_proccess("SELECT * FROM ".self::$table." WHERE `username` = '$username' AND `password` = '$password'");
        return !empty($result) ? array_shift($result) : false ;
    }


   
}

$user = new User();
?>
