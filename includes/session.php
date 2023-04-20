<?php
class Session{
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
        $this->tell = $_SESSION['tell'] = $obj->tell ; 
        $this->logged_in = true ;
    }

    public function logout(){
        unset($this->tell);
        unset($_SESSION['tell']);
        $this->logged_in = false ;
    }

    private function check_login(){
        if((isset($_SESSION['tell']))){
            $this->tell = $_SESSION['tell'];
            $this->logged_in = true ;
        }else{
            unset($this->tell);
            $this->logged_in = false ;
        }
    }
}
$session = new Session();

?>