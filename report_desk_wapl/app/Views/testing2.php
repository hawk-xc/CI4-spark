<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>
<div class="p-10">
    <?php if (session()->getFlashdata('message')) { ?>
        <div id="messageBox" class="p-2 bg-orange-200 border border-slate-600 rounded-md flex justify-between">
            <span class="flex flex-row"><span><i class="ri-information-fill"></i> <?= session()->getFlashdata('message') ?></span></span> <i class="ri-close-fill font-bold hover:text-red-400" id="closeButton"></i>
        </div>
    <?php } ?>
</div>
<?= $this->endSection() ?>