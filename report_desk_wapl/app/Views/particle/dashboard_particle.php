<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tailwind/output.css">
    <title><?= $title ?></title>
</head>

<body>
    <section name="panel">
        <!-- this is panel of dashboard -->
        <section id="right_panel" class="w-52 bg-slate-800 h-full absolute pl-5 pt-8">
            <span class="text-xl font-semibold text-teal-100"><i class="ri-verified-badge-line"></i> dashboard</span>
            <ul class="text-yellow-200 absolute">
                <li><i class="ri-home-heart-line text-2xl"></i> home</li>
                <li><i class="ri-file-info-line text-2xl"></i> panel 2</li>
                <li><i class="ri-file-info-line text-2xl"></i> panel 1</li>
                <li><i class="ri-file-info-line text-2xl"></i> panel 3</li>
                <li><i class="ri-file-info-line text-2xl"></i> panel 4</li>
            </ul>
            <span class="absolute w-8 h-8 text-center items-center bg-blue-200 translate-x-10"><i class="ri-contract-left-right-fill"></i></span>
        </section>
    </section>
    <?= $this->renderSection('content') ?>
</body>
<script src="js/dashboardPanel.js"></script>

</html>