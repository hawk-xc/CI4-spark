<?= $this->extend('particle/dashboardParticle'); ?>
<?= $this->section('content'); ?>





<!-- <header class="bg-slate-800 text-white py-4">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-semibold">Contact Report Desk</h1>
        <p class="text-lg">Kami siap melayani Anda!</p>
    </div>
</header> -->



<section name="newTicket" class="p-5 bg-white shadow-sm rounded-lg">
    <div class="bg-white p-3 rounded-md flex flex-row gap-4 box-border justify-between">
        <span class="rounded-md flex flex-row gap-4 box-border max-sm:text-[10px]">
            <a href="<?= base_url('contact') ?>" class="bg-blue-200 px-2 py-1 rounded-md border border-slate-500 cursor-pointer hover:brightness-105 duration-150 flex justify-center align-middle items-center gap-1 max-sm:font-semibold text-slate-600"><i class="ri-arrow-go-back-fill"></i> goback</a>
        </span>
    </div>
    <div class="w-full flex flex-col overflow-y-scroll gap-3 md:h-[29rem] max-sm:order-2 max-sm:h-[47rem] max-sm:text-md custom-scrollbar-hidden">
        <div class="max-w-full w-full mx-auto bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Formulir Edit Kontak</h2>

            <form action="/form/update/<?= $contact['contact_id']; ?>" method="post">

                <?= csrf_field(); ?>
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-xl">Nama Lengkap <span class="text-red-600">*</span></label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" value="<?= (old('name')) ? old('name') : $contact['name'] ?>">
                    <div>
                        <?php if (session()->getFlashdata('error') && array_key_exists('name', session()->getFlashdata('error'))) : ?>
                            <p class="text-sm text-red-700 italic"><?= '<i class="ri-error-warning-line m-3"></i>' . session()->getFlashdata('error')['name'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-600 text-xl">Email <span class="text-red-600">*</label>
                    <input type="text" id="email" name="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" value="<?= (old('email')) ? old('email') : $contact['email'] ?>">
                    <?php if (session()->getFlashdata('error') && array_key_exists('email', session()->getFlashdata('error'))) : ?>
                        <p class="text-sm text-red-700 italic"><?= '<i class="ri-error-warning-line m-3"></i>' . session()->getFlashdata('error')['email'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-gray-600 text-xl">No. Telepon <span class="text-red-600">*</label>
                    <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" value="<?= (old('phone')) ? old('phone') : $contact['phone'] ?>">
                    <?php if (session()->getFlashdata('error') && array_key_exists('phone', session()->getFlashdata('error'))) : ?>
                        <p class="text-sm text-red-700 italic"><?= '<i class="ri-error-warning-line m-3"></i>' . session()->getFlashdata('error')['phone'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-4">
                    <label for="address" class="block text-gray-600 text-xl">Alamat <span class="text-red-600">*</label>
                    <input type="text" id="address" name="address" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" value="<?= (old('phone')) ? old('phone') : $contact['address'] ?>">
                    <?php if (session()->getFlashdata('error') && array_key_exists('address', session()->getFlashdata('error'))) : ?>
                        <p class="text-sm text-red-700 italic"><?= '<i class="ri-error-warning-line m-3"></i>' . session()->getFlashdata('error')['address'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-600 text-xl">Pesan <span class="text-red-600">*</label>
                    <input type="text" id="description" name="description" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" rows="4" value="<?= (old('description')) ? old('description') : $contact['description'] ?>"></input>
                    <?php if (session()->getFlashdata('error') && array_key_exists('description', session()->getFlashdata('error'))) : ?>
                        <p class="text-sm text-red-700 italic"><?= '<i class="ri-error-warning-line m-3"></i>' . session()->getFlashdata('error')['description'] ?></p>
                    <?php endif; ?>
                </div>
                <input type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            </form>
        </div>
    </div>
</section>

<footer class="bg-gray-200 py-4">
    <div class="container mx-auto text-center text-gray-600">
        &copy; <?= date('Y') ?> Aplikasi Report Desk
    </div>
</footer>

<?= $this->endSection(); ?>