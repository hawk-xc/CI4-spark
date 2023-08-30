<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <?= $this->extend('Pages/layout/templates') ?>

    <!-- section layout edit -->
    <?= $this->section('content') ?>
    <div class="container" style="border: none;">
        <span class="badge bg-primary">Home > komik</span>
        <h2>Daftar komik</h2>
        <hr class="my-4 bg-primary">
        <div class="box-content">
            <?php foreach ($komik as $row) : ?>
                <a href="<?= base_url('komik/' . $row['slug']) ?>" style="text-decoration: none">
                    <div class="card" style="width: 15rem;">
                        <img src="image/<?= $row['sampul'] ?>" class="card-img-top" alt="can access this image">
                        <div class="card-body">
                            <p class="card-text"><?= $row['judul'] ?></p>
                            <code><?= $row['karangan'] ?></code>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?= $this->endSection() ?>
</body>

</html>