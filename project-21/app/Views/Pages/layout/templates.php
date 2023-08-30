<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 JavaScript and Popper.js CDN links -->
    <!-- Bootstrap JavaScript and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js" integrity="sha384-pzjwZ5A3TPgn4eR+973STvmA5VaVd9mI2iM+MkzJxA6n/a2DeE2fWFMXNlT4Wpb" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oNfFsBR+rvoH4BZorMKoFVjIy8M+fxl0sVcUrC3G81L1Lz+J+GGAhIbb8d1xWW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
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