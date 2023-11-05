<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<body class="blur-sm brightness-75">
    <div class="p-10 max-w-full w-full bg-slate-400">
        <div id="confirmBox" class="hidden absolute mx-auto w-72 bg-white top-[45%] left-[45%] py-6 flex flex-col items-center rounded-md border border-slate-400">
            <span class="text-2xl text-slate-600"><i class="ri-information-line"></i> Info...</span>
            <span class="text-md text-slate-500 mt-2">apakah anda yakin?</span>
            <span class="flex flex-row mt-4 gap-4">
                <a href="" class="hover:brightness-105 w-16 flex justify-center rounded-md text-white px-2 py-1 bg-blue-300 border border-slate-400">tidak</a>
                <a href="" class="hover:brightness-105 w-16 flex justify-center rounded-md text-white px-2 py-1 bg-blue-300 border border-slate-400">iya</a>
            </span>
        </div>
        <span id="toggleBox" class="cursor-pointer">click ini</span>
    </div>

</body>
<script type="text/javascript">
    const confirmBox = document.getElementById("confirmBox");
    const toggleBox = document.getElementById("toggleBox");

    toggleBox.addEventListener("click", function() {
        confirmBox.classList.toggle("hidden");
        // document.classList.add('')
        console.log('test');
    });
</script>
<?= $this->endSection() ?>