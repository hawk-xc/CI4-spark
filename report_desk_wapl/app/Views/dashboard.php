<?= $this->extend('particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<div class="flex flex-col p-2 gap-4 md:h-[40rem] max-sm:h-[63rem]">
    <div class="flex bg-white rounded-md shadow-sm p-3 h-full">
        <span class="text-slate-500 font-bold text-lg">
            panel utama
        </span>
    </div>
    <div class="flex md:flex-row max-sm:flex-col gap-4 h-full">
        <div class="flex md:bg-white max-sm:bg-blue-200 sm:bg-green-300 w-full rounded-md shadow-sm p-3 h-[12rem]">
            <span class="text-slate-500 font-bold text-lg">
                open ticket
            </span>
        </div>
        <div class="flex bg-white w-full rounded-md shadow-sm p-3 h-[12rem]">
            <span class="text-slate-500 font-bold text-lg">
                ticket done
            </span>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>