<?php
class Session{
    public $id;
    public $rule;
    private $logged_in = false;

    public function __construct()
    {
        session_start();
        $this->check_login();
    }

    public function get_logged_in(){
        return $this->logged_in;
    }

    public function loggin($obj){
        $this->id = $_SESSION['id'] =$obj->id;
        $this->rule = $_SESSION['rule'] = $obj->rule ; 
        $this->logged_in = true ;
    }

    public function logout(){
        unset($this->id);
        unset($this->rule);
        unset($_SESSION['id']);
        unset($_SESSION['rule']);
        $this->logged_in = false ;
    }

    private function check_login(){
        if((isset($_SESSION['id'])) && (isset($_SESSION['rule']))){
            $this->id = $_SESSION['id'];
            $this->rule = $_SESSION['rule'];
            $this->logged_in = true ;
        }else{
            unset($this->id);
            unset($this->rule);
            $this->logged_in = false ;
        }
    }
}
$session = new Session();

?>