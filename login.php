<?php

require_once('includes/nav.php'); in(1); ?>
<?php
$error = ['result' => ''];
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    if(!empty($_POST["tell"])&&!empty($_POST["password"])){
        $check = User::verify($_POST["tell"] , $_POST["password"]);
        if ($check){
            $session->login($check);
            go("home.php");
        }else{
            $error['result']= "ژمارە مۆبایلەکەت یان وشەی نهێنی هەڵەیە";
        }
    }else{
        $error['result']="تکایە هەردوو خانەکە پربکەوە";
    }
   
}

?>


    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-6 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-green-300 to-[#188F8D] shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <form method="POST" class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold mb-6 m-4">فۆرمی چونە ژورەوەی هەژماری خۆت</h1>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="relative">
                                <input autocomplete="off" required name="tell" type="text" class="peer text-right placeholder-transparent h-12 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600 focus:border-[#188F8D]" placeholder="Email address" />
                                <label for="email" class="absolute right-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">ژمارە مۆبایل</label>
                            </div>
                            <div class="relative">
                                <input autocomplete="off" required  name="password" type="password" class="peer text-right placeholder-transparent h-12 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600 focus:border-[#188F8D]" placeholder="Password" />
                                <label for="وشەی نهێنی" class="absolute right-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">وشەی نهێنی</label>
                            </div>
                            <div class="relative text-right">
                                <a href="" class="bg-orange-500 text-white rounded-md px-2 py-1 absolute left-0">دروستکردنی هەژمار</a>
                                <button type="submit" name="submit" class="bg-[#188F8D] text-white rounded-md px-2 py-1">داخلبوون</button>
            
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>     
</body>
</html>