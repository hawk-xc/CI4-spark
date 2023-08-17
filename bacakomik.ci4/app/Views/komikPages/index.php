<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?= $this->extend('layout/templates') ?>
    <?= $this->section('content_page') ?>

    <div class="container">
        <span class="badge bg-warning">Home</span>
        <h1><b>BacaKomik.id Landing Page</b></h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <?php
            $i = 1;
            foreach ($detail as $row) :
            ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><img class="sampul-image" src="image/<?= $row['sampul'] ?>" alt=""></td>
                        <td><?= $row['judul'] ?></td>
                        <td>
                            <a href="detail/<?= $row['slug_name'] ?>"><button class="lihat-button btn btn-warning">lihat</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            <?php
                $i++;
            endforeach;
            ?>
        </table>
    </div>
    <?= $this->endSection() ?>
</body>

</html>