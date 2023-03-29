<?php
class Post extends Api{
    public $post_id ;
    public $name ;
    public $tell ;
    public $email ;
    public $area ;
    public $location ;
    public $price ;
    public $type ;
    public $bedroom ;
    public $bathroom ;
    public $recaptionroom ;
    public $time ;
    public $details;
    protected static $table = "`posts`";
    protected static $columns = array('id','name','tell','email','area','location','price','type','bedroom','bathroom','recaptionroom','time','details') ;
}



?>