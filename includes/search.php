<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

}


?>


<div id="search" class="hidden">
<hr class="container mx-auto my-4 border-b-1 border-blueGray-300">
    <form action="<?php echo $db->secure($_SERVER['PHP_SELF']);?>" method="POST"  class="flex flex-row-reverse flex-wrap container mx-auto">
     
        <div class="w-6/12 lg:w-2/12 px-4">
          <div class="relative w-full mb-3">
            <select name="type" required id="type" value="" class="pr-4 text-right border-0 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  ">
            <option value="" disabled selected>جۆری موڵکەکە</option>
              <option value="خانوو">خانوو</option>
              <option value="شوقە">شوقە</option>
              <option value="ڤێلا">ڤێلا</option>
              <option value="مەزرەعە">مەزرەعە</option>
              <option value="ئەرز">ئەرز</option>
          </select>
          </div>
        </div>
        <div class="w-6/12 lg:w-2/12 px-4  ">
          <div class="relative w-full mb-3">
            <select name="pre_type" id="pre_type" required  value="" class="text-right border-0  py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
              <option value="" disabled selected>:کرێ/کرین</option>
              <option value="کرێ">کرێ</option>
              <option value="فرۆشتن">کرین</option>
           </select>
            </div>
        </div>
       
        <div class="w-6/12 lg:w-2/12 px-4">
            <div class="relative w-full mb-3">
              <input type="number" name="price" required placeholder="نرخی دەسپێک" value=""  class="text-right border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="United States">
            </div>
          </div>
          <div class="w-6/12 lg:w-2/12 px-4">
            <div class="relative w-full mb-3">
              <input type="number" name="price" required placeholder="زۆرترین نرخ" value=""  class="text-right border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="United States">
            </div>
          </div>
          <div class="w-6/12 lg:w-2/12 px-4">
            <div class="relative w-full mb-3">
              <select name="city" required value="" class="pr-4 text-right border-0 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"">
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
          <div class="w-6/12 lg:w-2/12 px-4">
            <button  type="submit" onclick="search()" class="w-full p-1 rounded-md bg-[#188F8D] hover:bg-[#106564] text-white text-center  text-xl ">گەران</button>
            </div>


    </form>
    <hr class="container mx-auto my-4 border-b-1 border-blueGray-300">
    </div>

