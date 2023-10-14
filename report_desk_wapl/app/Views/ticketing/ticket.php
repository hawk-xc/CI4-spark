<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<body class="">
    <section name="ticket" class="">
        <div class="flex flex-row box-border justify-between px-3 py-4 bg-teal-100 rounded-lg">
            <!-- this is filter toolbar -->
            <span>sort by : date created</span>
            <div>
                <span class="p-2" style="background-image: url('asset/gradasi.png'); background-size: cover;">add new</span>
                <span>1/2</span>
            </div>
        </div>
        <div>
            <div>this is ticket session</div>
            <div>this is filter</div>
        </div>
    </section>

</body>
<?= $this->endSection(); ?>

</html>