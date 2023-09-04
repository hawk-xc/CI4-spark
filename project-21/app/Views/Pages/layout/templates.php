<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 JavaScript and Popper.js CDN links -->
    <!-- Bootstrap JavaScript and Popper.js -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/all.css') ?>">
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.js') ?>"></script>
    <script src="<?= base_url('js/all.js') ?>"></script>
    <script src="<?= base_url('js/script.js') ?>"></script>
</head>
<div class="container-header bg-light py-2">
    <a href="<?= base_url() ?>" style="color: #222222; text-decoration: none">
        <h4>BacaKomik</h4>
    </a>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('/komik') ?>">Komik</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Logout</a>
        </li>
    </ul>
</div>

<body>
    <?= $this->renderSection('content') ?>
</body>
<!-- <footer>
    <div class="footer-container bg-black py-3 mt-5">
        <h4>Footer by &copy;WahyuTc</h4>
        <code>build using bootstrap 5 on 19 Agust 2023</code>
    </div>
</footer> -->

</html>