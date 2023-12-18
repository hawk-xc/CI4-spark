<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<body class="">
    <section name="ticket" class="max-sm:textt-sm max-sm:mt-2">
        <div class="flex flex-row box-border justify-between px-3 py-4 bg-white rounded-lg shadow-sm align-middle items-center">
            <!-- this is filter toolbar -->
            <!-- search box -->
            <div>
                <form action="" method="get">
                    <input type="text" name="search" id="search" class="p-2 border border-sky-200 rounded-md placeholder:text-teal-600 my-2" placeholder="cari ticket disini...">
                    <button type="submit" class="px-3 py-2 bg-sky-200 font-semibold text-slate-500 rounded-md">
                        cari
                    </button>
                </form>
            </div>
            <a href="<?= route_to('ticket/new') ?>" class="max-sm:flex flex-row md:hidden lg:hidden">
                <span class="py-1 px-1 bg-blue-300 rounded-lg text-white hover:bg-blue-400 cursor-pointer max-sm:text-[10px] h-8 w-16 flex justify-center align-middle items-center gap-1"><i class="ri-add-circle-fill"></i> add new</span>
            </a>

            <!-- add new button -->
            <div class="flex flex-row align-middle items-center gap-5 max-sm:hidden">
                <?= $pager->links('ticket', 'default_new') ?>
                <a href="<?= route_to('ticket/new') ?>" class="flex flex-row">
                    <span class="p-2 bg-blue-300 rounded-lg text-white hover:bg-blue-400 cursor-pointer"><i class="ri-add-circle-fill max-sm:text-sm"></i> add new</span>
                </a>
            </div>
        </div>
        <div class="bg-white p-2 rounded-md shadow-sm mt-3 md:hidden lg:hidden max-sm:flex text-slate-700">
            <i class="ri-filter-line"></i> filter
        </div>
        <div name="sideback" id="sideback" class="flex max-sm:flex-col md:flex-row lg:flex-row max-w-full box-border gap-3 mt-3 md:h-96 lg:h-96 max-sm:h-[47rem]">
            <div class="w-full flex flex-col overflow-y-scroll gap-3 md:h-[29rem] max-sm:h-[47rem] max-sm:text-xs relative">
                <!-- ticket section -->
                <!-- cek apakah ada flash data -->

                <?php if (session()->getFlashdata('message')) { ?>
                    <div id="messageBox" class="duration-500 transition-all ease-out my-2 p-2 bg-blue-300 ring-1 ring-blue-100 rounded-md flex justify-between">
                        <span class="flex flex-row text-white"><span><i class="ri-information-line"></i> <?= session()->getFlashdata('message') ?></span></span> <i class="ri-close-fill font-bold hover:text-red-400 text-white" id="closeButton"></i>
                    </div>
                <?php } ?>


                <?php $n = 0; ?>
                <?php foreach ($request as $req) { ?>
                    <!-- ticket -->
                    <a href="<?= base_url('ticket/') . base64_encode($request[$n]['ticket_id']) . "/" . base64_encode($request[$n]['contact_id']) ?>">
                        <div class="container max-w-full flex justify-center align-middle items-center flex-col gap-2">
                            <div class="hover:shadow-sm duration-150 transition-all cursor-pointer px-2 py-3 bg-white border border-sky-300 flex flex-row rounded-md max-w-full w-full justify-between items-center">
                                <div class="flex flex-row items-center gap-3 px-3">
                                    <span class="p-2 h-9 aspect-square bg-blue-200 flex justify-center align-middle items-center rounded-md"><?= str_split(strtoupper($request[$n]['name']))[0] ?></span>
                                    <div class="flex flex-col">
                                        <span><span class="font-bold text-slate-500">#<?= $request[$n]['ticket_id'] ?> </span> <?= $request[$n]['subject'] ?></span>
                                        <span class="text-[13px] max-sm:text-[8px]"><i class="ri-history-line"></i> <?= $setdatetime[$n] ?> | <i class="ri-phone-find-line"></i> <?= $request[$n]['name'] ?> / <?= $request[$n]['phone'] ?></span>
                                    </div>
                                </div>
                                <span class="px-3 <?= $request[$n]['status'] == 'close' ? 'bg-green-100' : 'bg-blue-100' ?> p-1 rounded-md mr-3"><?= $request[$n]['status'] ?></span>
                            </div>
                        </div>
                    </a>
                    <?php $n++; ?>
                <?php } ?>

                <div class="<?= $request ? 'hidden' : ' ' ?> flex flex-col max-h-full text-slate-500 h-full justify-center align-middle items-center">
                    <span><i class="ri-archive-2-fill text-6xl"></i></span>
                    <span>list ticket kosong...</span>
                </div>
            </div>
            <div class="w-1/3 max-sm:flex max-sm:flex-row max-sm:items-center max-sm:w-full">
                <div class="flex flex-row gap-2 justify-between max-sm:hidden">
                    <div class="bg-white p-3 shadow-sm rounded-lg flex flex-row gap-2 box-border items-center">
                        <span><i class="ri-coupon-2-fill text-4xl text-yellow-500"></i></span>
                        <span class="flex flex-col -space-y-2 text-slate-600">
                            <span class="text-[10px]">open ticket</span>
                            <span class="text-2xl font-extrabold"><?= $open_ticket ? $open_ticket : '0' ?></span>
                        </span>
                    </div>
                    <div class="bg-white p-3 shadow-sm rounded-lg flex flex-row gap-2 box-border items-center">
                        <span><i class="ri-coupon-3-fill text-4xl text-yellow-500"></i></span>
                        <span class="flex flex-col -space-y-2 text-slate-600">
                            <span class="text-[10px]">close ticket</span>
                            <span class="text-2xl font-extrabold"><?= $close_ticket ? $close_ticket : '0' ?></span>
                        </span>
                    </div>
                </div>
                <!-- filter -->
                <div class="h-full bg-white shadow-sm mt-3 rounded-lg p-3 box-border relative flex flex-col gap-3 max-sm:hidden">
                    <span class="text-slate-600 uppercase">filter</span>
                    <form action="" method="get" class="flex md:flex-col max-sm:flex-row gap-3 max-sm:max-w-full max-sm:w-full">
                        <select name="count" class="block w-full px-4 py-2 border rounded-md bg-white text-gray-800 focus:outline-none focus:border-blue-500">
                            <option value="5" <?= (old('count') === '5') ? 'selected' : '' ?>>5 showlist</option>
                            <option value="10" <?= (old('count') === '10') ? 'selected' : '' ?>>10 showlist</option>
                            <option value="25" <?= (old('count') === '25') ? 'selected' : '' ?>>25 showlist</option>
                            <option value="50" <?= (old('count') === '50') ? 'selected' : '' ?>>50 showlist</option>
                            <option value="100" <?= (old('count') === '100') ? 'selected' : '' ?>>100 showlist</option>
                        </select>
                        <select name="type" class="block w-full px-4 py-2 border rounded-md bg-white text-gray-800 focus:outline-none focus:border-blue-500">
                            <option value="mt" <?= (old('type') === 'mt') ? 'selected' : '' ?>>Perbaikan</option>
                            <option value="new" <?= (old('type') === 'new') ? 'selected' : '' ?>>Installasi baru</option>
                        </select>
                        <select name="order_by" class="block w-full px-4 py-2 border rounded-md bg-white text-gray-800 focus:outline-none focus:border-blue-500">
                            <option value="name" <?= (old('order_by') === 'name') ? 'selected' : '' ?>>berdasarkan nama</option>
                            <option value="subject" <?= (old('order_by') === 'subject') ? 'selected' : '' ?>>berdasarkan subject</option>
                            <option value="ticket.created_at" <?= (old('order_by') === 'created_at') ? 'selected' : '' ?>>berdasarkan tanggal</option>
                        </select>
                        <select name="status" class="block w-full px-4 py-2 border rounded-md bg-white text-gray-800 focus:outline-none focus:border-blue-500">
                            <option value="open" <?= (old('status') === 'open') ? 'selected' : '' ?>>open</option>
                            <option value="close" <?= (old('status') === 'close') ? 'selected' : '' ?>>close</option>
                        </select>
                        <button type="submit" class="px-2 py-2 bg-sky-300 font-semibold rounded-md shadow-sm text-white">aplikasikan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<?= $this->endSection(); ?>

</html>