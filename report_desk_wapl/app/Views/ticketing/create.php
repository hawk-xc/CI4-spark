<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>
<section name="newTicket" class="p-5 bg-white shadow-sm rounded-lg">
    <div class="w-full flex flex-col overflow-y-scroll gap-3 md:h-[29rem] max-sm:order-2 max-sm:h-[47rem] max-sm:text-md custom-scrollbar-hidden">
        <form action="create" method="post" class="">
            <span></span>
            <span class="flex flex-col box-border gap-3">
                <label for="contact">Kontak *</label>
                <div class="relative inline-block text-left">
                    <select class="inputForm" name="contact_name">
                        <?php
                        $i = 0;
                        foreach ($contact as $row) { ?>
                            <option value="<?= $contact[$i]['contact_id'] ?>"><?= $contact[$i]['name'] ?></option>
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
                    <a class="text-xs text-blue-500 hover:underline" href="#">Tambah kontak baru</a>
                </span>
                <label for="subject">Subjek *</label>
                <input type="text" placeholder="Subject" id="subject" class="inputForm" name="subject">

                <label for="contact">Type *</label>
                <div class="relative inline-block text-left">
                    <select class="inputForm" name="type">
                        <option value="new">NEW INSTALLATION</option>
                        <option value="mt">MAINTENANCE</option>
                    </select>
                </div>

                <label for="status">Status *</label>
                <div class="relative inline-block text-left">
                    <select class="inputForm" name="status">
                        <option value="open">open</option>
                        <option value="close">close</option>
                    </select>
                </div>

                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="opsional" class="inputForm p-2"></textarea>

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