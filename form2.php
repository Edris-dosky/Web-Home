<?php
include_once('includes/nav.php');
in(0 ,"redirect.php" );
?>

<?php 
$DataName = array('cadastral','balacony','tree','ready','electricity','clothesroom','Swimming','camera','security',
'garage','park','gym','market','angles'); // this array used get property name and input name becouse both have a same name
$img_pro = $imgs = array();

$PostData = Post::get_one("`user_id` = '$obj->user_id' ORDER BY `post_id` DESC"); // SELECT last record becouse this user posting currently
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    foreach($DataName as $name ){
        if(!empty($_POST["$name"])){
            $PostData->$name = 1 ;
        }
    }

    $upload->post_id = $PostData->post_id ;
    if(!empty($_FILES['imgs'])){
        $upload->profile = 'n';
        function reArrayFiles(&$file_post ,$file_count,$isMulti ){
            $file_keys    = array_keys($file_post);
            $file_ary    = [];    
            for($i=0; $i<$file_count; $i++)
                foreach($file_keys as $key)
                    if($isMulti)
                        $file_ary[$i][$key] = $file_post[$key][$i];
                    else
                        $file_ary[$i][$key]    = $file_post[$key];
        
            return $file_ary;
        }

        $isMulti    = is_array($_FILES['imgs']['name']);
        $file_count    = $isMulti?count($_FILES['imgs']['name']):1;
        $file_ary = reArrayFiles($_FILES['imgs'],$file_count,$isMulti);
        for($i=0; $i<$file_count; $i++){
            $upload->set_image($file_ary["$i"]);

            if($upload->save() === true){
            echo "yeeeeeeeeeeees";
                }else{
                    echo "wwwwwwwwwwww".$upload->save();
                }
        }
    }
}
?>
    <form action="<?php echo $db->secure($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data" class="h-screen container mx-auto font-sans text-gray-900 border-box relative">
        <div class="container mx-auto flex flex-wrap justify-center flex-row-reverse">
        <div class="flex justify-center w-full  sm:max-w-lg">
    
            <div class="flex flex-col items-center justify-center w-full h-auto mt-8 bg-white sm:w-3/4 sm:rounded-lg sm:shadow-xl">
                <div class="mt-10 mb-10 text-center">
                    <h2 class="text-2xl  mb-2">وێنەی پرۆفایلی  موڵکەکە</h2>
                    <p class="text-xs text-gray-600">تکایە با وێنەکە دیوی دەرەوەی مولکەکە بێت</p>
                </div>
                <div  class="relative w-4/5 h-32 max-w-xs mb-10 bg-blueGray-200  rounded-lg shadow-inner">
                    <input type="file" id="file-upload2" name="proimg" class="hidden">
                    <label for="file-upload2" class="z-20 flex flex-col-reverse items-center justify-center w-full h-full cursor-pointer">
                        <p class="z-10 text-xs font-light text-center text-black">وێنەکە لێرە دابنێ</p>
                        <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                    </label>
                </div>
            </div>
        </div>
        <div class="flex  justify-center w-full  sm:max-w-lg">
            <div class="flex flex-col items-center justify-center w-full h-auto mt-8 bg-white sm:w-3/4 sm:rounded-lg sm:shadow-xl">
                <div class="mt-10 mb-10 text-center">
                    <h2 class="text-2xl mb-2">چەند وێنەیەکی تری موڵکەکە</h2>
                    <p class="text-xs text-gray-600">تکایە تا بکرێ با وێنەکان بە باری پانی گیرابن</p>
                </div>
                <div  class="relative w-4/5 h-32 max-w-xs mb-10 bg-blueGray-200  rounded-lg shadow-inner">
                    <input type="file" id="file-upload1" name="imgs[]" multiple class="hidden">
                    <label for="file-upload1" class="z-20 flex flex-col-reverse items-center justify-center w-full h-full cursor-pointer">
                        <p class="z-10 text-xs font-light text-center text-black">وێنەکان لێرە دابنێ</p>
                        <svg class="mx-auto h-12 w-12 text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                        </svg>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto w-full sm:w-[895px] ">
        <div class=" w-full h-auto mt-8 pt-2 pb-5 bg-white sm:rounded-lg sm:shadow-xl">
        <h2 class="text-2xl text-right m-4 mb-8">: تایبەتماندیەکانی خانوەکە</h2>
         <div class="flex flex-row-reverse flex-wrap items-center justify-center">

            <div class="flex cursor-pointer " onclick="on('input2','mark2')" > 
                <div id="mark2"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                    <div class="flex justify-center items-center m-4">
                        <input type="checkbox"  id="input2" name="cadastral"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                        <label  class="block ml-2 text-sm font-semibold text-black">تاپۆکراو</label>
                    </div>
                        <img src="/Web-Home/assets/img/cadastral.svg" class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
                </div>
             </div>
         <div class="flex cursor-pointer " onclick="on('input1','mark1')" > 
            <div id="mark1"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center m-4">
                    <input type="checkbox"  id="input1" name="balacony"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">باڵەکۆن</label>
                </div>
                    <img src="/Web-Home/assets/img/balcony.svg" class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>
        
         <div class="flex cursor-pointer " onclick="on('input3','mark3')" > 
            <div id="mark3"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center m-4">
                    <input type="checkbox"  id="input3" name="tree"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">سەوزای</label>
                </div>
                    <img src="/Web-Home/assets/img/trees_1.svg" class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>

         <div class="flex cursor-pointer " onclick="on('input4','mark4')" > 
            <div id="mark4"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center m-4">
                    <input type="checkbox"  id="input4" name="ready"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">راخراو</label>
                </div>
                    <img src="/Web-Home/assets/img/living-room-svgrepo-com.svg" class="mx-auto h-14 w-14 mb-2 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>
         
         <div class="flex cursor-pointer " onclick="on('input5','mark5')" > 
            <div id="mark5"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center my-4">
                    <input type="checkbox"  id="input5" name="electricity"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">کارەبای بەردەوام</label>
                </div>
                    <img src="/Web-Home/assets/img/electricity-svgrepo-com.svg" class="mx-auto h-14 w-14 mb-2 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>

         <div class="flex cursor-pointer " onclick="on('input6','mark6')" > 
            <div id="mark6"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center my-4">
                    <input type="checkbox"  id="input6" name="clothesroom"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">ژوری جلگۆرین</label>
                </div>
                    <img src="/Web-Home/assets/img/wardrobe-mirror-svgrepo-com.svg" class="mx-auto h-14 w-14 mb-2 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>

         <div class="flex cursor-pointer " onclick="on('input7','mark7')" > 
            <div id="mark7"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center m-4">
                    <input type="checkbox"  id="input7" name="swimming"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">مەلەوانگە</label>
                </div>
                    <img src="/Web-Home/assets/img/swimming-svgrepo-com.svg" class="mx-auto h-14 w-14 mb-2 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>

         <div class="flex cursor-pointer " onclick="on('input8','mark8')" > 
            <div id="mark8"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center my-4">
                    <input type="checkbox"  id="input8" name="camera"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">کامێرای چاودێری</label>
                </div>
                    <img src="/Web-Home/assets/img/security-protection-camera-cctv-video-crime-cyber-svgrepo-com.svg" class="mx-auto h-14 w-14 mb-2 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>

         <div class="flex cursor-pointer " onclick="on('input9','mark9')" > 
            <div id="mark9"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center my-4">
                    <input type="checkbox"  id="input9" name="security"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">کارمەندی سیکورتی</label>
                </div>
                    <img src="/Web-Home/assets/img//security-guard-svgrepo-com.svg" class="mx-auto h-14 w-14 mb-2 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>

         <div class="flex cursor-pointer " onclick="on('input11','mark11')" > 
            <div id="mark11"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center my-4">
                    <input type="checkbox"  id="input11" name="garage"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">گەراجی ئۆتۆمبێل</label>
                </div>
                    <img src="/Web-Home/assets/img//parked-car-svgrepo-com.svg" class="mx-auto h-14 w-14 mb-2 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>

         <div class="flex cursor-pointer " onclick="on('input22','mark22')" > 
            <div id="mark22"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center m-4">
                    <input type="checkbox"  id="input22" name="park"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">پارک</label>
                </div>
                    <img src="/Web-Home/assets/img//park-svgrepo-com.svg" class="mx-auto h-14 w-14 mb-2 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>

         <div class="flex cursor-pointer " onclick="on('input33','mark33')" > 
            <div id="mark33"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center my-4">
                    <input type="checkbox"  id="input33" name="gym"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">هۆڵی لەشجوانی</label>
                </div>
                    <img src="/Web-Home/assets/img/dumbell-gym-healthy-life-svgrepo-com.svg" class="mx-auto h-14 w-14 mb-2 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>

         <div class="flex cursor-pointer " onclick="on('input44','mark44')" > 
            <div id="mark44"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center m-4">
                    <input type="checkbox"  id="input44" name="market"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">مارکێتی نزیک</label>
                </div>
                    <img src="/Web-Home/assets/img//coffee-shop-svgrepo-com.svg" class="mx-auto h-14 w-14 mb-2 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>
         <div class="flex cursor-pointer " onclick="on('input45','mark45')" > 
            <div id="mark45"  class="relative bg-blueGray-200 m-2 w-32 h-32 max-w-xs rounded-lg shadow-inner ">
                <div class="flex justify-center items-center m-4">
                    <input type="checkbox"  id="input45" name="angles"  value="1" class=" hidden w-5 h-5 bg-transparent outline-none border-none rounded-md focus:ring-transparent">
                    <label  class="block ml-2 text-sm font-semibold text-black">روکن</label>
                </div>
                    <img src="/Web-Home/assets/img/road-highway-svgrepo-com.svg" class="mx-auto h-14 w-14 mb-2 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"></img>     
            </div>
         </div>
        </div>
        <div class="flex flex-wrap flex-row-reverse mt-8 ">
            <div class="w-2/3 lg:w-8/12 px-4">
            <button  type="submit" class="w-full p-2 rounded-md bg-[#188F8D] hover:bg-[#106564] text-white text-center  text-xl ">بلاوکردنەوە</button>
            </div>
            <div class="w-1/3 lg:w-4/12 px-4">
            <button type="reset" class="w-full p-2 rounded-md bg-gray-700 hover:bg-gray-800 text-white text-center  text-xl ">گەرانەوە</button>
            </div>
        </div>
        </div>
    </div>
    
    </form>

</body>
</html>
<script>
    function on($input ,$mark){
        var input = document.getElementById($input);
        if (input.checked == false){

        document.getElementById($mark).classList.add("bg-[#49d850db]")
        input.checked = true;
        }else{
        document.getElementById($mark).classList.remove("bg-[#49d850db]")
        input.checked = false;
        }
    }
</script>