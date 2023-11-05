<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>
<div class="flex bg-blue-100 p-10 ">
    <span>
        <?= dd($setdatetime) ?>
    </span>
</div>
<?= $this->endSection() ?>