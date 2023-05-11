<?php
require_once('includes/nav.php');
function get_row($col){
  global $obj;
  $result = Post::get_all("'$obj->user_id' = `user_id` AND '$col' = `type`");
  echo count($result);
}

?>
<body class="font-display bg-zinc-100 w-full">
    <div class=" container mx-auto p-16">
        <div class="p-8 bg-white shadow mt-24">
          <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="grid grid-cols-3 text-center order-last md:order-first mt-20 md:mt-0">
              <div>
                <p class="font-bold text-gray-700 text-xl"><?php get_row("خانوو") ?></p>
                <p class="text-gray-400">خانوو بۆ فرۆشتن</p>
              </div>
              <div>
                   <p class="font-bold text-gray-700 text-xl"><?php get_row("شوقە") ?></p>
                <p class="text-gray-400">خانوو بۆکرێ</p>
              </div>
              <div>
                <p class="font-bold text-gray-700 text-xl"><?php get_row("ئەرز") ?></p>
             <p class="text-gray-400">ئەرز</p>
           </div>
            </div>
            <div class="relative">
              <div class="w-52 h-52 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 -top-4 -mt-24 flex items-center justify-center text-[#188F8D]">
              <?php if($obj->photo){ ?>
             <img class="w-full h-full rounded-full object-cover" src="./upload/<?php echo $obj->photo ?>"  alt="user photo"> 
		      	 <?php }else{ ?>
              <svg xmlns="http://www.w3.org/2000/sv" class="h-24 w-24" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                 </svg>
                 <?php } ?>
              </div>
            </div>
        
            <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center">
        <a href=""
          class="text-white py-3 px-4 uppercase rounded bg-[#188F8D] hover:bg-green-600 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5"
        >
          موڵکەکانی
        </a>
            <a href=""
          class="text-white pt-3 px-4 uppercase rounded bg-gray-700 hover:bg-gray-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5"
        >
          نامەناردن
        </a>
            </div>
          </div>
        
          <div class="mt-20 text-center border-b pb-12">
            <h1 class="text-4xl font-medium text-gray-700"><?php echo $obj->username; ?> <span class="font-light text-gray-500"></span></h1>
            <p class="font-light text-gray-600 mt-3">iraq - erbil</p>
        
            <p class="mt-8 text-gray-500"><?php echo $obj->tell; ?></p>
            <p class="mt-2 text-gray-500"><?php echo $obj->email; ?></p>
          </div>
        
          <div class="mt-12 flex flex-col justify-center">
            <p class="text-gray-600 text-center font-light lg:px-16">هەر هەژمارێک خۆی بەرپرسیارە لەوەی دایدەنێ، وە دەتوانێ هەرچەند بیەوێ خانوو و ئەرزی خۆی دابنێ و دانان بێ بەرامبەرە </p>
            <button class="text-indigo-500 py-2 px-4  font-medium mt-4">
              .... بینینی زیاتر
            </button>
            
          </div>
          <a href="?logout" class="text-white p-3 px-4 uppercase rounded bg-red-400 hover:bg-red-600 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">چونەدەرەوە</a>
        </div>
        </div>
       
</body>
</html>