<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>
<script src="node_modules/jquery/dist/jquery.min.js"></script>

<div id="confirmBox" class="scale-0 duration-200 transition-all ease-out shadow-md absolute mx-auto w-72 backdrop-blur-md top-[45%] left-[45%] py-6 flex flex-col items-center rounded-md border border-slate-400">
    <div class="text-2xl text-slate-600"><i class="ri-information-line"></i> Info...</div>
    <div class="text-md text-slate-500 mt-2">apakah anda yakin?</div>
    <div class="flex flex-row mt-4 gap-4">
        <button id="dropConfirmBox" href="" class="hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 w-16 flex justify-center rounded-md text-white px-2 py-1 bg-violet-500 border border-slate-400 cursor-pointer">tidak</button>

        <a href="delete/<?= $ticket[0]['ticket_id'] ?>">
            <button class="hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 w-16 flex justify-center rounded-md text-white px-2 py-1 bg-violet-500 border border-slate-400 cursor-pointer">iya</button>
        </a>
    </div>
</div>

<div class="p-1">
    <div class="bg-white p-3 rounded-md flex flex-row gap-4 box-border justify-between">
        <span class="rounded-md flex flex-row gap-4 box-border">
            <a href="<?= base_url('ticket') ?>" class="bg-blue-200 px-2 py-1 rounded-md border border-slate-500 cursor-pointer hover:brightness-105 duration-150"><i class="ri-arrow-go-back-fill"></i> goback</a>
            <a href="<?= $ticket[0]['status'] == 'close' ? 'open/' . $ticket[0]['ticket_id'] : 'close/' . $ticket[0]['ticket_id'] ?>" class="<?= $ticket[0]['status'] == 'close' ? 'bg-blue-200' : 'bg-green-300' ?> px-2 py-1 rounded-md border border-slate-500 cursor-pointer hover:brightness-105 duration-150">
                <i class="ri-checkbox-circle-line"></i> <?= $ticket[0]['status'] == 'close' ? 'Open' : 'Close' ?>
            </a>
        </span>
        <button id="upConfirmBox" class="bg-red-300 px-2 py-1 focus:bg-red-400 focus:ring focus:ring-red-500 rounded-md border border-slate-500 cursor-pointer hover:brightness-105 duration-150"><i class="ri-delete-bin-5-line"></i> Delete</button>
    </div>
    <?php if (session()->getFlashdata('message')) { ?>
        <div id="messageBox" class="duration-500 transition-all ease-out my-2 p-2 bg-blue-300 ring-1 ring-blue-100 rounded-md flex justify-between">
            <span class="flex flex-row text-white"><span><i class="ri-information-line"></i> <?= session()->getFlashdata('message') ?></span></span> <i class="ri-close-fill font-bold hover:text-red-400 text-white" id="closeButton"></i>
        </div>
    <?php } ?>
    <div class="flex mt-2 max-sm:flex-col md:flex-row lg:flex-row max-w-full w-full gap-2">
        <div class="p-5 bg-white rounded-md shadow-sm flex flex-col w-full md:h-[29rem] max-sm:order-2 overflow-y-scroll">
            <span>
                <span class="text-slate-500 font-extrabold text-2xl mr-2">#<?= $ticket[0]['ticket_id'] ?></span><span class="text-2xl"><?= $ticket[0]['subject'] ?></span>
            </span>
            <span class="text-slate-500 text-sm">Created by <span class="font-bold">$this->name</span></span>

            <!-- ticket desc -->
            <div id="pembungkus" class="flex flex-row justify-between items-center">
                <div class="mt-6 flex flex-row align-middle items-center">
                    <span class="w-11 h-11 flex justify-center align-middle items-center bg-sky-100 text-slate-700 rounded-lg shadow-sm">
                        <?= str_split(strtoupper($ticket[0]['name']))[0] ?>
                    </span>
                    <span class="ml-4 flex flex-col">
                        <a href="#" class="">
                            <!-- terhubung ke kontak -->
                            <span class="font-bold text-blue-300 hover:underline"><?= $ticket[0]['name'] ?></span> <span class="text-slate-600">reported via app</span>
                        </a>
                        <span>Created at <?= $getdatetime ?></span>
                    </span>
                </div>
                <span class="mt-6">
                    <a href="#">
                        <i class="ri-article-line text-3xl text-slate-600 hover:text-slate-700 bg-opacity-0rounded-full"></i>
                    </a>
                </span>
            </div>

            <div class="container mt-4 border border-dashed border-slate-900 rounded-r-lg rounded-bl-lg p-2 text-slate-800 flex flex-col gap-2">
                <?= $description[0]['description'] ?>
                <?php if ($ticket[0]['media']) {  ?>
                    <img src="<?= base_url('media/' . $ticket[0]['media']) ?>" alt="gambar tidak ada" class="w-[200px]">
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
                            <img src="<?= base_url('media/wahyu.jpg') ?>" class=" rounded-md w-10 h-10 mt-4" alt="">
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

            <!-- tambah pesan dialog -->
            <div class="mt-2 mb-10 container max-w-full flex justify-center align-middle items-center flex-col gap-2">
                <button id="atractiveButton" class="max-w-full bg-sky-200 flex w-full items-center align-middle rounded-md py-2 text-slate-700 gap-2 hover:bg-sky-300 active:bg-sky-400 justify-between px-4">
                    <span>
                        <i class="ri-chat-new-line"></i> klik untuk menambahkan pesan baru
                    </span>
                    <span id="dropDownIcon" class="transform duration-150 ease-out">
                        <i class="ri-arrow-down-s-line font-bold"></i>
                    </span>
                </button>

                <!-- add comment new area -->
                <form action="<?= base_url('ticket/edit/') . $ticket[0]['ticket_id'] ?>" method="post" enctype="multipart/form-data" id="dialogBox" class="w-full text-slate-800 flex flex-col max-w-full gap-2 hidden">
                    <input type="text" value="<?= $ticket[0]['ticket_id'] ?>" class="hidden">
                    <textarea name="description" class="rounded-md bg-slate-100 border border-slate-400 p-3 w-full" placeholder="add some description!"><?= old('description'); ?></textarea>
                    <?php if (session()->getFlashdata('error') && array_key_exists('description', session()->getFlashdata('error'))) : ?>
                        <span class="text-sm text-red-500">
                            <!-- this is validation message -->
                            <i class="ri-corner-left-up-line"></i> <?= session()->getFlashdata('error')['description'] ?>
                        </span>
                    <?php endif; ?>
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

                    <button type="submit" id="sendData" class="bg-sky-200 p-2 rounded-md hover:bg-sky-300 active:bg-sky-400">
                        <i class="ri-menu-add-line"></i> update
                    </button>
                </form>
            </div>


        </div>
        <div class="w-1/3 p-2 rounded-md bg-white max-sm:order-1 max-sm:w-full">
            ini kanan
        </div>
    </div>
</div>

<script type="text/javascript">
    // const confirmBox = document.getElementById("confirmBox");
    // const dropConfirmBox = document.getElementById("dropConfirmBox");
    const upConfirmBox = document.getElementById("upConfirmBox");
    // const hamburgerMenu = document.getElementById("hamburgerMenu");
    // const navPanel = document.getElementById("right_panel");
    // const hamburderIcon = document.querySelector("i[name=hamburgerIcon]");
    // const toolPanel = document.getElementById("toolPanel");
    // const searchBox = document.getElementById("searchBox");
    // const userBox = document.getElementById("userBox");
    // const dropdown = document.getElementById("dropdown");

    function confirmBoxAction() {
        confirmBox.classList.contains('scale-0') ? confirmBox.classList.replace('scale-0', 'scale-100') : confirmBox.classList.replace('scale-100', 'scale-0');
    }

    // dropConfirmBox.addEventListener("click", confirmBoxAction);
    upConfirmBox.addEventListener("click", confirmBoxAction);

    // flash data function
    // const messageBox = document.getElementById("messageBox");
    // const closeButton = document.getElementById("closeButton");

    // closeButton.addEventListener("click", function() {
    //     messageBox.classList.add("hidden");
    // });
    // setTimeout(function() {
    //     messageBox.classList.add("opacity-0");
    //     setTimeout(function() {
    //         messageBox.classList.add("hidden");
    //     }, 500);
    // }, 3000);

    // hamburgerMenu.addEventListener("click", function() {
    //     navPanel.classList.toggle("max-sm:-translate-x-52");
    // });

    $(document).ready(function() {
        $('#atractiveButton').on('click', function() {
            $('#dialogBox').slideToggle()
            $('#dropDownIcon').toggleClass('rotate-180', 1000)
            console.log('on')
        })
    })
</script>
<?= $this->endSection() ?>