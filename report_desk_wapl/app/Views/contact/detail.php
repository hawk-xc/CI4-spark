<?= $this->extend('particle/dashboardParticle'); ?>
<?= $this->section('content'); ?>

<section name="contactDetail" class="p-5 bg-white shadow-sm rounded-lg">
    <div class="w-full mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Detail Kontak</h2>

        <div class="mb-4">
            <label class="block text-gray-600 text-xl">Nama Lengkap:</label>
            <p><?= $contact['name']; ?></p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-600 text-xl">Email:</label>
            <p><?= $contact['email']; ?></p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-600 text-xl">No. Telepon:</label>
            <p><?= $contact['phone']; ?></p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-600 text-xl">Alamat:</label>
            <p><?= $contact['address']; ?></p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-600 text-xl">Pesan:</label>
            <p><?= $contact['description']; ?></p>
        </div>

        <!-- Tambahkan bagian lain sesuai dengan informasi kontak yang perlu ditampilkan -->

    </div>
</section>

<footer class="bg-gray-200 py-4">
    <div class="container mx-auto text-center text-gray-600">
        &copy; <?= date('Y') ?> Aplikasi Report Desk
    </div>
</footer>

<?= $this->endSection(); ?>
