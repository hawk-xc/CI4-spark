<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<div>
    <form action="./testing2" method="get" enctype="multipart/form-data">
        <input type="text" name="namespace" placeholder="namespace">
        <input type="file" name="media">
        <button type="submit">kirim</button>
    </form>
</div>

<?= $this->endSection() ?>