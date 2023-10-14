<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<body class="">
    <section name="ticket" class="">
        <div class="flex flex-row box-border justify-between px-3 py-4 bg-white rounded-lg shadow-sm">
            <!-- this is filter toolbar -->
            <span>sort by : date created</span>
            <div>
                <span class="p-2 bg-blue-300 rounded-lg text-white hover:bg-blue-400 cursor-pointer"><i class="ri-add-circle-fill max-sm:text-sm"></i> add new</span>
                <span>1/2</span>
            </div>
        </div>
        <div name="sideback" id="sideback" class="flex flex-row max-w-full box-border gap-3 mt-3 h-96">
            <div class="w-full flex flex-col overflow-y-scroll gap-3 h-[29rem]">
                <div class="w-full bg-gradient-to-r from-cyan-500 to-blue-500 text-white shadow-sm p-7 rounded-lg">
                    <span class="w-7 aspect-square flex justify-center align-middle items-center bg-white text-slate-700 rounded-lg shadow-sm">
                        <i class="ri-flag-line"></i>
                    </span>
                </div>
            </div>
            <div class="w-1/3">
                <div class="flex flex-row justify-between">
                    <div class="bg-white p-3 shadow-sm rounded-lg flex flex-row gap-2 box-border items-center">
                        <span><i class="ri-coupon-2-fill text-4xl text-yellow-500"></i></span>
                        <span class="flex flex-col -space-y-2 text-slate-600">
                            <span class="text-[10px]">open ticket</span>
                            <span class="text-2xl font-extrabold">23</span>
                        </span>
                    </div>
                    <div class="bg-white p-3 shadow-sm rounded-lg flex flex-row gap-2 box-border items-center">
                        <span><i class="ri-coupon-3-fill text-4xl text-yellow-500"></i></span>
                        <span class="flex flex-col -space-y-2 text-slate-600">
                            <span class="text-[10px]">close ticket</span>
                            <span class="text-2xl font-extrabold">129</span>
                        </span>
                    </div>
                </div>
                <div class="h-full bg-white shadow-sm mt-3 rounded-lg p-3 box-border relative flex flex-col">
                    <span class="text-slate-600 uppercase">filter</span>
                </div>
            </div>
        </div>
    </section>

</body>
<?= $this->endSection(); ?>

</html>