<?php require_once('includes/nav.php'); in(1); ?>
<?php
$error = ['result' => ''];
if (isset($_POST['submit'])){
$username = $db->secure($_POST['username']);
$pass = $db->secure($_POST['pass']);
if (empty($username) || empty($pass)){
    $error['result'] = "تکایە خانەکان پربکەوە";
}else{
    $check = User::verify($username , $pass);
    if ($check){
        $session->loggin($check);
        go("home.php");
    }else{
        $error['result'] = "پاسۆرد یان ئیمەیل هەڵەیە";
    }
}
}
?>