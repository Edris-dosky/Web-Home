<?php

use Random\Engine\Secure;

include_once('includes/nav.php');
?>


<?php
$err = false;
if(!$session->get_logged_in()){
    go("login.php");
}elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])||empty($_POST["tell"])||empty($_POST["price_type"])||empty($_POST["area"])||empty($_POST["price"])||empty($_POST["type"])||empty($_POST["location"])||empty($_POST["city"])||empty($_POST["recaption"])||empty($_POST["bathroom"])||empty($_POST["rooms"])||empty($_POST["bedroom"]))
    {
        $err=true;
        $photo = array();
    }else{
    
        $post->name = $db->secure($_POST["name"]);
        $post->tell = $db->secure($_POST["tell"]);
        $post->price_type = $db->secure($_POST["price_type"]);
        $post->price = $db->secure($_POST["price"]);
        $post->area = $db->secure($_POST["area"]);
        $post->type = $db->secure($_POST["type"]);
        $post->location = $db->secure($_POST["location"]);
        $post->city = $db->secure($_POST["city"]);
        $photo = $db->secure($_POST["photo"]);
        $post->recaptionroom = $db->secure($_POST["recaption"]);
        $post->bathroom = $db->secure($_POST["bathroom"]);
        $post->bedroom = $db->secure($_POST["bedroom"]);
        $post->rooms = $db->secure($_POST["rooms"]);
        $post->email = $db->secure($_POST["email"]);
        $post->details = $db->secure($_POST["details"]);
        $post->user_ip = $db->secure($_SERVER['HTTP_USER_AGENT']);
        if ($post->create()===true){
            go('home.php');
        }else{
            echo $post->create();
        }
    }

}


?>



    <section class=" bg-no-repeat bg-fixed bg-center h-full w-full">
        <div class="container mx-auto h-screen p-6 ">
            <header  class=" bg-gradient-to-r from-green-500 to-[#188F8D] w-full h-16 text-white relative rounded-md">
             <a href="home.php" class="absolute top-4 left-4 ">  
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-orange-500 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
              </a>
             <span class="text-xl font-bold  text-center w-full absolute top-3">زیادکردنی خانوەکەت</span>
            </header>
            <form action="<?php echo $db->secure($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data" class="w-full h-auto text-center grid grid-cols-6 auto-rows-min gap-3 pt-3 ">
                <input type="tel" name="tell" required placeholder="ژمارەی مۆبایل : ## ## ### ##07" value="<?php  echo $session->get_logged_in() ?$obj->tell :""; ?>" class="input lg:col-span-3   ">
                <input type="text" name="name" required placeholder="ناوی سیانی" value="<?php  echo $session->get_logged_in() ?$obj->username :""; ?>" class="input lg:col-start-4 lg:col-end-7  sm:row-start-1 sm:row-end-1 ">
                <select name="price_type" required  value="<?php echo htmlspecialchars($_POST['price_type'] ?? ""); ?>" class="input lg:col-span-1 sm:col-span-3 ">
                    <option value="" disabled selected>جۆری پارە</option>
                    <option value="IQD">دینار</option>
                    <option value="$">دۆلار</option>
                </select>
                <input type="text" name="price" required placeholder="نرخ" class="input lg:col-span-1 sm:col-span-3 ">
                
                <input type="number" name="area" required placeholder="روبەری خانوەکە" class="input lg:col-span-2 mr-2 sm:col-span-3 ">
                <select name="type" required id="" class="input lg:col-span-2 sm:col-span-3 ">
                    <option value="" disabled selected>جۆری خانوەکەت</option>
                    <option value="کرێ">کرێ</option>
                    <option value="فرۆشتن">فرۆشتن</option>
                </select>
                <input type="" name="location" required placeholder="گەرەک/ناحیە" class="input lg:col-span-2 sm:col-span-3 ">
                <select name="city" required class="input lg:col-span-2 sm:col-span-3">
                    <option value="" disabled selected>شار</option>
                    <option value="هەولێر">هەولێر</option>
                    <option value="سلێمانی">سلێمانی</option>
                    <option value="دهۆک">دهۆک</option>
                    <option value="هەڵەبجە">هەڵەبجە</option>
                    <option value="سۆران">سۆران</option>
                    <option value="زاخۆ">زاخۆ</option>
                    <option value="رانیە">رانیە</option>
                    <option value="کەرکوک">کەرکوک</option>
                    <option value="دەربەندیخان">دەربەندیخان</option>
                    <option value="شەقڵاوە">شەقڵاوە</option>
                </select>
                <input type="file" name="photo"class="input lg:col-span-2 w-full h-full p-3">
                <input type="number" name="recaption" required placeholder="ژووری دانیشتن" class="input lg:col-span-1 sm:col-span-3 ">
                <input type="number" name="bathroom" required placeholder="حەمام" class="input lg:col-span-1 sm:col-span-3 ">
                <input type="number" name="bedroom" required placeholder="ژوری خەوتن" class="input lg:col-span-1 sm:col-span-3 ">
                <input type="number" name="rooms" required placeholder="ژمارەی ژورەکان" class="input lg:col-span-1 sm:col-span-3 ">
                <input type="email" name="email" value="<?php  echo $session->get_logged_in() ?$obj->email :""; ?>" required placeholder="ئیمایل ئەگەر هەبێ" class="input lg:col-span-2 ">
                <textarea name="details" id="" placeholder="...... زانیاری زیاتر" cols="30" rows="10" class="input lg:col-span-6 h-52 p-3"></textarea>
                <button type="reset" class="lg:col-span-3 input bg-orange-500 text-white text-center font-bold text-2xl sm:col-span-6">رەشکرندنەوە</button>
                
                <button type="submit" class="lg:col-span-3 input bg-[#188F8D] text-white text-center font-bold text-2xl sm:col-span-6">ناردن</button>
                <div class="mt-1 flex justify-center px-2 pt-2 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a file</span>
                      <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                    <p class="pl-1 text-black">وێنەیەکی خانوەکە دابنێ</p>
                  </div>

                </div>
              </div>
            </form>
            <?php if($err){ echo '<h1 class="text-center text-red-500 text-2xl m-4"><script>window.alert("تکایە هەموو خانەکان پربکەوە")</script></h1>';}?>
        </div>
    </section>
</body>
</html>