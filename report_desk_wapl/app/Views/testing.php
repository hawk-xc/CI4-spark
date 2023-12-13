<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<div class="container max-w-full flex justify-center align-middle items-center flex-col gap-2">
    <div class="hover:shadow-sm duration-150 transition-all cursor-pointer px-2 py-3 bg-white border border-sky-300 flex flex-row rounded-md max-w-full w-full justify-between items-center">
        <div class="flex flex-row items-center gap-3 px-3">
            <span class="p-2 h-9 aspect-square bg-blue-200 flex justify-center align-middle items-center rounded-md">W</span>
            <div class="flex flex-col">
                <span><span class="font-bold text-slate-500">#1919</span> NEW INSTALL</span>
                <span class="text-[13px]"><i class="ri-history-line"></i> create one year ago | <i class="ri-phone-find-line"></i> wahyutri +01828</span>
            </div>
        </div>
        <span class="px-3 bg-blue-100 p-1 rounded-md mr-3">open</span>
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