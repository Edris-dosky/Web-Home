<?php

use User as GlobalUser;

class User extends Api{
    public $user_id ;
    public $username;
    public $tell;
    public $email;
    public $password;
    public $photo;
    protected static $table = "`users`";
    protected static $columns =  array('user_id','username','tell','email','password','photo');

    public static function verify($tell , $password){
        $password = hash('gost' , $password);
        $single_user_data = self::query_proccess("SELECT * FROM `users` WHERE `tell` ='$tell' AND `password` = '$password' LIMIT 1");
        return !empty($single_user_data) ? array_shift($single_user_data) : false;        
    }

}
$user = new User();
?>