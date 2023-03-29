<?php
function type($param){
    if ($param == 1){
        echo "فرۆشتن";
    }elseif ($param == 2){
        echo "کرێ";
    }
}

function get_photo($id ){
    $all_photo = Photo::get_all("`post_id` = '$id' AND `profile` = 'y'");
    foreach($all_photo as $photo ){
    echo $photo->photo ;
    }
}
?>