<!DOCTYPE html>
<html lang="en">

<head>
    head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tailwind/output.css">
    <title><?= $title ?></title>
</head>


<body>
    <?= $this->include('layout/sidebar'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('layout/header'); ?>
    <?= $this->include('layout/footer'); ?>
</body>

</html>