<?php
class Post extends Api{
    public $user_id ;
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
    public $cadastral;
    public $verify ;
    protected static $table = "`posts`";
    protected static $columns= array('user_id','post_id','name','tell','email','area','location','price','type','bedroom','bathroom','recaptionroom','time','details','price_type','city','cadastral','verify');
}
$post = new Post();


?>