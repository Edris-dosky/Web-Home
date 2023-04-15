<?php
class Session{
    public $user_id;
    public $tell;
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
        $this->user_id = $_SESSION['user_id'] =$obj->user_id;
        $this->tell = $_SESSION['tell'] = $obj->tell ; 
        $this->logged_in = true ;
    }

    public function logout(){
        unset($this->user_id);
        unset($this->tell);
        unset($_SESSION['user_id']);
        unset($_SESSION['tell']);
        $this->logged_in = false ;
    }

    private function check_login(){
        if((isset($_SESSION['user_id'])) && (isset($_SESSION['tell']))){
            $this->user_id = $_SESSION['user_id'];
            $this->tell = $_SESSION['tell'];
            $this->logged_in = true ;
        }else{
            unset($this->user_id);
            unset($this->tell);
            $this->logged_in = false ;
        }
    }
}
$session = new Session();

?>