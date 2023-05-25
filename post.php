<?php
include_once('includes/nav.php');

if($_GET['post_id']){
$post_id = $_GET['post_id'];
$PostData = Post::get_one("`post_id` = '$post_id' "); 
$photos = Upload::get_all("WHERE `post_id` = '$post_id'");
}else{
    go("home.php");
}

$log = false;

if($session->get_logged_in()){
$excute = FavPost::get_one("`user_id` = '$obj->user_id' AND `post_id` = '$post_id' "); 
$log = true ;
}

if(isset($_GET['save'])){
    $favPost->user_id = $obj->user_id ;
    $favPost->post_id = $post_id ;
    if(!$excute){
    $favPost->create();
    go("post.php?post_id=$post_id");
    }
}
if(isset($_GET['delete'])){
    $favPost->delete("`user_id` = '$obj->user_id' AND `post_id`  = '$post_id'");
    go("post.php?post_id=$post_id");
}
$i=0;
$prop = array('cadastral'=>'تاپۆکراو','balacony'=>'باڵەکۆن','tree'=>'سەوزای','ready'=>'راخراو',
                'electricity'=>'کارەبای بەردەوام','clothesroom'=>'ژوری جلگۆرین','Swimming'=>'مەلەوانگە','camera'=>'کامێرای چاودێری','security'=>'سکرێرتی',
                'garage'=>'گەراج','park'=>'پارک','gym'=>'هۆڵی لەشجوانت','market'=>'مارکێتی نزیک','angles'=>'روکن');

$key_prop = array_keys($prop);

?>
    <div id="gallery" class="relative container mx-auto" data-carousel="slide">
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <?php foreach($photos as $photo){  ?>
            <div id="<?php echo $i; ?>" class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/Web-Home/upload/<?php echo $photo->fileName ; ?>" class="absolute block max-w-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
          <?php  $i++; } ?>
        </div>
        <!-- Slider controls -->
        <button type="button" id="Previous" onclick="Previous()" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" id="next" onclick="next()" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <hr class="container mx-auto my-4 border-b-1 border-blueGray-300">
    <div class="container mx-auto flex flex-wrap-reverse divide-x-0 lg:divide-x">
        <div class="w-full lg:w-1/2">
            <div class="container mx-auto w-full ">
                <div class=" w-full h-auto   pb-5">
                <h2 class="text-2xl text-right mx-4 mb-6 ">: تایبەتماندیەکانی </h2>
                 <div class="flex flex-row-reverse flex-wrap items-center justify-center">

               <?php  foreach($key_prop as $pro){ if($PostData->$pro == 1){?>
                    <div class="flex  " > 
                        <div id="mark2"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                            <div class="flex justify-center items-center m-4">
                                <input type="checkbox"  id="input2"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                                <label  class="block ml-2 text-sm font-semibold text-black"><?php echo  $prop[$pro];?></label>
                            </div>
                                <img src="/Web-Home/assets/img/<?php echo  $pro.'.svg' ;?>" class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
                        </div>
                     </div>
                        <?php } }?>
                     </div>
                     </div>
                    </div>
        </div>
        <hr class="lg:hidden container mx-auto my-4 border-b-1 border-blueGray-300">
        <div class="text-right px-4 w-full lg:w-1/2 ">
            <h2 class="text-xl md:text-2xl mb-4">: زانیاریەکان</h2>
            <div class="flex flex-row-reverse flex-wrap text-right  ">
                <div class="lg:w-1/2 w-full  text-lg gap-2 my-2 "><span><?php echo $PostData->post_id ; ?> : ئایدی </span></div>
                <div class="lg:w-1/2 w-full  text-lg gap-2 my-2  "><span>ژمارە مۆبایل : </span><span><?php echo $PostData->tell ; ?></span></div>
                <div class=" lg:w-1/2 w-full  text-lg gap-2 my-2  "><span><?php echo $PostData->email ; ?> : ئیمایل </span></div>
                <div class="w-1/2  text-lg gap-2 my-2  "><span> جۆر <?php echo ": ".$PostData->type ; ?></span></div>

                <div class="w-1/2  text-lg gap-2 my-2  "><span> جۆری خستنەروو <?php echo ": ".$PostData->pre_type ; ?> </span></div>
                <div class="w-1/2  text-lg gap-2 my-2  "><span> <?php echo $PostData->price ; ?></span><span> : نرخ </span></div>
                <div class="w-1/2  text-lg gap-2 my-2  "><span> شار <?php echo ": ".$PostData->city ; ?></span></div>
                <div class="w-1/2  text-lg gap-2 my-2  "><span> شوێن  <?php echo ": ".$PostData->location ; ?></span></div>
                <?php if(!$PostData->type=="ئەرز"){ ?>
                <div class="w-1/2  text-lg gap-2 my-2  "><span> ژورەکان : </span><span><?php echo $PostData->rooms ; ?></span></div>
                <div class="w-1/2  text-lg gap-2 my-2  "><span> ژووری خەوتن : </span><span><?php echo $PostData->bedroom ; ?></span></div>
                <div class="w-1/2  text-lg gap-2 my-2  "><span> ژووری دانیشتن : </span><span><?php echo $PostData->recaptionroom ; ?></span></div>
                <div class="w-1/2  text-lg gap-2 my-2  "><span> توالێت : </span><span><?php echo $PostData->bathroom ; ?></span></div>
                <?php }?>
                <div class="w-1/2  text-lg gap-2 my-2  "><span> کاتی بڵاوکردنەوە : </span><span><?php echo $PostData->time ; ?></span></div>
            </div>
        </div>
        
        
    </div>
    <?php if($log===true){ ?>
    <div class="container mx-auto flex flex-wrap flex-row-reverse mt-8 ">
        <hr class="container mx-auto my-4 border-b-1 border-blueGray-300">
        <div class="w-2/3 lg:w-8/12 px-4">
        <a  href="" class="w-full p-2 rounded-md bg-[#188F8D] hover:bg-[#106564] text-white text-center  text-xl  ">کۆمێنتکردن </a>
        </div>
        <?php if(!$excute){ ?>
        <div class="w-1/3 lg:w-4/12 px-4">
        <a href="post.php?post_id=<?php echo $post_id ?>&save" class="w-full p-2 rounded-md bg-gray-700 hover:bg-gray-800 text-white text-center  text-xl  ">زاخیرەکردن</a>
        </div>
        <?php }else{ ?>
            <div class="w-1/3 lg:w-4/12 px-4">
            <a href="post.php?post_id=<?php echo $post_id ?>&delete" class="w-full p-2 rounded-md bg-red-700 hover:bg-red-800 text-white text-center  text-xl  ">لابردن لە لیستی دڵخواز</a>
            </div>
            <?php } ?>


    </div>
    <?php } ?>
</body>
</html>

<script>
        
        var i = 0
        var counter = "<?php echo count($photos); ?>"
        document.getElementById(i).classList.remove("hidden")
        document.getElementById(i).classList.add("block")

        function next(){
        document.getElementById(i).classList.remove("block")
        document.getElementById(i).classList.add("hidden")
         i++
         if(i >= counter){
            i = 0 ;
         }
        document.getElementById(i).classList.remove("hidden")
        document.getElementById(i).classList.add("block")

        }

        function Previous(){
        document.getElementById(i).classList.remove("block")
        document.getElementById(i).classList.add("hidden")
         i--
         if(i < 0){
            i = counter-1 ;
         }
        document.getElementById(i).classList.remove("hidden")
        document.getElementById(i).classList.add("block")
        }
</script>