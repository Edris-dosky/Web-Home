<?php
require_once('includes/nav.php');



if(!empty($db->secure($_GET['ID']))){
  $userid = $db->secure($_GET['ID']) ;
  if (!empty($obj->user_id)&&$userid == $obj->user_id){
    $owner = true ;
  }else{
    $owner =false;
  }
  $UserData = User::get_one("`user_id` = '$userid' "); 
}else{
  go("home.php");
}
function get_row($col){ //this function created to print numbrt of one type row
  global $userid ;
  $result = Post::get_all("WHERE `user_id` = '$userid' AND `type` = '$col'");
  echo count($result);
}
?>
<body class="font-display bg-zinc-100 w-full">
    <div class=" container mx-auto p-12">
        <div class="p-4 bg-white shadow mt-24">
          <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="grid grid-cols-5 text-center order-last md:order-first mt-20 md:mt-0">
              <div>
                <p class="font-bold text-gray-700 text-xl"><?php get_row("خانوو") ?></p>
                <p class="text-gray-400">خانوو</p>
              </div>
              <div>
                   <p class="font-bold text-gray-700 text-xl"><?php get_row("شوقە") ?></p>
                <p class="text-gray-400">شوقە </p>
              </div>
              <div>
                <p class="font-bold text-gray-700 text-xl"><?php get_row("ڤێلا") ?></p>
             <p class="text-gray-400">ڤێلا</p>
           </div>
           <div>
                <p class="font-bold text-gray-700 text-xl"><?php get_row("مەزرەعە") ?></p>
             <p class="text-gray-400">مەزرەعە</p>
           </div>
           <div>
                <p class="font-bold text-gray-700 text-xl"><?php get_row("ئەرز") ?></p>
             <p class="text-gray-400">ئەرز</p>
           </div>
            </div>
            <div class="relative">
              <div class="w-52 h-52 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 -top-4 -mt-24 flex items-center justify-center text-[#188F8D]">
             <img class="w-full h-full rounded-full object-cover" src="./upload/<?php echo $UserData->photo ?>"  alt="user photo"> 
              </div>
            </div>
        
            <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center">
        <a href="UserPost.php?ID=<?php echo $UserData->user_id ?>"
          class="text-white py-3 px-4 md:text-base text-xs rounded bg-[#188F8D] hover:bg-green-600 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
          <img src="assets/img/save.svg" class="md:w-6 md:h-6 w-4 h-4 inline-block" >
        موڵکەکان
        </a>
        <?php if($owner == false){ ?>
            <a href=""
          class="text-white pt-3 px-4 uppercase rounded md:text-base text-xs bg-gray-700 hover:bg-gray-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5" >
          نامەناردن
        </a>
        <?php }else{ ?>
          <a href="UpdateProfile.php"
          class="text-white pt-3 px-4 uppercase rounded md:text-base text-xs bg-gray-700 hover:bg-gray-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5" >
          <img src="assets/img/edit.svg" class="md:w-6 md:h-6 w-4 h-4 inline-block">
          دەسکاریکردن
        </a>
        <?php } ?>
            </div>
          </div>
        
          <div class="mt-20 text-center border-b pb-12">
            <h1 class="text-3xl font-medium text-gray-700"><?php echo $UserData->username; ?> </h1>
            <p class="font-light text-gray-600 mt-3">iraq - erbil</p>
        
            <p class="mt-8 text-gray-500"><?php echo $UserData->tell; ?></p>
            <p class="mt-2 text-gray-500"><?php echo $UserData->email; ?></p>
          </div>
        
          <div class="mt-12 flex flex-col justify-center">
            <p class="text-gray-600 text-center font-light mb-6 lg:px-16">هەر هەژمارێک خۆی بەرپرسیارە لەوەی دایدەنێ، وە دەتوانێ هەرچەند بیەوێ خانوو و ئەرزی خۆی دابنێ و دانان بێ بەرامبەرە </p>
          </div>
          <?php if($owner == true){ ?>
              <a href="?logout" class="invisible md:visible text-white ml-6 p-3 px-4 uppercase rounded bg-red-400 hover:bg-red-600 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5"> 
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block w-6 h-6 text-white ">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
              </svg>  
              چونەدەرەوە</a>
              <?php } ?>
            </div>
          </div>
       
</body>
</html>