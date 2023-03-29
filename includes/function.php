<?php
function type($param){
    if ($param == 1){
        echo "فرۆشتن";
    }elseif ($param == 2){
        echo "کرێ";
    }
}

function profile(){
    $all_photo = Api::get_all("photo");
    foreach($all_photo as $photo ){
    echo $photo->photo ;
    }
}
?>