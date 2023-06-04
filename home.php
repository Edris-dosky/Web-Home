<?php
include_once('includes/nav.php');
include_once('includes/search.php');
if($search == false){
$all_data = Post::get_all("");
}
include_once('includes/posts.php');
?>

