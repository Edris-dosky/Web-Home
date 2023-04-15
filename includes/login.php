<?php
$error = ['result' => ''];
if ($_SERVER["REQUEST_METHOD"]== "POST"){   
    if(!empty($_POST["tell"])&&!empty($_POST["password"])){    
        $check = User::verify($_POST["tell"] , $_POST["password"]);
        if ($check){
            $session->loggin($check);
            go("home.php");
        }else{
            $error['result']= "ژمارە مۆبایلەکەت یان وشەی نهێنی هەڵەیە";
        }
    }else{
        $error['result']="تکایە هەردوو خانەکە پربکەوە";
    }

}

?>