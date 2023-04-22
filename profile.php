<?php
require_once('includes/nav.php');
if(isset($_GET['logout'])){
    $session->logout();
    header("location:Web-Home\home.php");
}
?>

<a href="?logout" class="btn btn-danger w-100">LOGOUT</a>
</body>
</html>