<?php
class Session{
    public $id;
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
        $this->id = $_SESSION['id'] =$obj->id;
        $this->tell = $_SESSION['tell'] = $obj->tell ; 
        $this->logged_in = true ;
    }

    public function logout(){
        unset($this->id);
        unset($this->tell);
        unset($_SESSION['id']);
        unset($_SESSION['tell']);
        $this->logged_in = false ;
    }

    private function check_login(){
        if((isset($_SESSION['id'])) && (isset($_SESSION['tell']))){
            $this->id = $_SESSION['id'];
            $this->tell = $_SESSION['te'];
            $this->logged_in = true ;
        }else{
            unset($this->id);
            unset($this->tell);
            $this->logged_in = false ;
        }
    }
}
$session = new Session();

?>