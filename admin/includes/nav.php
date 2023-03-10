<?php
require_once('init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Get-School-Grades/admin/assets/css/output.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <title>A+</title>
</head>
<body class="font-display bg-zinc-200 h-screen w-full">
<?php if ($session->get_logged_in()){ ?>
  <?php
$data=user::get_by_id($_SESSION['id']);
?>
<nav class=" bg-blue-500 w-full h-14 ">
<div class="container mx-auto flex justify-between items-center h-full flex-row-reverse">
  <a href="" class=""><?php echo $data->username ?></a>
  <a href="" class="flex justify-around items-center w-36">
    <p class="text-center px-4 pb-1.5 pt-2 bg-orange-500 text-xl rounded-full shadow-2xl opacity-0 md:opacity-100"> بەخێربێی </p>
  </a>
<ul class="opacity-0 md:opacity-100 flex justify-around items-center w-2/3 flex-row-reverse ">
  <li>
    <a href="" class="link-nav">سەرەتا</a>
  </li>
  <li>
    <a href="" class="link-nav">موڵکەکان</a>
  </li>
  <li>
    <a href="" class="link-nav">داواکاری</a>
  </li>
  <li>
    <a href="" class="link-nav">زیادکردن</a>
  </li>
  <li>
    <a href="" class="link-nav">هاژمار</a>
  </li>
</ul>
<a href="?logout" class="bg-red-400 px-4 py-1.5 text-center rounded-xl active:translate-y-1 hover:bg-red-500">چونەدەر</a>

</div>
</nav>
<?php } ?>