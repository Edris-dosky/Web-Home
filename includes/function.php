<?php    
ob_start();
function get_photo($id , $pro){ // this function used to get img profile other images
    $photo = Photo::get_one("`post_id` = '$id' AND `profile` = '$pro'");
    if(!$photo){
        echo "house.jpg";
    }else{
        echo $photo->photo ;
    }
    }


    function in($i){    // this function used for virefy user to login any page
        global $session;
    
        if ($i === 0){
            if(!$session->get_logged_in()){
                go("index.php");
            }
        }
    
        if($i === 1){
            if($session->get_logged_in()){
                go("home.php");
            }
        }
    
    }
    function go($url){ 
        header("location:{$url}");
        }

?>