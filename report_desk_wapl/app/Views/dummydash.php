<?= $this->extend('particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>
<div class="bg-slate-300 pl-56 pr-4 ">
    <div class="grid grid-cols-2 gap-32 pt-8 text-white">
        <div class="bg-slate-800 p-20 rounded-md h-44 flex items-center justify-center">
            <div class="text-2xl font-extrabold"><a href="#">statistik installasi</a></div>
        </div>
        <div class="bg-slate-800 p-4 rounded-md h-44 flex items-center justify-center">
            <div class="text-2xl font-extrabold"><a href="#">statistik maintenance</a></div>
        </div>
        <div class="bg-slate-800 p-4 rounded-md h-44 flex items-center justify-center">
            <div class="text-2xl font-extrabold"><a href="#">customer</a></div>
        </div>
        <div class="bg-slate-800 p-4 rounded-md h-44 flex items-center justify-center">
            <div class="text-2xl font-extrabold"><a href="#">total ticket</a></div>
        </div>
        <?= $this->include('layout/footer'); ?>
    </div>
</div>
<?= $this->endSection('content'); ?>