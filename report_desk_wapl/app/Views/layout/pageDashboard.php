<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./tailwind/output.css">
</head>

<body>
    <?= $this->include('layout/sidebar'); ?>
    <?= $this->include('layout/header'); ?>
    <!-- translate x 52 -->
    <div class="bg-slate-300 pl-56 pr-4 ">
        <?= $this->renderSection('content'); ?>

        <?= $this->include('layout/footer'); ?>
    </div>

    <div class="flex-grow"></div>
</body>
<script src="js/dashboardPanel.js"></script>

</html>