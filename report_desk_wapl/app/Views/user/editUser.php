<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<body class="">
    <div class="container bg-gradient-to-tr from-blue-600 rounded-md to-indigo-400 flex gap-3 flex-col p-5 h-40">
        <h2 class="mx-auto text-white flex flex-col justify-center items-center">
            <span class="font-bold text-xl">
                <?= $users['username'] ?>
            </span>
            <span class="text-sm">
                <?= $users['email'] ?>
            </span>
        </h2>
        <img src="<?= base_url($users['media_profile']) ?>" alt="gambar tidak ada" class="w-36 rounded-full mx-auto shadow-sm border border-white">
    </div>


</body>

<?= $this->endSection(); ?>

</html>