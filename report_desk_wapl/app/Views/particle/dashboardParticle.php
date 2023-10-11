<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tailwind/output.css">
    <title><?= $title ?></title>
</head>

<body>
    <section name="panel" class="h-screen absolute">
        <!-- this is panel of dashboard -->
        <section id="right_panel" class="w-52 bg-slate-800 max-sm:-translate-x-52 h-screen md:absolute lg:absolute pl-5 pt-8">
            <span class="text-2xl font-semibold dashboard-title duration-150 transition-all"><i class="ri-verified-badge-line"></i> dashboard</span>
            <hr class="border-b border-white w-40 mt-5">
            <ul class="text-slate-300 flex flex-col gap-2 mt-3">
                <li class="button-click translate-x-2 hover:translate-x-4 hover:font-bold duration-150 transition-all ease-out"><i class="ri-home-heart-line text-2xl"></i> home</li>
                <li class="active-click flex items-center gap-2"><i class="ri-file-info-line text-2xl"></i> panel 2</li>
                <li class="button-click translate-x-2 hover:translate-x-4 hover:font-bold duration-150 transition-all ease-out"><i class="ri-file-info-line text-2xl"></i> panel 1</li>
                <li class="button-click translate-x-2 hover:translate-x-4 hover:font-bold duration-150 transition-all ease-out"><i class="ri-file-info-line text-2xl"></i> panel 3</li>
                <li class="button-click translate-x-2 hover:translate-x-4 hover:font-bold duration-150 transition-all ease-out"><i class="ri-file-info-line text-2xl"></i> panel 4</li>
            </ul>
            <section id="footer" class="bottom-0 absolute mb-10 flex flex-col items-center text-center -translate-x-5">
                <span class="text-white font-bold">kerkom @ 2023</span>
                <span class="text-slate-300">make with ❤️ and Codeigniter4</span>
            </section>
        </section>
    </section>
    <div class="max-sm:px-3 py-3 flex flex-row justify-between flex-nowrap">
        <span class="max-sm:text-lg md:ml-56 lg:ml-56 md:text-2xl lg:text-2xl font-bold text-slate-800"><?= $name ?></span>
    </div>
    <?= $this->renderSection('content') ?>
</body>
<script src="js/dashboardPanel.js"></script>

</html>