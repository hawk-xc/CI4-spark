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
    <div class="container d-block">
        <h2>trustly comment</h2>
        <form action="/save_testing_content" method="post">

            <div class="mb-3">
                <?= d($validation) ?>
                <label for="validationTextarea" class="form-label">Textarea</label>
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
                <textarea name="comment" class="form-control is-valid" id="validationTextarea" placeholder="Required example textarea"></textarea>
                <div class="invalid-feedback">
                    Please enter a message in the textarea.
                </div>
            </div>


            <button class="btn btn-danger d-block mt-5 mb-2">submit now</button>
        </form>
    </div>
    <?= $this->endSection() ?>
</body>

</html>