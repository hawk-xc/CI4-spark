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
    <div class="container flex gap-3 flex-col">
        <h2 class="p-2 bg-slate-800 rounded-md shadow-sm text-white"><i class="ri-user-line"></i> edit pengguna <span class="font-bold"><?= $users['0']['username'] ?></span></h2>

        <div class="container bg-white shadow-sm rounded-md p-2">
            <span>sjsj</span>
        </div>
    </div>
</body>

<?= $this->endSection(); ?>

</html>