<?php
function type($param){
    if ($param == 1){
        echo "فرۆشتن";
    }elseif ($param == 2){
        echo "کرێ";
    }
}

function get_photo($id , $pro){
    $photo = Photo::get_one("`post_id` = '$id' AND `profile` = '$pro'");
    if(!$photo){
        echo "house.jpg";
    }else{
        echo $photo->photo ;
    }
    }
?>