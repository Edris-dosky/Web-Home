<?php 
function go($url){
header("location:{$url}");
}

function in($i){
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

if(isset($_GET['logout'])){
    $session->logout();
    go("index.php");
}
?>