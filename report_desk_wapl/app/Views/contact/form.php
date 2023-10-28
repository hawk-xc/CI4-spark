<?= $this->extend('particle/dashboardParticle'); ?>
<?= $this->section('content'); ?>

<?php
// if ((session()->getFlashdata('error'))) {
//     echo "<ul>";
//     foreach (session()->getFlashdata('error') as $val) {
//         echo "<li>$val</li>";
//     };
//     echo "</ul>";
// }
if ((session()->getFlashdata("success"))) {
    echo "<h1>" . session()->getFlashdata('success') . "</h1>";
}
?>

<!-- <header class="bg-slate-800 text-white py-4">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-semibold">Contact Report Desk</h1>
        <p class="text-lg">Kami siap melayani Anda!</p>
    </div>
</header> -->

<section class="container mx-auto py-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Formulir Kontak</h2>
        <form action="" method="post">
            <div class="mb-4">
                <label for="name" class="block text-gray-600 text-xl">Nama Lengkap <span class="text-red-600">*</span></label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" value="<?= old('name'); ?>">
                <div>
                    <?php if (session()->getFlashdata('error') && array_key_exists('name', session()->getFlashdata('error'))) : ?>
                        <p class="text-sm text-red-700 italic"><?= '<i class="ri-error-warning-line m-3"></i>' . session()->getFlashdata('error')['name'] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-xl">Email <span class="text-red-600">*</label>
                <input type="text" id="email" name="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" value="<?= old('email'); ?>">
                <?php if (session()->getFlashdata('error') && array_key_exists('email', session()->getFlashdata('error'))) : ?>
                    <p class="text-sm text-red-700 italic"><?= '<i class="ri-error-warning-line m-3"></i>' . session()->getFlashdata('error')['email'] ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-4">
                <label for="nomor" class="block text-gray-600 text-xl">No. Telepon <span class="text-red-600">*</label>
                <input type="text" id="nomor" name="nomor" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" value="<?= old('nomor'); ?>">
                <?php if (session()->getFlashdata('error') && array_key_exists('nomor', session()->getFlashdata('error'))) : ?>
                    <p class="text-sm text-red-700 italic"><?= '<i class="ri-error-warning-line m-3"></i>' . session()->getFlashdata('error')['nomor'] ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-4">
                <label for="message" class="block text-gray-600 text-xl">Pesan <span class="text-red-600">*</label>
                <textarea id="message" name="message" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" rows="4"><?= old('message'); ?></textarea>
                <?php if (session()->getFlashdata('error') && array_key_exists('message', session()->getFlashdata('error'))) : ?>
                    <p class="text-sm text-red-700 italic"><?= '<i class="ri-error-warning-line m-3"></i>' . session()->getFlashdata('error')['message'] ?></p>
                <?php endif; ?>
            </div>
            <input type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
        </form>
    </div>
</section>

<footer class="bg-gray-200 py-4">
    <div class="container mx-auto text-center text-gray-600">
        &copy; <?= date('Y') ?> Aplikasi Report Desk
    </div>
</footer>

<?= $this->endSection(); ?>