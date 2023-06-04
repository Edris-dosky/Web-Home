<?php
include_once('includes/nav.php');
    if(!empty($db->secure($_GET['ID']))){
    $user_id = $db->secure($_GET['ID']);
    if($user_id == "login"){
        go("login.php");
    }else{
    $_SESSION['ID'] = $user_id;
    }}
include_once('includes/search.php');
    if($search == false){
        $all_data = Post::get_all("WHERE `user_id` = '$user_id' "); 
    }
include_once('includes/posts.php');
?>