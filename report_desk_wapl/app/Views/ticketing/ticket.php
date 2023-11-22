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
    <section name="ticket" class="max-sm:textt-sm">
        <div class="flex flex-row box-border justify-between px-3 py-4 bg-white rounded-lg shadow-sm align-middle items-center">
            <!-- this is filter toolbar -->
            <span class="flex flex-row">sort by :
                <form action="">
                    <label for="lang">
                        <select name="order_by" id="lang" class="focus:outline-none active:outline-none">
                            <option class="m-10 p-10" value="date">date created</option>
                            <option class="m-10 p-10" value="name">by name</option>
                            <option class="m-10 p-10" value="status">by status</option>
                        </select>
                    </label>
                </form>
            </span>

            <!-- add new button -->
            <div class="flex flex-row align-middle items-center gap-5">
                <?= $pager->links('ticket', 'default_new') ?>
                <a href="<?= route_to('ticket/new') ?>" class="flex flex-row">
                    <span class="p-2 bg-blue-300 rounded-lg text-white hover:bg-blue-400 cursor-pointer"><i class="ri-add-circle-fill max-sm:text-sm"></i> add new</span>
                </a>
            </div>
        </div>
        <div name="sideback" id="sideback" class="flex max-sm:flex-col md:flex-row lg:flex-row max-w-full box-border gap-3 mt-3 md:h-96 lg:h-96 max-sm:h-[47rem]">
            <div class="w-full flex flex-col overflow-y-scroll gap-3 md:h-[29rem] max-sm:order-2 max-sm:h-[47rem] max-sm:text-xs relative">
                <!-- ticket section -->
                <!-- cek apakah ada flash data -->

                <?php if (session()->getFlashdata('message')) { ?>
                    <div id="messageBox" class="duration-500 transition-all ease-out my-2 p-2 bg-blue-300 ring-1 ring-blue-100 rounded-md flex justify-between">
                        <span class="flex flex-row text-white"><span><i class="ri-information-line"></i> <?= session()->getFlashdata('message') ?></span></span> <i class="ri-close-fill font-bold hover:text-red-400 text-white" id="closeButton"></i>
                    </div>
                <?php } ?>


                <?php $n = 0; ?>
                <?php foreach ($request as $req) { ?>
                    <a href="ticket/<?= $request[$n]['ticket_id'] ?>">
                        <div class="ticketCard <?= $request[$n]['status'] == 'close' ? 'bg-teal-200 hover:bg-teal-300' : '' ?> <?= $request ? ' ' : 'hidden' ?>">
                            <span class="w-11 h-11 flex justify-center align-middle items-center bg-sky-100 text-slate-700 rounded-lg shadow-sm">
                                <?= str_split(strtoupper($request[$n]['name']))[0] ?>
                            </span>
                            <div class="flex flex-col max-w-full w-full">
                                <span class="flex justify-between max-sm:flex-col gap-2">
                                    <span name="label" class="text-[14px] bg-orange-200 w-10 rounded-lg text-center border border-slate-500">
                                        <?= $request[$n]['status'] ?>
                                    </span>
                                    <span class="text-slate-700"><i class="ri-contacts-book-2-line"></i> <?= $request[$n]['name'] ?> / <?= $request[$n]['phone'] ?></span>
                                </span>
                                <span class="text-slate-600 font-bold text-xl">
                                    <span id="ticketId" class="text-slate-400"># <?= $request[$n]['ticket_id'] ?></span>
                                    <?= $request[$n]['subject'] ?>
                                </span>
                                <span class="text-sm text-slate-500"><i class="ri-user-star-line"></i> Created by denny <i class="ri-bubble-chart-line"></i> <?= $setdatetime[$n] ?></span>
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
            <div class="w-1/3 max-sm:order-1 max-sm:flex max-sm:flex-row max-sm:items-center">
                <div class="flex flex-row justify-between max-sm:hidden">
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
                <div class="h-full bg-white shadow-sm mt-3 rounded-lg p-3 box-border relative flex flex-col">
                    <span class="text-slate-600 uppercase">filter</span>
                </div>
            </div>
        </div>
    </section>
</body>
<?= $this->endSection(); ?>

</html>