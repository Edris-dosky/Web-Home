<?php

use Random\Engine\Secure;

include_once('includes/nav.php');
in(0 ,"redirect.php" );
?>


<?php
$err = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])||empty($_POST["tell"])||empty($_POST["price_type"])||empty($_POST["area"])||empty($_POST["price"])||empty($_POST["type"])||empty($_POST["location"])||empty($_POST["city"])||empty($_POST["recaption"])||empty($_POST["bathroom"])||empty($_POST["rooms"])||empty($_POST["bedroom"]))
    {
        $err=true;
    }else{
        $post->user_id = $obj->user_id ;
        $post->name = $db->secure($_POST["name"]);
        $post->tell = $db->secure($_POST["tell"]);
        $post->price_type = $db->secure($_POST["price_type"]);
        $post->price = $db->secure($_POST["price"]);
        $post->area = $db->secure($_POST["area"]);
        $post->type = $db->secure($_POST["type"]);
        $post->location = $db->secure($_POST["location"]);
        $post->city = $db->secure($_POST["city"]);
        $post->recaptionroom = $db->secure($_POST["recaption"]);
        $post->bathroom = $db->secure($_POST["bathroom"]);
        $post->bedroom = $db->secure($_POST["bedroom"]);
        $post->rooms = $db->secure($_POST["rooms"]);
        $post->email = $db->secure($_POST["email"]);
        $post->details = $db->secure($_POST["details"]);
        $post->cadastral = $db->secure($_POST["cadastral"]);
        $post->time = date("Y-m-d");
        if ($post->create()===true){
            go("home.php");
        }else{
            echo "سەرکەوتوو نەبوو";
        }
    }
}

?>

<section class=" py-1 bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
    <div class="rounded-t bg-white mb-0 px-6 py-6">
      <div class="text-center flex flex-row-reverse justify-between">
        <h6 class="text-blueGray-700 text-xl font-bold">
          زیادکرنی موڵکەکەت
        </h6>
        <a href="home.php" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
        </a>
      </div>
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
      <form action="<?php echo $db->secure($_SERVER['PHP_SELF']);?>" method="POST">
        <h6 class="text-right text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
          زانیاریەکانی خاوەن موڵک
        </h6>
        <div class="flex flex-row-reverse flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                ناو
              </label>
              <input type="text" name="name" class="text-right border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="<?php echo htmlspecialchars($_POST['name'] ?? $obj->username); ?>" >
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class=" text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                ژمارە مۆبایل
              </label>
              <input type="tel" name="tell" class="text-right border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  value="<?php echo htmlspecialchars($_POST['tell'] ?? $obj->tell); ?>">
            </div>
          </div>
          <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
              <label class="text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                ئیمایلی خاوەن موڵک
              </label>
              <input type="email" name="email" class="text-right border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  value="<?php echo htmlspecialchars($_POST['email'] ?? $obj->email); ?>">
            </div>
          </div>
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">
        <div class="flex flex-row-reverse justify-between lg:flex-col lg:items-end ">
            <h6 class="text-right text-blueGray-400 text-sm mt-4 mb-6 font-bold uppercase">
            :زانیاریەکانی موڵکەکە
            </h6>
            <div class="flex items-center ml-4 lg:m-4"><input type="checkbox"  name="cadastral"  value="تاپۆکراوە" class="w-4 h-4 text-black bg-gray-300 border-none rounded-md focus:ring-transparent"><label  class="block ml-2 text-sm text-gray-900">ئایە موڵکەکە تاپۆکراوە ؟</label></div>
         </div>
        <div class="flex flex-row-reverse flex-wrap">
          <div class="w-6/12 lg:w-3/12 px-4">
            <div class="relative w-full mb-3">
              <label class="text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                موڵک
              </label>
              <select name="type" required id="" value="<?php echo htmlspecialchars($_POST['type'] ?? ""); ?>" class="pr-8 text-right border-0 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  ">
                <option value="" disabled selected>:جۆری موڵکەکەت</option>
                <option value="کرێ">خانوو بۆ کرێ</option>
                <option value="فرۆشتن">خانوو بۆ فرۆشتن</option>
                <option value="ئەرز">ئەرز</option>
            </select>
            </div>
          </div>
          <div class="w-6/12 lg:w-3/12 px-4">
            <div class="relative w-full mb-3">
              <label class=" text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                روبەر
              </label>
              <input type="number" name="area" placeholder="مەتر" value="<?php echo htmlspecialchars($_POST['area'] ?? ""); ?>" class="text-right border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
            </div>
          </div>
          <div class="w-6/12 lg:w-3/12 px-4">
            <div class="relative w-full mb-3">
              <label class=" text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                نرخ
              </label>
              <input type="number" name="price" required placeholder="دۆلار یان دینار" value="<?php echo htmlspecialchars($_POST['price'] ?? ""); ?>"  class="text-right border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="United States">
            </div>
          </div>
          <div class="w-6/12 lg:w-3/12 px-4">
            <div class="relative w-full mb-3">
              <label class="text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                جۆری پارە
              </label>
              <select name="price_type" required  value="<?php echo htmlspecialchars($_POST['price_type'] ?? ""); ?>" class="pr-8  text-right border-0  py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                <option value="" disabled selected>:دۆلار/دینار</option>
                <option value="IQD">دینار</option>
                <option value="$">دۆلار</option>
             </select>
             
            </div>
          </div>
          <div class="w-6/12 lg:w-3/12 px-4">
            <div class="relative w-full mb-3">
              <label class="text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                شار
              </label>
              <select name="city" required value="<?php echo htmlspecialchars($_POST['city'] ?? ""); ?>" class="pr-8 text-right border-0 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"">
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
            </div>
          </div>
          <div class="w-6/12 lg:w-3/12 px-4">
            <div class="relative w-full mb-3">
              <label class=" text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                شوێن
              </label>
              <input type="text" name="location" placeholder="گەرەک/ناحیە" value="<?php echo htmlspecialchars($_POST['location'] ?? ""); ?>" class="text-right border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
            </div>
          </div>
          <div class="w-6/12 lg:w-3/12 px-4 flex flex-row-reverse gap-3 ">
            <div class="relative w-full mb-3">
              <label class=" text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                ژمارەی زورەکان
              </label>
              <input type="number" name="rooms" value="<?php echo htmlspecialchars($_POST['rooms'] ?? ""); ?>" class="text-right border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="United States">
            </div>
            <div class="relative w-full mb-3">
                <label class=" text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                  ژوری دانیشتن
                </label>
                <input type="number" name="recaption" value="<?php echo htmlspecialchars($_POST['recaption'] ?? ""); ?>" class="text-right border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="United States">
              </div>
          </div>
          <div class="w-6/12 lg:w-3/12 px-4 flex flex-row-reverse gap-3 ">
            <div class="relative w-full mb-3">
              <label class="text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                ژوری خەوتن
              </label>
              <input type="number" name="bedroom" value="<?php echo htmlspecialchars($_POST['bedroom'] ?? ""); ?>" class=" text-right border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Postal Code">
            </div>
            <div class="relative w-full mb-3">
                <label class="text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                  حەمام
                </label>
                <input type="number" name="bathroom" value="<?php echo htmlspecialchars($_POST['bathroom'] ?? ""); ?>" class=" text-right border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
              </div>
          </div>
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">

        <h6 class="text-right text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
          زانیاری زیاتر
        </h6>
        <div class="flex flex-wrap ">
          <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
              <label class="text-right block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                زیاتر لەسەر موڵکەکە
              </label>
              <textarea type="text" name="details" value="<?php echo htmlspecialchars($_POST['details'] ?? ""); ?>" placeholder="زانیاری زیاتر لەسەو موڵکەکە بنووسە، ئەو زانیاریانەی بە پێویستی دەزانی کریار بیزانێ" class=" text-right border-0 px-3 py-3 placeholder-black-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4"> </textarea>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap flex-row-reverse ">
            <div class="w-1/2 lg:w-8/12 px-4">
            <button  type="submit" class="w-full p-2 rounded-md bg-[#188F8D] hover:bg-[#106564] text-white text-center  text-xl ">ناردن</button>
            </div>
            <div class="w-1/2 lg:w-4/12 px-4">
            <button type="reset" class="w-full p-2 rounded-md bg-gray-700 hover:bg-gray-800 text-white text-center  text-xl ">سرینەوە</button>
            </div>
        </div>
      </form>
      <?php if($err){ echo '<h1 class="text-center text-red-500 text-2xl m-4"><script>window.alert("تکایە هەموو خانەکان پربکەوە")</script></h1>';}?>
    </div>
  </div>
</div>
</section>