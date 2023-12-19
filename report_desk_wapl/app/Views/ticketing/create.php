<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>
<section name="newTicket" class="p-5 bg-white shadow-sm rounded-lg">
    <div class="w-full flex flex-col overflow-y-scroll gap-3 md:h-[29rem] max-sm:order-2 max-sm:h-[47rem] max-sm:text-md custom-scrollbar-hidden">
        <form action="<?= base_url('ticket/create') ?>" method="post" enctype="multipart/form-data" class="">
            <?= csrf_field(); ?>
            <span>
                <?php csrf_field() ?>
            </span>
            <span class="flex flex-col box-border gap-3">
                <label for="contact">Kontak *</label>
                <div class="relative inline-block text-left">
                    <select class="inputForm" name="contact_id">
                        <?php
                        $i = 0;
                        foreach ($contact as $row) { ?>
                            <option value="<?= $contact[$i]['contact_id'] ?>" <?= (old('contact_id') === $contact[$i]['contact_id']) ? 'selected' : '' ?>><?= $contact[$i]['name'] ?></option>
                        <?php
                            $i++;
                        } ?>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <span class="flex justify-end">
                    <a class="text-xs text-blue-500 hover:underline" href="<?= base_url('form'); ?>">Tambah kontak baru</a>
                </span>
                <label for="subject">Subjek *</label>
                <input type="text" placeholder="Subject" id="subject" class="inputForm" name="subject" value="<?= old('subject'); ?>">
                <?php if (session()->getFlashdata('error') && array_key_exists('subject', session()->getFlashdata('error'))) : ?>
                    <span class="text-sm text-red-500">
                        <!-- this is validation message -->
                        <i class="ri-corner-left-up-line"></i> <?= session()->getFlashdata('error')['subject'] ?>
                    </span>
                <?php endif; ?>
                <label for="contact">Type *</label>
                <div class="relative inline-block text-left">
                    <select class="inputForm" name="type">
                        <option value="new" <?= (old('type') === 'new') ? 'selected' : '' ?>>NEW INSTALLATION</option>
                        <option value="mt" <?= (old('type') === 'mt') ? 'selected' : '' ?>>MAINTENANCE</option>
                    </select>
                </div>

                <label for="status">Status *</label>
                <div class="relative inline-block text-left">
                    <select class="inputForm" name="status">
                        <option value="open" <?= (old('status') === 'open') ? 'selected' : '' ?>>open</option>
                        <option value="close" <?= (old('status') === 'close') ? 'selected' : '' ?>>close</option>
                    </select>
                </div>

                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="opsional" class="inputForm p-2"><?= old('description'); ?></textarea>

                <div class="mb-3">
                    <label for="formFileSm" class="mb-2 inline-block text-slate-800">Unggah dokumentasi</label>
                    <input name="media" class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-xs font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none" id="formFileSm" type="file" />
                    <?php if (session()->getFlashdata('error') && array_key_exists('media', session()->getFlashdata('error'))) : ?>
                        <span class="text-sm text-red-500">
                            <!-- this is validation message -->
                            <i class="ri-corner-left-up-line"></i> <?= session()->getFlashdata('error')['media'] ?>
                        </span>
                    <?php endif; ?>
                </div>

                <span class="flex flex-col max-sm:mt-10">
                    <div class="flex justify-end gap-3">
                        <a href="../ticket" class="border border-slate-400 py-1 px-3 rounded-md hover:bg-slate-100">
                            cancel
                        </a>

                        <button class="bg-blue-200 border border-slate-400 py-1 px-3 rounded-md hover:bg-blue-300">
                            simpan
                        </button>
                    </div>
                </span>
            </span>
        </form>
    </div>
</section>
<?= $this->endSection() ?>