<?php

use Random\Engine\Secure;

require_once('includes/nav.php');
in(0 ,"login.php" );
?>
<?php 
$error = ['result' => ''];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST['username'])||empty($_POST['tell'])||empty($_POST['email'])||empty($_POST['place'])){
    exit ("please enter the fill");
  }else{
    $obj->username = $db->secure($_POST['username']);
    
    $obj->email = $db->secure($_POST['email']);
    $obj->place = $db->secure($_POST['place']);
    if($obj->tell != $_POST['tell'] ){
      $obj->tell = $db->secure($_POST['tell']);
      $scan = User::verify_singup($user->tell);
    }else{
      $scan = false;
    }
    if($scan === false){
        $obj->update("`user_id` = '$obj->user_id'");
        go("home.php");  
    }else{
        $error['result']="ئەم ژمارە مۆبایلە بەکارهاتوە";
    }
  }
  if($_FILES['img']){
    $upload->profile = 'y';
    $upload->set_image($_FILES['img']);
    if($upload->save() === true){
        $sucs = true ; 
    }else{
        $error['result'] =  $upload->save();
    }
}
if(!empty($_POST['pass1'])&&!empty($_POST['pass2'])&&$_POST['uppass']===1){
  $pass1=$db->secure($_POST['pass1']);
  $pass2=$db->secure($_POST['pass2']);
  if($pass1 === $pass2){
    if($pass1>7){
      $obj->password = hash('gost' , $pass1);
    }else{
      $error['result'] ="وشەی نهێنی کورتە";
    }
  }else{
    $error['result'] ="وشەی نهێنی هاوشێوە نینە";
  }
}
}

?>
<div class=" container mx-auto py-10 lg:w-[70rem] w-[20rem]">
        <div class="p-4 bg-white shadow mt-24 rounded-lg">   
      <form action="<?php echo $db->secure($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data" >
      <div class="relative">   
        <div class="w-52 h-52 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 -top-4 -mt-24 flex items-center justify-center text-[#188F8D]">
            <img class="w-full h-full rounded-full object-cover z-10" id="img"  src="./upload/<?php echo $obj->photo?>"  alt="user photo"> 
            <input type="file" id="file" name="img" onchange="previewFile()" class="hidden">
             <label for="file" class="z-20 absolute cursor-pointer bg-slate-200 rounded-full p-4 top-36 right-0 shadow-lg">
           <img src="assets/img/update.svg"  class="w-8 h-8 z-20">
             </label>
             </div>
            </div>
            
            <div class="w-full flex flex-col justify-center items-center gap-4 pt-32">
                <input type="text" name="username" required value="<?php echo $_POST['username'] ?? $obj->username; ?>" class=" text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder="ناو">
                <input type="tell" name="tell" required value="<?php echo $_POST['tell'] ?? $obj->tell; ?>" class=" text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder="ژمارە مۆبایل">
                <input type="email" name="email" required value="<?php echo $_POST['email'] ?? $obj->email; ?>" class=" text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder="ئیمایل">
                <input type="place" name="place" required value="<?php echo $_POST['place'] ?? $obj->place; ?>" class=" text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder="شوێن">
        <hr class="container mx-auto my-4 border-b-1 border-blueGray-300">
        <div class="w-2/3 text-right " >
        <label for="uppass"  class="cursor-pointer">گۆرینی وشەی نهێنی</label>
        <input type="checkbox"  onclick="pass()" name="uppass" id="uppass" class="cursor-pointer">
        </div>
        <input type="password" name="pass1" id="pass1"  value="" class="hidden text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder="وشەی نهێنی">
        <input type="password" name="pass2" id="pass2"  value="" class="hidden text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder=" دوبارەکردنەوەی وشەی نهێنی">
        <hr class="container mx-auto my-4 border-b-1 border-blueGray-300">
        <div class="w-full flex ">
          <div class="w-1/2 lg:w-4/12 px-4">
          <button type="reset" class="w-full p-2 rounded-md bg-gray-700 hover:bg-gray-800 text-white text-center  text-xl ">
            <img src="assets/img/x.svg" class="md:w-8 md:h-8 w-6 h-6 mx-1 inline-block">سرینەوە
          </button>
          </div>
          <div class="w-1/2 lg:w-8/12 px-4">
            <button  type="submit" class="w-full p-2 rounded-md bg-[#188F8D] hover:bg-[#106564] text-white text-center  text-xl ">
              <img src="assets/img/check.svg" class="md:w-8 md:h-8 w-6 h-6 mx-1 inline-block">گۆرین
            </button>
            </div>
            
      </div>
      <div class=""><p class="text-red-500"><?php echo $error['result']; ?></p></div>
</div>
</form>
      </div>
    </div>
</body>
</html>

<script>
function pass(){
  var input = document.getElementById('uppass');
  if (input.checked == false){
    document.getElementById("pass1").classList.add("hidden")
        document.getElementById("pass1").classList.remove("block")
        document.getElementById("pass2").classList.add("hidden")
        document.getElementById("pass2").classList.remove("block")
        }else if(input.checked == true){
          document.getElementById("pass1").classList.add("block")
        document.getElementById("pass1").classList.remove("hidden")
        document.getElementById("pass2").classList.add("block")
        document.getElementById("pass2").classList.remove("hidden")
        }

        }
        
        function previewFile() {
          var preview = document.getElementById('img');
          var file    = document.querySelector('input[type=file]').files[0];
          var reader  = new FileReader();

          reader.onloadend = function () {
            preview.src = reader.result;
          }

          if (file) {
            reader.readAsDataURL(file);
          } else {
            preview.src = "";
          }
}
</script>