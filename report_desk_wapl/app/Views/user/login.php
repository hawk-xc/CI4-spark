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
    <section class="py-10 px-10 md:shadow-lg lg:shadow-lg sm:shadow-none rounded-lg flex flex-col">
        <span class="text-2xl font-semibold text-teal-900 mx-auto">Login disini</span>
        <form action="" method="post" class="flex flex-col gap-5 mt-5">

            <!-- username form field -->
            <input type="text" placeholder="-> email . . ." class="active:outline-none focus:outline-none focus:outline-dashed duration-150 transition-all placeholder:pl-1 overflow-hidden focus:placeholder:text-teal-700">

            <!-- password form field -->
            <div class="relative">
                <input type="password" id="password_field" placeholder="-> password . . ." class=" focus:outline-none focus:outline-dashed duration-150 transition-all placeholder:pl-1 overflow-hidden rounded-sm focus:placeholder:text-teal-700">
                <i id="show_pass_toggle" class="ri-eye-line hidden absolute right-0 text-teal-800 z-10"></i>
            </div>

            <!-- send button -->
            <input type="submit" name="send" class="bg-teal-400 rounded-lg text-white py-2 hover:bg-teal-300 transition-all duration-150 cursor-pointer">
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
</body>
<script src="./js/login.js"></script>

</html>