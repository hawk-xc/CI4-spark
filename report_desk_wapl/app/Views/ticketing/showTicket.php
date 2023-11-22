<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>
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
            <div class="flex flex-row gap-4 mt-4 border border-slate-400">
                <span class="w-11 h-11 flex justify-center align-middle items-center text-slate-700 rounded-lg flex-auto">
                    <i class="ri-sticky-note-line text-lg text-slate-600"></i>
                </span>
                <span class="text-sm <?= $ticket[0]['description'] ? '' : 'hidden' ?>">
                    <?= $ticket[0]['description'] ? $ticket[0]['description'] : 'tidak ada data' ?>
                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda earum, dolores distinctio omnis, veniam eaque cum quis dolorem culpa corporis necessitatibus commodi, impedit dicta vitae quam officia dolor porro sed.</span>
                </span>
                <textarea name="description" id="description" cols="50" rows="10" class="max-w-full w-full focus:outline-none py-2  block" placeholder="tidak ada komentar tersedia..." value=""><?= $description[0]['description'] ?></textarea>
            </div>


            <div class="flex items-center justify-center w-full mt-4">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed cursor-pointer bg-gray-50 dark:hover:bg-bray-800 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>


        </div>
        <div class="w-1/3 p-2 rounded-md bg-white max-sm:order-1 max-sm:w-full">
            ini kanan
        </div>
    </div>
</div>
<script type="text/javascript">
    console.log('hello');
    const confirmBox = document.getElementById("confirmBox");
    const dropConfirmBox = document.getElementById("dropConfirmBox");
    const upConfirmBox = document.getElementById("upConfirmBox");
    const hamburgerMenu = document.getElementById("hamburgerMenu");
    const navPanel = document.getElementById("right_panel");
    const hamburderIcon = document.querySelector("i[name=hamburgerIcon]");
    const toolPanel = document.getElementById("toolPanel");
    const searchBox = document.getElementById("searchBox");
    const userBox = document.getElementById("userBox");
    const dropdown = document.getElementById("dropdown");

    function confirmBoxAction() {
        confirmBox.classList.contains('scale-0') ? confirmBox.classList.replace('scale-0', 'scale-100') : confirmBox.classList.replace('scale-100', 'scale-0');
    }

    dropConfirmBox.addEventListener("click", confirmBoxAction);
    upConfirmBox.addEventListener("click", confirmBoxAction);

    // flash data function
    const messageBox = document.getElementById("messageBox");
    const closeButton = document.getElementById("closeButton");

    closeButton.addEventListener("click", function() {
        messageBox.classList.add("hidden");
    });
    setTimeout(function() {
        messageBox.classList.add("opacity-0");
        setTimeout(function() {
            messageBox.classList.add("hidden");
        }, 500);
    }, 3000);

    hamburgerMenu.addEventListener("click", function() {
        navPanel.classList.toggle("max-sm:-translate-x-52");
    });
</script>
<?= $this->endSection() ?>