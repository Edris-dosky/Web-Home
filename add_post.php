<?php

use Random\Engine\Secure;

include_once('includes/nav.php');
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $db->secure($_REQUEST["name"]);
$tell = $db->secure($_REQUEST["tell"]);
$price_type = $db->secure($_REQUEST["price_type"]);
$price = $db->secure($_REQUEST["price"]);
$area = $db->secure($_REQUEST["area"]);
$type = $db->secure($_REQUEST["type"]);
$location = $db->secure($_REQUEST["location"]);
$city = $db->secure($_REQUEST["city"]);
$photo = $db->secure($_REQUEST["photo"]);
$recaption = $db->secure($_REQUEST["recaption"]);
$bathroom = $db->secure($_REQUEST["bathroom"]);
$bedroom = $db->secure($_REQUEST["bedroom"]);
$rooms = $db->secure($_REQUEST["rooms"]);
$email = $db->secure($_REQUEST["email"]);
$user_ip = $db->secure($_SERVER['HTTP_USER_AGENT']);
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
            <form action="<?php echo $db->secure($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data" class="w-full h-full text-center grid grid-cols-6 auto-rows-min gap-3 pt-3 ">
                <input type="tel" name="tell" placeholder="ژمارەی مۆبایل : ## ## ### ##07" class="input lg:col-span-3   ">
                <input type="text" name="name" placeholder="ناوی سیانی" class="input lg:col-start-4 lg:col-end-7  sm:row-start-1 sm:row-end-1 ">
                <select name="price_type" id="" class="input lg:col-span-1 sm:col-span-3 ">
                    <option value="" disabled selected>جۆری پارە</option>
                    <option value="2">دینار</option>
                    <option value="1">دۆلار</option>
                </select>
                <input type="text" name="price" placeholder="نرخ" class="input lg:col-span-1 sm:col-span-3 ">
                
                <input type="number" name="area" placeholder="روبەری خانوەکە" class="input lg:col-span-2 mr-2 sm:col-span-3 ">
                <select name="type" id="" class="input lg:col-span-2 sm:col-span-3 ">
                    <option value="" disabled selected>جۆری خانوەکەت</option>
                    <option value="2">کرێ</option>
                    <option value="1">فرۆشتن</option>
                </select>
                <input type="" name="location" placeholder="گەرەک/ناحیە" class="input lg:col-span-2 sm:col-span-3 ">
                <select name="city" id="" class="input lg:col-span-2 sm:col-span-3">
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
                <input type="number" name="recaption" placeholder="ژووری دانیشتن" class="input lg:col-span-1 sm:col-span-3 ">
                <input type="number" name="bathroom" placeholder="حەمام" class="input lg:col-span-1 sm:col-span-3 ">
                <input type="number" name="bedroom" placeholder="ژوری خەوتن" class="input lg:col-span-1 sm:col-span-3 ">
                <input type="number" name="rooms" placeholder="ژمارەی ژورەکان" class="input lg:col-span-1 sm:col-span-3 ">
                <input type="email" name="email" placeholder="ئیمایل ئەگەر هەبێ" class="input lg:col-span-2 ">
                <textarea name="details" id="" placeholder="...... زانیاری زیاتر" cols="30" rows="10" class="input lg:col-span-6 h-52 p-3"></textarea>
                <button type="reset" class="lg:col-span-3 input bg-orange-500 text-white text-center font-bold text-2xl sm:col-span-6">رەشکرندنەوە</button>
                <button type="submit" class="lg:col-span-3 input bg-[#188F8D] text-white text-center font-bold text-2xl sm:col-span-6">ناردن</button>
                
            </form>
           
        </div>
    </section>
</body>
</html>