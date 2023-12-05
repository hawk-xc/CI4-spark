<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<div class="container max-w-full flex justify-center align-middle items-center flex-col gap-2">
    <button id="atractiveButton" class="max-w-full bg-sky-200 flex w-full items-center align-middle rounded-md p-2 text-slate-700 gap-2 hover:bg-sky-300 active:bg-sky-400"><i class="ri-chat-new-line"></i> klik untuk menambahkan pesan baru</button>

    <!-- add comment new area -->
    <div id="dialogBox" class="w-full text-slate-800 flex flex-col max-w-full gap-2 hidden">
        <textarea class="rounded-md bg-slate-100 border border-slate-400 p-3 w-full" placeholder="add some description!"></textarea>
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

        <button id="sendData" class="bg-sky-200 p-2 rounded-md">
            <i class="ri-menu-add-line"></i> update
        </button>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#atractiveButton').on('click', function() {
            $('#dialogBox').slideToggle()
        })
    })
</script>

<?= $this->endSection() ?>