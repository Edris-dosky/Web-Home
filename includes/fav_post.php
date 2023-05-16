<?php
class FavPost extends Api{
    public $fav_post_id ;
    public $user_id ;
    public $post_id ;
    
    protected static $table = "`fav_posts`";
    protected static $columns= array(
    'user_id','post_id','fav_post_id'
);
}
$favPost = new FavPost();


?>