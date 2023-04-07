<?php

function get_photo($id , $pro){ // this function used to get img profile other images
    $photo = Photo::get_one("`post_id` = '$id' AND `profile` = '$pro'");
    if(!$photo){
        echo "house.jpg";
    }else{
        echo $photo->photo ;
    }
    }
?>