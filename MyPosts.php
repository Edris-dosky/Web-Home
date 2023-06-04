<?php
include_once('includes/nav.php');
in(0 ,"redirect.php" );
include_once('includes/search.php');
if($search == false){
$all_data = Post::get_all("WHERE `user_id` = '$obj->user_id'");
}
include_once('includes/posts.php');
?>
