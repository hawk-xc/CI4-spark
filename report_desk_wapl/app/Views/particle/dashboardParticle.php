<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tailwind/output.css">
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
                <a href="../home">
                    <li id="homeNavButton" class="<?= $homeNavButton == true ? 'active-click flex items-center gap-2' : 'button-click translate-x-2 hover:translate-x-4  duration-150 transition-all ease-out'; ?>"><i class="ri-home-heart-line text-2xl"></i> home</li>
                </a>
                <!-- navigasi ticket -->
                <a href="../ticket">
                    <li id="ticketNavButton" class="<?= $ticketNavButton == true ? 'active-click flex items-center gap-2' : 'button-click translate-x-2 hover:translate-x-4  duration-150 transition-all ease-out'; ?>"><i class="ri-coupon-3-fill text-2xl"></i> ticket</li>
                </a>

                <!-- navigasi contact -->
                <a href="../contact">
                    <li id="" class="<?= $contactNavButton == true ? 'active-click flex items-center gap-2' : 'button-click translate-x-2 hover:translate-x-4  duration-150 transition-all ease-out'; ?>"><i class="ri-contacts-book-2-fill text-2xl"></i> contact</li>
                </a>

                <li id="" class="button-click translate-x-2 hover:translate-x-4  duration-150 transition-all ease-out"><i class="ri-file-info-line text-2xl"></i> panel 3</li>
                <li id="" class="button-click translate-x-2 hover:translate-x-4  duration-150 transition-all ease-out"><i class="ri-file-info-line text-2xl"></i> panel 4</li>
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
            <span class="flex flex-row gap-3 mr-4">
                <span id="searchBox" class="md:scale-100 duration-150 transition-all flex flex-row gap-1 bg-slate-200 rounded-full max-sm:w-7 max-sm:h-7 md:px-3 items-center justify-center">
                    <i class="text-slate-800 ri-search-2-line max-sm:text-sm"></i>
                    <form action="" method="post" class="max-sm:hidden">
                        <input type="text" class="placeholder:text-sm bg-transparent active:outline-none focus:outline-none md:w-40" placeholder="Hey, cari semua disini . . .">
                    </form>
                </span>
                <span class="flex flex-row items-center align-middle gap-2">
                    <span id="greet" class="md:flex md:flex-col lg:flex lg:flex-col max-sm:hidden">
                        <span>Denny irawan</span>
                        <span class="text-xs">Pengoprek hamdal</span>
                    </span>
                    <span id="userBox" class="md:scale-100 duration-150 transition-all  max-sm:w-7 max-sm:h-7 md:w-10 md:h-10 lg:w-10 lg:h-10 rounded-full bg-slate-200 flex justify-center align-middle items-center">
                        <i class="ri-user-5-fill max-sm:text-lg md:text-2xl text-slate-500"></i>
                        <!-- dropdown -->
                    </span>
                </span>
                <span id="hamburgerMenu" class="flex flex-row gap-1 bg-slate-200 rounded-full max-sm:w-7 max-sm:h-7 md:hidden items-center justify-center">
                    <i id="hamburgerIcon" class="text-slate-800 ri-menu-2-line max-sm:text-sm"></i>
                </span>
            </span>
        </div>
    </section>
    <div class="w-screen p-5 bg-slate-100 h-screen overflow-hidden">
        <div class="max-sm:pt-12 md:pl-52 md:pt-16 lg:pl-52 lg:pt-16">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</body>
<script src="js/dashboardPanel.js"></script>
<script>
    function hello() {
        console.log('hello');
    }
</script>

</html>