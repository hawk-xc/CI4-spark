<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>
<div class="p-2">
    <?= d($ticket) ?>
</div>
<?= $this->endSection() ?>