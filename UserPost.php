<?php
include_once('includes/nav.php');
    if(!empty($_GET['ID'])){
    $user_id = $_GET['ID'];
    $_SESSION['ID'] = $user_id;
    }
include_once('includes/search.php');
    if($search == false){
        $all_data = Post::get_all("WHERE `user_id` = '$user_id' "); 
    }
include_once('includes/posts.php');
?>