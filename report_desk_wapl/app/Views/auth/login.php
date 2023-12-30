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
    <div name="hero" id="hero" class="md:flex md:flex-row lg:flex lg:flex-row w-[70%] max-sm:w-[90%] md:shadow-lg md:rounded-lg lg:shadow-lg lg:rounded-lg overflow-hidden">
        <section class="max-sm:hidden md:flex md:flex-col md:w-1/2 md:p-10 lg:flex lg:flex-col lg:w-1/2 lg:p-10 sm:hidden gap-3 md:justify-center lg:justify-center" style="background-image: url('<?= base_url('asset/gradasi.png') ?>'); background-size: cover;">
            <span class="text-6xl text-slate-100 my-3 font-extrabold max-sm:hidden md:block lg:block">You life matters</span>
            <span class="max-sm:hidden md:block lg:block text-slate-50">"Tetap semangat dalam belajar. Ilmu adalah kunci menuju kebijaksanaan dan kesuksesan. Teruslah maju dan jangan pernah berhenti mencari pengetahuan."</span>
            <span class="text-slate-50 italic mt-5 before:w-10 before:h-[1px] before:bg-slate-50 before:block before:absolute">esjhy chat GPT</span>
        </section>
        <section class="py-10 md:px-10 lg:px-10 sm:px-1 rounded-lg flex flex-col md:w-1/2 lg:w-1/2 sm:w-full">
            <div class="w-full bg-white rounded-lg md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        <?= lang('Auth.loginTitle') ?>
                    </h1>
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form class="space-y-4 md:space-y-6" action="<?= url_to('login') ?>" method="post">
                        <?= csrf_field() ?>
                        <div>
                            <?php if ($config->validFields === ['email']) : ?>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900"><?= lang('Auth.email') ?></label>
                                <input type="email" name="login" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-300 focus:outline-blue-300 focus:border-blue-300 block w-full p-2.5" placeholder="nama@instansi.com">
                            <?php else : ?>
                                <label for="usernameemail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?= lang('Auth.emailOrUsername') ?></label>
                                <input type="text" name="login" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-300 focus:outline-blue-300 focus:border-blue-300 block w-full p-2.5" placeholder="username atau email">
                            <?php endif; ?>
                        </div>
                        <div>
                            <span class="flex flex-row gap-3">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900"><?= lang('Auth.password') ?></label> <i id="showPasswd" class="ri-eye-close-fill duration-150 ease-out transition-all"></i>
                            </span>
                            <input type="password" name="password" id="password" placeholder="<?= lang('Auth.password') ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 focus:ring-blue-300 focus:outline-blue-300 focus:border-blue-300">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <?php if ($config->allowRemembering) : ?>
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300"><?= lang('Auth.rememberMe') ?></label>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if ($config->activeResetter) : ?>
                                <a href="<?= url_to('forgot') ?>" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500 max-sm:text-[10px]"><?= lang('Auth.forgotYourPassword') ?></a>
                            <?php endif; ?>
                        </div>
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-500 active:bg-blue-600"><?= lang('Auth.loginAction') ?></button>
                        <?php if ($config->allowRegistration) : ?>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                <a href="<?= url_to('register') ?>" class="font-medium text-primary-600 hover:underline dark:text-primary-500"><?= lang('Auth.forgotYourPassword') ?></a>
                            </p>
                        <?php endif; ?>
                        <?php if ($config->allowRegistration) : ?>
                            <a href="<?= url_to('register') ?>" class="font-medium text-primary-600 hover:underline dark:text-primary-500"><?= lang('Auth.needAnAccount') ?></a>
                        <?php endif; ?>
                    </form>
                </div>
            </div>

        </section>
    </div>
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('#showPasswd').on('click', function() {
            if ($('#showPasswd').hasClass('ri-eye-close-fill')) {
                $('#showPasswd').removeClass('ri-eye-close-fill').addClass('ri-eye-2-fill')
                $('#password').attr('type', 'text')
            } else {
                $('#showPasswd').removeClass('ri-eye-2-fill').addClass('ri-eye-close-fill')
                $('#password').attr('type', 'password')
            }
        })
    })
</script>

</html>