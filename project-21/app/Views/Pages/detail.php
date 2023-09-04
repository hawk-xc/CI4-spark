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
    <div class="container" style="border: 0px;">
        <span class="badge bg-primary">Home > komik > <?= $komik['slug'] ?></span>
        <h2><?= "komik " . $komik['judul'] ?></h2>
        <hr class="bg-primary">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url('image/') . $komik['sampul'] ?>" class="card-img-top mt-2" alt="<?= "image of " . $komik['slug'] ?>">
                <div class="card-body">
                    <h5 class="card-title">Few Information</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $komik['judul'] ?></li>
                    <li class="list-group-item"><?= $komik['karangan'] ?></li>
                    <li class="list-group-item"><?= $komik['penerbit'] ?></li>
                    <li class="list-group-item"><?= $komik['updated_at'] ?></li>
                </ul>
                <div class="card-body d-inline">
                    <form action="/delete" method="post" class="d-inline">
                        <button name="data-to-delete" value="<?= $komik['id'] ?>" class="btn btn-danger" onclick="return confirm('apakah anda benar ingin menghapus secara permanen?');">hapus</button>
                    </form>
                    <a href="<?= base_url('ubah/' . $komik['slug']) ?>" class="card-link"><button class="btn btn-primary">ubah</button></a>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>
</body>

</html>