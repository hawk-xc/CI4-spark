<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<select class="block w-full px-4 py-2 border rounded-md bg-white text-gray-800 focus:outline-none focus:border-blue-500">
    <option value="4">User</option>
    <option value="3">Teknisi</option>
    <option value="2">Noc</option>
    <option value="1">Admin</option>
</select>


<?= $this->endSection() ?>