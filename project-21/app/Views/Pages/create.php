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

    <div class="container">
        <form action="/save" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul-tag" class="form-label">Judul</label>
                <input name="judul" type="text" class="form-control <?= session('validation') ? "is-invalid" : "is_valid" ?>" id="judul-tag" value="<?= old('judul') ?>">
                <div class="invalid-feedback">
                    <?= session('validation.judul') ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="karangan-tag" class="form-label">Karangan</label>
                <input name="karangan" type="text" class="form-control <?= session('validation') ? "is-invalid" : "is_valid" ?>" id="karangan-tag" value="<?= old('karangan') ?>">
                <div class="invalid-feedback">
                    <?= session('validation.karangan') ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="penerbit-tag" class="form-label">Penerbit</label>
                <input name="penerbit" type="text" class="form-control <?= session('validation') ? "is-invalid" : "is_valid" ?>" id="penerbit-tag" value="<?= old('penerbit') ?>">
                <div class="invalid-feedback">
                    <?= session('validation.penerbit') ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="sampul" class="form-label">Gambar sampul</label>
                <input name="sampul" class="form-control <?= session('validation') ? "is-invalid" : "is_valid" ?>" type="file" id="sampul" accept="image/*">
                <div class="invalid-feedback">
                    <?= session('validation.sampul') ?>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Kirim data</button>
        </form>
    </div>

    <?= $this->endSection() ?>
</body>

</html>