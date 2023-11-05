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
            <span class="bg-blue-200 px-2 py-1 rounded-md border border-slate-500 cursor-pointer hover:brightness-105 duration-150"><i class="ri-mail-add-line"></i> Add note</span>
            <a href="close/<?= $ticket[0]['ticket_id'] ?>" class="bg-green-300 px-2 py-1 rounded-md border border-slate-500 cursor-pointer hover:brightness-105 duration-150">
                <i class="ri-checkbox-circle-line"></i> Close
            </a>
        </span>
        <button id="upConfirmBox" class="bg-red-300 px-2 py-1 focus:bg-red-400 focus:ring focus:ring-red-500 rounded-md border border-slate-500 cursor-pointer hover:brightness-105 duration-150"><i class="ri-delete-bin-5-line"></i> Delete</button>
    </div>
    <div class="flex mt-2 flex-row max-w-full w-full gap-2">
        <div class="p-5 bg-white rounded-md shadow-sm flex flex-col w-full overflow-y-scroll custom-scrollbar-hidden md:h-[29rem]">
            <span>
                <span class="text-slate-500 font-extrabold text-2xl mr-2">#</span><span class="text-2xl"><?= $ticket[0]['subject'] ?></span>
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
            <div class="flex flex-row gap-4 mt-4">
                <span class="w-11 h-11 flex justify-center align-middle items-center text-slate-700 rounded-lg flex-auto ml-3 mr-3">
                    <i class="ri-sticky-note-line text-lg text-slate-600"></i>
                </span>
                <span class="text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptatum repellendus unde praesentium quo sapiente laboriosam animi beatae. Aliquid dolore quasi quos numquam et.
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, sint.
                    </p>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nam id animi quae inventore sed nulla molestiae nostrum, consequatur repellat amet voluptatibus corrupti velit possimus. Laborum, rem.
                    </p>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nam id animi quae inventore sed nulla molestiae nostrum, consequatur repellat amet voluptatibus corrupti velit possimus. Laborum, rem.
                    </p>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nam id animi quae inventore sed nulla molestiae nostrum, consequatur repellat amet voluptatibus corrupti velit possimus. Laborum, rem.
                    </p>
                </span>
            </div>
        </div>
        <div class="w-1/3 p-2 rounded-md bg-white">
            ini kanan
        </div>
    </div>
</div>
<script type="text/javascript">
    const confirmBox = document.getElementById("confirmBox");
    const dropConfirmBox = document.getElementById("dropConfirmBox");
    const upConfirmBox = document.getElementById("upConfirmBox");

    function confirmBoxAction() {
        confirmBox.classList.contains('scale-0') ? confirmBox.classList.replace('scale-0', 'scale-100') : confirmBox.classList.replace('scale-100', 'scale-0');
    }

    dropConfirmBox.addEventListener("click", confirmBoxAction);
    upConfirmBox.addEventListener("click", confirmBoxAction);
</script>
<?= $this->endSection() ?>