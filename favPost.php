<?php
include_once('includes/nav.php');
in(0 ,"login.php" );
include_once('includes/search.php');
if($search == false){
$all_data = Post::get_all("INNER JOIN fav_posts ON posts.post_id = fav_posts.post_id WHERE fav_posts.user_id = '$obj->user_id' ");
}
include_once('includes/posts.php');
?>

