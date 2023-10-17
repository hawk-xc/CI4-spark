<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tailwind/output.css">
    <title><?= $title ?></title>
</head>

<body class="max-w-full h-screen flex flex-col justify-center align-middle items-center">
    <!-- here is login area -->
    <span class="text-2xl font-bold my-7 text-slate-700">form pendaftaran user baru</span>
    <section name="register" class="mx-auto">
        <form action="<?= route_to('register_load') ?>" class="w-80 flex flex-col gap-3">
            <input type="text" name="username" placeholder=" nama lengkap" class="w-full rounded-lg p-3 placeholder:text-slate-800 border border-slate-500">
            <input type="text" name="username" placeholder=" jabatan" class="w-full rounded-lg p-3 placeholder:text-slate-800 border border-slate-500">
            <div name="userPass" class="flex flex-row gap-3">
                <input type="text" name="username" placeholder=" username" class="w-full rounded-lg p-3 placeholder:text-slate-800 border border-slate-500">
                <input type="text" name="username" placeholder=" kata sandi" class="w-full rounded-lg p-3 placeholder:text-slate-800 border border-slate-500">
            </div>
        </form>
    </section>
</body>
<script src="./js/register.js"></script>

</html>