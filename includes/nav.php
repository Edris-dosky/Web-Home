<?php
include_once('includes/init.php');
$page = $_SERVER['PHP_SELF'];
if($session->get_logged_in()){  // create object when user sing in to get all data of who sing in
$tell = $_SESSION['tell'];
$obj= User::get_one("`tell`='$tell'");
}
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
	<nav class="relative px-4 py-4 flex justify-between items-center drop-shadow-md bg-white">	
		<div class="text-3xl font-bold leading-none " >
            <a href="home.php" class="group cursor-pointer inline font-black text-2xl text-[#188F8D] font-serif font tracking-wider"><span class="text-orange-500 text-4xl rot">W</span>ebHome</a>
			<?php if($page == "/Web-Home/home.php"||$page=="/Web-Home/favPost.php"||$page=="/Web-Home/UserPost.php"){ ?>
			<svg aria-hidden="true" onclick="search()" id="svg_search" class="cursor-pointer inline mr-4 w-6 h-6 text-orange-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
			<input type="checkbox" class="hidden" id="check_search">
			<?php } ?>
		</div>
			
		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-blue-600 p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex-row-reverse lg:items-center lg:w-auto lg:space-x-6">
			<li><a class="text-lg text-gray-500 ml-5 hover:text-[#188F8D] hover:font-bold" href="home.php">سەرەتا</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-lg text-gray-500 hover:text-[#188F8D] hover:font-bold " href="form.php"> زیادکردن</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-lg text-gray-500 hover:text-[#188F8D] hover:font-bold " href="favPost.php">دڵخوازەکانم</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-lg text-gray-500 hover:text-[#188F8D] hover:font-bold " href="UserPost.php?ID=<?php echo !empty($obj->user_id) ? $obj->user_id : "login" ?>">موڵکەکانم</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-lg text-gray-500 hover:text-[#188F8D] hover:font-bold " href="UserProfile.php?ID=1">دەربارەی ئێمە</a></li>
		</ul>
		<?php if(!$session->get_logged_in()){?>
		<a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-100 hover:bg-gray-200 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="login.php">چونەژوەوە</a>
		<a class="hidden lg:inline-block py-2 px-6 bg-[#188F8D] hover:bg-green-600 text-sm text-white font-bold rounded-xl transition duration-200" href="singup.php">دروستکردنی هەژمار</a>
		<?php }else{ ?>
        <a href="UserProfile.php?ID=<?php echo $obj->user_id ; ?>" class=" hidden lg:flex mr-3 text-sm bg-indigo-100 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" >
             <img class="w-10 h-10 rounded-full" src="/Web-Home/upload/<?php echo $obj->photo ?>"  alt="user photo">  
          </a>
		  <?php }?>
	</nav>
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 right-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center justify-between mb-8">
			<?php if(!$session->get_logged_in()){?>
				<a class="text-3xl font-bold leading-none" href="#">
           			 <div class="group font-black text-2xl text-[#188F8D] font-serif font tracking-wider"><span class="text-orange-500 text-4xl rot">W</span>ebHome</div>
				</a>
				<?php }else{ ?>
				<a href="UserProfile.php?ID=<?php echo $obj->user_id ; ?>" class=" flex mr-3 pl-2 pr-4 py-[3px] text-sm bg-indigo-100 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" >
                    <img class="w-10 h-10 rounded-full" src="/Web-Home/upload/<?php echo $obj->photo ?>" alt="user photo"> <span class="text-center mt-2 mx-4"><?php echo $obj->username ; ?></span> 				
                  </a>
				  <?php } ?>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-right text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="text-right block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-[#188F8D] rounded" href="home.php">سەرەتا</a>
					</li>
					<li class="mb-1">
						<a class="text-right block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-[#188F8D] rounded" href="form.php">زیادکردن</a>
					</li>
					<li class="mb-1">
						<a class="text-right block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-[#188F8D] rounded" href="favPost.php">دڵخوازەکانم</a>
					</li>
					<li class="mb-1">
						<a class="text-right block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-[#188F8D] rounded" href="UserPost.php?ID=<?php echo !empty($obj->user_id) ? $obj->user_id : "login" ?>">موڵکەکانم</a>
					</li>
					<li class="mb-1">
						<a class="text-right block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-[#188F8D] rounded" href="#">دەربارەی ئێمە</a>
					</li>
				</ul>
			</div>
			<div class="mt-auto">
			<?php if(!$session->get_logged_in()){?>
				<div class="pt-6">
					<a class="block px-4 py-3 mb-3  text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="login.php">چونەژوەوە</a>
					<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="singup.php">دروستکردنی هەژمار</a>
				</div>
				<?php }else{ ?> 
					<a href="?logout" class="block px-4 py-3 mb-3 text-white text-s text-center font-semibold leading-none bg-red-500 hover:bg-red-600 rounded-xl">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block w-6 h-6 text-white ">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
					</svg>
					چونەدەرەوە</a>
					<?php } ?>
				<p class="my-4 text-xs text-center text-gray-400">
					<span>Copyright © <?php echo date('Y'); ?></span>
				</p>
			</div>
		</nav>
	</div>
</body>

<script>
// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});
</script>
  
