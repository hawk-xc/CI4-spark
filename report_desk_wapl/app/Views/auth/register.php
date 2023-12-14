<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= base_url('node_modules/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('node_modules/jquery/dist/jquery.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('tailwind/output.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body class="max-w-full h-screen flex flex-row justify-center align-middle items-center">
    <!-- here is login area -->
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                <?= lang('Auth.register') ?>
            </h1>

            <?= view('Myth\Auth\Views\_message_block') ?>

            <form class="space-y-4 md:space-y-6" action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?= lang('Auth.email') ?></label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 <?php if (session('errors.email')) : ?> border-red-500 <?php endif ?>" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                </div>
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?= lang('Auth.username') ?></label>
                    <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 <?php if (session('errors.username')) : ?>border-red-500<?php endif ?>" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?= lang('Auth.password') ?></label>
                    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 <?php if (session('errors.password')) : ?>border-red-500<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                </div>
                <div>
                    <label for="pass_confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?= lang('Auth.repeatPassword') ?></label>
                    <input type="password" name="pass_confirm" id="pass_confirm" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 <?php if (session('errors.pass_confirm')) : ?>border-red-500<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                </div>

                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required>
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-gray-500 dark:text-gray-300">saya setuju <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">syarat dan Ketentuan</a></label>
                    </div>
                </div>
                <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-500 active:bg-blue-600"><?= lang('Auth.register') ?></button>
                <p class="text-sm font-light text-gray-500 dark:text-gray-400"><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>" class="font-medium text-primary-600 hover:underline dark:text-primary-500"><?= lang('Auth.signIn') ?></a></p>
            </form>
        </div>
    </div>
</body>