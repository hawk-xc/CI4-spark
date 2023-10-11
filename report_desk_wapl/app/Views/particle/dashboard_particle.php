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
            <ul class="text-white">
                <li><i class="ri-home-heart-line"></i> home</li>
                <li>panel 1</li>
                <li>panel 2</li>
                <li>panel 3</li>
                <li>panel 4</li>
            </ul>
        </section>
    </section>
    <?= $this->renderSection('content') ?>
</body>

</html>