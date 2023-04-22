<?php
$error = ['result' => ''];
$tell = $pass = "";
if ($_SERVER["REQUEST_METHOD"]== "POST"){   
    $tell = $db->secure($_POST["tell"]);
    $pass =  $db->secure($_POST["password"]);
    if(!empty($tell)&&!empty($pass)){    
        $check = User::verify($tell ,$pass);
        if ($check){
            $session->loggin($check);
            header("location:Web-Home\home.php");
        }else{
            $error['result']= "ژمارە مۆبایلەکەت یان وشەی نهێنی هەڵەیە";
        }
    }else{
        $error['result']="تکایە هەردوو خانەکە پربکەوە";
    }

}

?>