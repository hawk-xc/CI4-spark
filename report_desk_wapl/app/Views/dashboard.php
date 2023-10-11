<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <?= $this->extend('particle/dashboard_particle.php'); ?>
    <?= $this->section('content'); ?>
    <h1 class="text-2xl font-extrabold text-center">testing</h1>
    <h1 class="text-2xl font-extrabold text-center">ora ngono anjeng</h1>

    <?= $this->endSection(); ?>
</body>

</html>