<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <?= $this->extend('Pages/layout/templates') ?>

    <?= $this->section('content') ?>
    <div class="container" style="border: none;">
        <span class="badge bg-primary">Home > detail</span>
        <h2>detail komik <?= $komik[0]['judul'] ?></h2>
        <?= d($komik) ?>
        <hr class="my-4 bg-primary">
    </div>
    <?= $this->endSection() ?>
</body>

</html>