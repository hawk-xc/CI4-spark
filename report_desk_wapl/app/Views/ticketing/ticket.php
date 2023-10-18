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
            <div class="">
                <span class="p-2 bg-blue-300 rounded-lg text-white hover:bg-blue-400 cursor-pointer"><i class="ri-add-circle-fill max-sm:text-sm"></i> add new</span>
                <span class="ml-2">1 - 10 of 192</span>
            </div>
        </div>
        <div name="sideback" id="sideback" class="flex flex-row max-w-full box-border gap-3 mt-3 h-96">
            <div class="w-full flex flex-col overflow-y-scroll gap-3 h-[29rem]">

                <!-- ticket section -->
                <div class="ticketCard">
                    <span class="w-11 h-11 flex justify-center align-middle items-center bg-sky-100 text-slate-700 rounded-lg shadow-sm">
                        R
                    </span>
                    <div class="flex flex-col max-w-full w-full">
                        <span class="flex justify-between">
                            <span name="label" class="text-[14px] bg-orange-200 w-10 rounded-lg text-center border border-slate-500">open</span>
                            <span class="text-slate-700"><i class="ri-contacts-book-2-line"></i> Rizki Anto / +6282129387811</span>
                        </span>
                        <span class="text-slate-600 font-bold text-xl">NEW INSTALLATION <span id="ticketId" class="text-slate-400">#1</span></span>
                        <span class="text-sm text-slate-500"><i class="ri-user-star-line"></i> Created by denny <i class="ri-bubble-chart-line"></i> 14 menit yang lalu</span>
                    </div>
                </div>
                <div class="ticketCard">
                    <span class="w-11 h-11 flex justify-center align-middle items-center bg-sky-100 text-slate-700 rounded-lg shadow-sm">
                        M
                    </span>
                    <div class="flex flex-col max-w-full w-full">
                        <span class="flex justify-between">
                            <span name="label" class="text-[14px] bg-orange-200 w-10 rounded-lg text-center border border-slate-500">open</span>
                            <span class="text-slate-700"><i class="ri-contacts-book-2-line"></i> Muhammad Mahmud / +6234511231121</span>
                        </span>
                        <span class="text-slate-600 font-bold text-xl">NEW INSTALLATION <span id="ticketId" class="text-slate-400">#2</span></span>
                        <span class="text-sm text-slate-500"><i class="ri-user-star-line"></i> Created by denny <i class="ri-bubble-chart-line"></i> 34 menit yang lalu</span>
                    </div>
                </div>
                <div class="ticketCardClose ">
                    <span class="w-11 h-11 flex justify-center align-middle items-center bg-sky-100 text-slate-700 rounded-lg shadow-sm">
                        B
                    </span>
                    <div class="flex flex-col max-w-full w-full ">
                        <span class="flex justify-between">
                            <span name="label" class="text-[14px] bg-orange-200 w-10 rounded-lg text-center border border-slate-500">close</span>
                            <span class="text-slate-700"><i class="ri-contacts-book-2-line"></i> Bayu Tri Kusuma / +6234567451121</span>
                        </span>
                        <span class="text-slate-600 font-bold text-xl">NEW INSTALLATION <span id="ticketId" class="text-slate-400">#3</span></span>
                        <span class="text-sm text-slate-500"><i class="ri-user-star-line"></i> Created by grace <i class="ri-bubble-chart-line"></i> 39 menit yang lalu</span>
                    </div>
                </div>
                <div class="ticketCard">
                    <span class="w-11 h-11 flex justify-center align-middle items-center bg-sky-100 text-slate-700 rounded-lg shadow-sm">
                        C
                    </span>
                    <div class="flex flex-col max-w-full w-full">
                        <span class="flex justify-between">
                            <span name="label" class="text-[14px] bg-orange-200 w-10 rounded-lg text-center border border-slate-500">open</span>
                            <span class="text-slate-700"><i class="ri-contacts-book-2-line"></i> Candika Putra / +6299877761162</span>
                        </span>
                        <span class="text-slate-600 font-bold text-xl">NEW MAINTENANCE <span id="ticketId" class="text-slate-400">#4</span></span>
                        <span class="text-sm text-slate-500"><i class="ri-user-star-line"></i> Created by grace <i class="ri-bubble-chart-line"></i> 44 menit yang lalu</span>
                    </div>
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