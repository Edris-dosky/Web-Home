<?php
class Photo extends Api{
    public $post_id ;
    public $photo_id ;
    public $photo;
    public $profile;
    protected static $table = "`posts`";
    protected static $columns = array('post_id','photo_id','photo','profile');
}



?>