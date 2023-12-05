<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('./tailwind/output.css') ?>">
    <script src="<?= base_url('node_modules/jquery/dist/jquery.min.js') ?>"></script>
    <title><?= $title ?></title>
</head>

<body class="h-screen">
    <section name="panel" class="h-screen absolute max-sm:fixed md:fixed lg:fixed z-10">
        <!-- this is panel of dashboard -->
        <section id="right_panel" class="w-52 bg-slate-800 max-sm:-translate-x-52 h-screen md:absolute lg:absolute pl-5 pt-8 duration-150 ease-in-out transition-all">
            <span class="text-2xl font-semibold dashboard-title duration-150 transition-all"><i class="ri-verified-badge-line"></i> dashboard</span>
            <hr class="border-b border-white w-40 mt-5">
            <ul class="text-slate-300 flex flex-col gap-2 mt-3">

                <!-- navigasi home -->
                <a href="<?= base_url('home') ?>">
                    <li id="homeNavButton" class="<?= $homeNavButton == true ? 'active-click flex items-center gap-2' : 'button-click translate-x-2 hover:translate-x-4  duration-150 transition-all ease-out'; ?>"><i class="ri-home-heart-line text-2xl"></i> home</li>
                </a>
                <!-- navigasi ticket -->
                <a href="<?= base_url('ticket') ?>">
                    <li id="ticketNavButton" class="<?= $ticketNavButton == true ? 'active-click flex items-center gap-2' : 'button-click translate-x-2 hover:translate-x-4  duration-150 transition-all ease-out'; ?>"><i class="ri-coupon-3-fill text-2xl"></i> ticket</li>
                </a>

                <!-- navigasi contact -->
                <a href="<?= base_url('contact') ?>">
                    <li id="" class="<?= $contactNavButton == true ? 'active-click flex items-center gap-2' : 'button-click translate-x-2 hover:translate-x-4  duration-150 transition-all ease-out'; ?>"><i class="ri-contacts-book-2-fill text-2xl"></i> contact</li>
                </a>
                <!-- Navigasi form -->
                <a href="<?= base_url('form') ?>">
                    <li id="" class="<?= $formNavButton == true ? 'active-click flex items-center gap-2' : 'button-click translate-x-2 hover:translate-x-4  duration-150 transition-all ease-out'; ?>"><i class="ri-todo-fill text-2xl"></i>Form</li>
                </a>
                <li id="" class="button-click translate-x-2 hover:translate-x-4  duration-150 transition-all ease-out"><i class="ri-account-pin-circle-line text-2xl"></i> buat akun</li>
                <li id="" class="button-click translate-x-2 hover:translate-x-4  duration-150 transition-all ease-out"><i class="ri-message-2-line text-2xl"></i> forum diskusi</li>
            </ul>
            <section id="footer" class="bottom-0 absolute mb-10 flex flex-col items-center text-center -translate-x-5">
                <span class="text-white font-bold">kerkom @ 2023</span>
                <span class="text-slate-300">make with ❤️ and Codeigniter4</span>
            </section>
        </section>
    </section>

    <section class="">
        <div id="toolPanel" class="fixed max-sm:pl-3 max-sm:py-4 md:py-4 flex flex-row justify-between flex-nowrap overflow-hidden duration-150 transition-all bg-white  w-full">
            <span class="max-sm:text-lg md:ml-56 lg:ml-56 md:text-2xl lg:text-2xl font-bold text-slate-800"><?= $name ?></span>
            <span class="flex flex-row gap-3 mr-4 items-center">

                <!-- search form -->

                <span id="hamburgerMenu" class="flex flex-row gap-1 bg-slate-200 rounded-full max-sm:w-7 max-sm:h-7 md:hidden items-center justify-center">
                    <i id="hamburgerIcon" class="text-slate-800 ri-menu-2-line max-sm:text-sm"></i>
                </span>
            </span>
        </div>

        <div class="absolute right-[20px] top-[10px]">
            <span class="flex flex-row items-center align-middle gap-2 cursor-pointer">
                <img src="media/wahyu.jpg" id="button" alt="" class="w-10 rounded-md hover:border-2 hover:border-sky-200 box-border duration-150">
            </span>
            <ul id="listData" class="bg-white w-40 p-2 flex-col absolute -translate-x-28 z-50 rounded-md hidden">
                <li class="bg-white max-h-full px-5 py-1 rounded-md my-2 hover:bg-slate-100">maintain user</li>
                <li class="bg-white max-h-full px-5 py-1 rounded-md hover:bg-slate-100">logout</li>
            </ul>
        </div>

    </section>
    <div class="w-screen p-5 bg-slate-100 h-screen overflow-hidden">
        <div class="max-sm:pt-12 md:pl-52 md:pt-16 lg:pl-52 lg:pt-16 mb-5">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</body>
<script src="<?= base_url('js/dashboardPanel.js') ?>"></script>
<script src="<?= base_url('js/messageBox.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(() => {
        $('#button').on('click', function() {
            $('#dropDownIcon').toggleClass('rotate-90');
            if ($('#listData').hasClass('hidden')) {
                $('#listData').fadeIn(200).removeClass('hidden').addClass('flex');
            } else {
                $('#listData').slideUp(200).removeClass('flex').addClass('hidden');
            }
        })
    })
</script>

</html>