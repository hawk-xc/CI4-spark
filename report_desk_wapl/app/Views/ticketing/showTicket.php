<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>
<?php
function defineMonth($num)
{
    $month = [
        'null',
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember',
    ];

    return $month[intval($num)];
}
?>

<script src="<?= base_url('node_modules/jquery/dist/jquery.min.js') ?>"></script>

<div id="modalBox" class="hidden duration-200 transition-all ease-in absolute inset-0 flex items-center justify-center backdrop-blur-sm z-50 backdrop-brightness-75">
    <div class="bg-white rounded-md w-96 p-5 flex justify-center align-middle items-center flex-col">
        <h2 class="font-bold text-slate-800 text-xl">hapus ticket?</h2>
        <span>hapus ticket <span class="font-bold text-sky-500"><?= $ticket['name'] ?></span>#<?= $ticket['ticket_id'] ?>?</span>
        <!-- msgBox -->
        <div class="p-2 border-l-4 border-red-400 bg-red-100 my-3 w-64 flex flex-col">
            <span class="font-bold bg-red-200 rounded-md p-1"><i class="ri-alert-line"></i> Peringatan</span>
            <span class="text-sm">
                hapus bersifat permanen dan tidak bisa dibackup kembali, apakah anda yakin?
            </span>
        </div>
        <div id="confirmationButton" class="flex justify-between w-64 px-5 mt-3 gap-2">
            <button id="modalBoxCancel" class="py-2 px-5 w-1/2 bg-sky-100 active:bg-sky-200 rounded-md border border-sky-300">
                tidak
            </button>
            <a href="<?= base_url('delete/') . $ticket['ticket_id'] ?>" id="modalBoxDelete" class="flex items-center align-middle justify-center py-2 px-5 w-1/2 bg-red-100 active:bg-red-200 rounded-md border border-red-300 cursor-pointer">
                hapus
            </a>
        </div>
    </div>
</div>

<div class="p-1">
    <div class="bg-white p-3 rounded-md flex flex-row gap-4 box-border justify-between">
        <span class="rounded-md flex flex-row gap-4 box-border max-sm:text-[10px]">
            <a href="<?= base_url('ticket') ?>" class="bg-blue-200 px-2 py-1 rounded-md border border-slate-500 cursor-pointer hover:brightness-105 duration-150 flex justify-center align-middle items-center gap-1 max-sm:font-semibold text-white"><i class="ri-arrow-go-back-fill"></i> goback</a>
            <a href="<?= $ticket['status'] == 'close' ? base_url('ticket/open/') . $ticket['ticket_id'] . "/" . $ticket['contact_id'] : base_url('ticket/close/') . $ticket['ticket_id'] . "/" . $ticket['contact_id'] ?>" class="<?= $ticket['status'] == 'close' ? 'bg-blue-200' : 'bg-green-300' ?> px-2 py-1 rounded-md border border-slate-500 cursor-pointer hover:brightness-105 duration-150 flex justify-center align-middle items-center gap-1 max-sm:font-semibold text-white">
                <i class="ri-checkbox-circle-line"></i> <?= $ticket['status'] == 'close' ? 'Open' : 'Close' ?>
            </a>
        </span>
        <button id="deleteButton" class="bg-green-500 hover:bg-green-400 px-2 py-1 focus:bg-red-400 focus:ring focus:ring-red-500 rounded-md border border-slate-500 cursor-pointer hover:brightness-105 duration-150 max-sm:text-[10px] flex justify-center align-middle items-center gap-1 max-sm:font-semibold text-white"><i class="ri-delete-bin-5-line"></i></button>
    </div>
    <?php if (session()->getFlashdata('message')) { ?>
        <div id="messageBox" class="duration-500 transition-all ease-out my-2 p-2 bg-blue-300 ring-1 ring-blue-100 rounded-md flex justify-between">
            <span class="flex flex-row text-white"><span><i class="ri-information-line"></i> <?= session()->getFlashdata('message') ?></span></span> <i class="ri-close-fill font-bold hover:text-red-400 text-white" id="closeButton"></i>
        </div>
    <?php } ?>
    <div class="flex mt-2 max-sm:flex-col md:flex-row lg:flex-row max-w-full w-full gap-2">
        <div class="p-5 bg-white rounded-md shadow-sm flex flex-col w-full md:h-[29rem] overflow-y-scroll">
            <span>
                <span class="text-slate-500 font-extrabold md:text-2xl max-sm:text-md mr-2">#<?= $ticket['ticket_id'] ?></span><span class="md:text-2xl max-sm:text-md max-sm:font-semibold"><?= $ticket['subject'] ?></span>
            </span>
            <span class="text-slate-500 md:text-sm max-sm:text-[10px]">Created by <span class="font-bold">$this->name</span></span>

            <!-- ticket desc -->
            <div id="pembungkus" class="flex flex-row justify-between items-center">
                <div class="mt-6 flex flex-row align-middle items-center">
                    <span class="h-11 aspect-square flex justify-center align-middle items-center bg-sky-100 text-slate-700 rounded-lg shadow-sm">
                        <?= str_split(strtoupper($ticket['name']))[0] ?>
                    </span>
                    <span class="ml-4 flex flex-col">
                        <a href="#" class="flex flex-col">
                            <!-- terhubung ke kontak -->
                            <span class="font-bold max-sm:text-[14px] text-blue-300 hover:underline">
                                <?= $ticket['name'] ?>
                            </span>
                            <span class="text-slate-600 max-sm:text-[10px]">
                                reported via app
                            </span>
                        </a>
                        <span class="max-sm:text-[10px]">Created at <?= $getdatetime ?></span>
                    </span>
                </div>
                <span class="mt-6">
                    <a href="#">
                        <i class="ri-article-line text-3xl text-slate-600 hover:text-slate-700 bg-opacity-0rounded-full"></i>
                    </a>
                </span>
            </div>

            <div class="container mt-4 border border-dashed border-slate-900 rounded-r-lg rounded-bl-lg p-2 text-slate-800 flex flex-col gap-2 max-sm:text-[13px]">
                <?= $description[0]['description'] ?>
                <?php if ($ticket['media']) {  ?>
                    <img src="<?= base_url('media/' . $ticket['media']) ?>" alt="gambar tidak ada" class="w-[200px]">
                <?php } else {
                    echo '';
                } ?>
            </div>

            <?php if ($ticketData) { ?>
                <?php foreach ($ticketData as $ticketDat) { ?>
                    <div class="container flex flex-row">
                        <div class="md:w-[38rem] lg:w-[38rem] max-sm:w-[18rem] mt-4 border border-dashed border-slate-900 rounded-l-lg rounded-br-lg p-2 text-slate-800 flex flex-col gap-2">
                            <?= $ticketDat['description'] ?>
                            <?php if ($ticketDat['media']) {  ?>
                                <img src="<?= base_url('media/' . $ticketDat['media']) ?>" alt="gambar tidak ada" class="w-[200px] rounded-md">
                            <?php } else {
                                echo '';
                            } ?>
                            <form action="remove/<?= $ticketDat['ticket_data_id'] ?>" method="get">
                                <button class="mt-3 border border-dashed p-2 border-slate-700 w-48 flex justify-center align-middle items-center rounded-md hover:bg-slate-200 cursor-pointer active:bg-slate-300 gap-3">
                                    <i class="ri-delete-bin-5-line"></i> hapus dokumentasi
                                </button>
                            </form>
                        </div>
                        <div class="ml-3">
                            <img src="<?= base_url('media/wahyu.jpg') ?>" class=" rounded-md h-10 aspect-square mt-4" alt="">
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

            <!-- tambah pesan dialog -->
            <div class="mt-2 mb-10 container max-w-full flex justify-center align-middle items-center flex-col gap-2">
                <button id="atractiveButton" class="max-w-full bg-sky-200 flex w-full items-center align-middle rounded-md py-2 text-slate-700 gap-2 hover:bg-sky-300 active:bg-sky-400 justify-between px-4 max-sm:text-[10px]">
                    <span>
                        <i class="ri-chat-new-line"></i> klik untuk menambahkan pesan baru
                    </span>
                    <span id="dropDownIcon" class="transform duration-150 ease-out">
                        <i class="ri-arrow-down-s-line font-bold"></i>
                    </span>
                </button>

                <!-- add comment new area -->
                <form action="<?= base_url('ticket/edit/') . $ticket['ticket_id'] ?>" method="post" enctype="multipart/form-data" id="dialogBox" class="w-full text-slate-800 flex flex-col max-w-full gap-2 hidden">
                    <input type="text" value="<?= $ticket['ticket_id'] ?>" class="hidden">
                    <textarea name="description" class="rounded-md bg-slate-100 border border-slate-400 p-3 w-full max-sm:text-[12px]" placeholder="add some description!"><?= old('description'); ?></textarea>
                    <?php if (session()->getFlashdata('error') && array_key_exists('description', session()->getFlashdata('error'))) : ?>
                        <span class="text-sm text-red-500">
                            <!-- this is validation message -->
                            <i class="ri-corner-left-up-line"></i> <?= session()->getFlashdata('error')['description'] ?>
                        </span>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label for="formFileSm" class="mb-2 inline-block text-slate-800 max-sm:text-[12px]">Unggah dokumentasi</label>
                        <input name="media" class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-xs font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none" id="formFileSm" type="file" />
                        <?php if (session()->getFlashdata('error') && array_key_exists('media', session()->getFlashdata('error'))) : ?>
                            <span class="text-sm text-red-500">
                                <!-- this is validation message -->
                                <i class="ri-corner-left-up-line"></i> <?= session()->getFlashdata('error')['media'] ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <button type="submit" id="sendData" class="bg-sky-200 p-2 rounded-md hover:bg-sky-300 active:bg-sky-400 max-sm:text-[12px]">
                        <i class="ri-menu-add-line"></i> update
                    </button>
                </form>
            </div>


        </div>
        <div class="w-1/3 p-2 rounded-md bg-white max-sm:w-full overflow-scroll md:h-[29rem]">
            <span class="font-semibold my-2 max-sm:text-sm">Customer Timeline</span>

            <ol class="relative border-s border-gray-400 dark:border-gray-700 ml-1 mt-2">
                <?php foreach ($timeLine as $ticketTimeLine) : ?>
                    <li class="mb-10 ms-4">
                        <a href="<?= base_url('ticket/') .  $ticketTimeLine['ticket_id'] . "/" . $ticketTimeLine['contact_id'] ?>">
                            <div class="absolute w-3 h-3 bg-gray-300 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                            <time class="mb-1 md:text-sm max-sm:text-[10px] font-normal leading-none text-gray-400 dark:text-gray-500 flex gap-2 flex-row align-middle items-center">
                                <?= date('d', strtotime($ticketTimeLine['created_at'])) . " " . defineMonth(date('m', strtotime($ticketTimeLine['created_at']))) . " " . date('Y', strtotime($ticketTimeLine['created_at'])) ?> <span class="p-1 flex justify-center align-middle items-center text-white rounded-md <?= $ticketTimeLine['status'] == 'close' ? 'bg-green-200' : 'bg-sky-200' ?>"><?= $ticketTimeLine['status'] ?></span>
                            </time>
                            <h3 class="text-md font-bold text-gray-600 dark:text-white"><?= $ticketTimeLine['subject'] ?> # <span class="text-blue-400"><?= $ticketTimeLine['ticket_id'] ?></span></h3>
                            <p class="md:text-sm max-sm:text-[10px] font-normal text-gray-500 dark:text-gray-400"><?= $ticketTimeLine['description'] ?></p>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#atractiveButton').on('click', (e) => {
            e.stopPropagation();
            $('#dialogBox').slideToggle()
            $('#dropDownIcon').toggleClass('rotate-180', 1000)
            console.log('on')
        })
    })
</script>
<?= $this->endSection() ?>