<?php require_once('includes/login.php') ?>

<form method="POST" action="" class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:drop-shadow-xl w-full h-screen flex flex-col justify-center items-center">
    <div class=" flex flex-col justify-center items-center backdrop-blur-sm bg-black-rgba rounded-xl px-10 py-20 lg:px-24 lg:py-40">
        <p class="text-xl md:text-2xl lg:text-3xl lg:mb-18 ">فۆرمی داخلبوونی ئەدمین</p>
        <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? ""); ?>" placeholder="ناوی سیانی " required class="mt-24 mb-8 lg:w-80 py-1 border-b text-end outline-none bg-transparent focus:border-blue-400 transition-all text-white md:text-xl">
        <input type="password" name="pass" value="<?php echo htmlspecialchars($_POST['pass'] ?? ""); ?>" placeholder="وشەی نهێنی" required class="m-8 lg:w-80 lg:my-16 py-1 border-b text-end outline-none bg-transparent focus:border-blue-400 transition-all text-white md:text-xl">
        <p class=""><?php echo isset($_POST['submit']) ? $error['result'] : ''; ?> </p>
        <button type="submit"  name="submit" class="bg-blue-400 py-1. 5 px-4 mt-10 rounded-xl md:py-3 md:px-10 hover:bg-blue-500 active:translate-y-0.5" >داخلبوون</button>
    </div>
</form>