<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tailwind/output.css">
    <title><?= $title ?></title>
</head>

<body class="max-w-full h-screen flex flex-row justify-center align-middle items-center">
    <!-- here is login area -->
    <div name="hero" id="hero" class="md:flex md:flex-row lg:flex lg:flex-row w-[70%] md:shadow-lg md:rounded-lg lg:shadow-lg lg:rounded-lg overflow-hidden">
        <section class="md:flex md:flex-col md:w-1/2 md:p-10 lg:flex lg:flex-col lg:w-1/2 lg:p-10 sm:hidden gap-3 md:justify-center lg:justify-center" style="background-image: url('asset/gradasi.png'); background-size: cover;">
            <span class="text-6xl text-slate-100 my-3 font-extrabold max-sm:hidden md:block lg:block">You life matters</span>
            <span class="max-sm:hidden md:block lg:block text-slate-50">"Tetap semangat dalam belajar. Ilmu adalah kunci menuju kebijaksanaan dan kesuksesan. Teruslah maju dan jangan pernah berhenti mencari pengetahuan."</span>
            <span class="text-slate-50 italic mt-5 before:w-10 before:h-[1px] before:bg-slate-50 before:block before:absolute">esjhy chat GPT</span>
        </section>
        <section class="py-10 md:px-10 lg:px-10 sm:px-1 rounded-lg flex flex-col md:w-1/2 lg:w-1/2 sm:w-full">
            <span class="text-2xl font-semibold text-teal-900 mx-auto">Login disini</span>
            <form action="" method="post" class="flex flex-col gap-5 mt-5">

                <!-- username form field -->
                <input type="text" placeholder="-> email . . ." class="active:outline-none focus:outline-none focus:outline-dashed duration-150 transition-all placeholder:pl-1 overflow-hidden focus:placeholder:text-teal-700">

                <!-- password form field -->
                <div class="relative">
                    <input type="password" id="password_field" placeholder="-> password . . ." class=" focus:outline-none focus:outline-dashed duration-150 transition-all placeholder:pl-1 overflow-hidden rounded-sm focus:placeholder:text-teal-700">
                    <i id="show_pass_toggle" class="ri-eye-off-line hidden absolute right-0 text-teal-800 z-10"></i>
                </div>

                <!-- send button -->
                <input type="submit" name="send" value="login sekarang" class="bg-blue-400 rounded-lg text-white py-2 hover:bg-blue-300 transition-all duration-150 cursor-pointer">
            </form>
            <a href="" class="text-sm mx-auto mt-4 text-blue-400">lupa password?</a>
            <fieldset name="oAuth" class="mt-7 border border-slate-500 box-border p-2 border-opacity-60 flex flex-col gap-2 text-sm">
                <legend class="mx-auto px-3 rounded-sm text-teal-900">gunakan opsi lainnnya</legend>
                <div class="p-2 flex align-middle items-center gap-2 cursor-pointer hover:bg-slate-100 duration-150 transition-all">
                    <i class="ri-google-fill text-2xl text-teal-500"></i>
                    Lanjutkan dengan Google
                </div>
                <div class="p-2 flex align-middle items-center gap-2 cursor-pointer hover:bg-slate-100 duration-150 transition-all">
                    <i class="ri-facebook-box-fill text-2xl text-blue-300"></i>
                    Lanjutkan dengan Facebook
                </div>
            </fieldset>
        </section>
    </div>
</body>
<script src="./js/login.js"></script>

</html>