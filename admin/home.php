<?php require_once('includes/nav.php'); in(0);?>


<?php
$user_in = $_SESSION['id'];
$all_data=user::get_by_id($user_in);
?>
<div class=" container mx-auto bg-blue-400 h-30 flex items-center justify-evenly h-40" >
<div class="border border-black">
    <p> welcome : <?php echo $all_data->username ; ?></p>

</div>
<div class="">
    
</div>
</div>


<?php require_once('includes/footer.php'); ?>
