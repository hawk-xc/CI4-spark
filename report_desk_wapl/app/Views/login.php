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
    <section class="py-10 px-5 shadow-md rounded-lg flex flex-col">
        <span class="text-2xl font-semibold text-teal-700 mx-auto">Login disini</span>
        <form action="" method="post" class="flex flex-col gap-5 mt-5">
            <input type="text" placeholder="email" class="active:outline-none focus:outline-none focus:outline-dashed focus:border-b-2 border-teal-600 duration-150 transition-all placeholder:pl-1 overflow-hidden rounded-sm">
            <input type="text" placeholder="password" class="active:outline-none focus:outline-none focus:outline-dashed focus:border-b-2 border-teal-600 duration-150 transition-all placeholder:pl-1 overflow-hidden rounded-sm">
        </form>
        <a href="" class="text-sm mx-auto mt-4 text-blue-400">lupa password</a>
    </section>
</body>
</html>