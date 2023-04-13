<?php
include_once('includes/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Web-Home\admin\assets\css\output.css">
    <title>Web Home</title>
</head>
<body class="font-display bg-zinc-100 w-full">
<header class="bg-white w-full h-16 fixed z-10 drop-shadow-md">
    <nav class= "container h-full mx-auto flex justify-between items-center px-8 ">
        <div class="group font-black text-3xl text-[#188F8D] font-serif font tracking-wider"><span class="text-orange-500 text-4xl rot">W</span>ebHome</div>
        <ul class="flex flex-row-reverse text-lg font-medium justify-between w-[800px] h-full relative">
        <?php if(!$session->get_logged_in()){?>
            <li>
                <a href="home.php" class="flex absolute py-1 px-4 rounded-full top-4 border-[1px] border-solid border-zinc-300 hover:bg-[#188F8D] hover:text-white"> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>
                  </a> 
            </li>
            <?php }else{?>
            <li><a href="" class="">
                <img src="/Web-Home/assets/img/user.jpg" class="w-12 h-12 mt-2 p-[1px] block object-center rounded-full " >
                  </a> 
            </li>
            <?php } ?>
            <li> 
                <a href="home.php" class="flex absolute pb-5 hover:text-[#188F8D] hover:border-b-2 hover:border-[#188F8D] top-[18px]"> سەرەتا
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  </a> 
            </li>
            <li><a href="add_post.php" class="flex absolute pb-5 hover:text-[#188F8D] hover:border-b-2 hover:border-[#188F8D] top-[18px]">
                زیادکردن
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  
            </a>
                
            </li>
            <li><a href="" class="flex absolute pb-5 hover:text-[#188F8D] hover:border-b-2 hover:border-[#188F8D] top-[18px]">
                پەیوەندی کردن
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                  </svg>
                  
            </a>
            </li>
        </ul>
    </nav>
</header>
<div class="h-16"></div>
<body>
    
</body>