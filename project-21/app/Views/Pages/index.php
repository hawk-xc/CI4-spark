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
        <span class="badge bg-primary">Home</span>
        <h2>Daftar bacaan komik</h2>
        <?php
        if (session()->getFlashdata('pesan')) :
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hallo!</strong> <?= session('pesan') ?>
                <button type="button" class="close btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        endif;
        ?>
        <?= d($komik) ?>

        <div class="balok-user">
            <a href="create"><button class="btn btn-warning shadow">Tambah data</button></a>
            <form action="/delete" method="post" class="form-delete bg-light shadow">
                <input type="number" name="data-to-delete" class="data bg-light" placeholder="id" required><input type="submit" name="kirim-delete" class="btn bg-danger delete" value="hapus">
            </form>
        </div>
    </div>
    <?= $this->endSection() ?>
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        $('.alert').alert()
    })
</script>

</html>