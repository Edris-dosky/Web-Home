<?php
class Post extends Api{
    public $post_id ;
    public $name ;
    public $tell ;
    public $email ;
    public $area ;
    public $location ;
    public $city;
    public $price ;
    public $price_type;
    public $type ;
    public $bedroom ;
    public $bathroom ;
    public $recaptionroom ;
    public $time ;
    public $details;
    public $user_ip;
    protected static $table = "`posts`";
    protected static $columns = array('post_id','name','tell','email','area','location','price','type','bedroom','bathroom','recaptionroom','time','details','price_type','city','user_ip') ;
}
$post = new Post();


?>