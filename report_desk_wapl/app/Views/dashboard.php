<?= $this->extend('particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<script src="node_modules/chart.js/dist/chart.js"></script>

<div class="flex flex-col p-2 gap-4 md:h-[40rem] max-sm:h-[63rem]">
    <div class="flex bg-white rounded-md shadow-sm p-3 h-full">
        <div class="flex justify-between h-10 items-center max-w-full w-full">
            <span class="text-slate-500 font-bold text-lg">
                <i class="ri-home-gear-line text-sky-400"></i> panel utama
            </span>
            <span class="p-2 bg-slate-200 rounded-md max-sm:text-[10px]" id="realTimeDate"></span>
        </div>
    </div>
    <div class="flex md:flex-row max-sm:flex-col gap-4 h-full">
        <a href="/ticket" class="flex md:bg-white max-sm:bg-blue-200 sm:bg-green-300 w-full rounded-md shadow-sm p-3 h-[12rem] flex-col hover:shadow-md duration-300 ease-out">
            <span class="text-slate-500 font-bold text-lg">
                <i class="ri-link text-sky-400"></i> open ticket
            </span>
            <span class="my-auto mx-auto text-4xl font-extrabold">
                <i class="ri-donut-chart-line text-gray-500"></i> <span class="text-orange-400"><span class="text-orange-400 duration-500 ease-out"><?= $open_ticket ? $open_ticket : '0' ?> On Progress</span>
        </a>
        <a href="/ticket" class="flex bg-white w-full rounded-md shadow-sm p-3 h-[12rem] flex-col group hover:shadow-md duration-300 ease-out">
            <span class="text-slate-500 font-bold text-lg">
                <i class="ri-link text-sky-400"></i> ticket done
            </span>
            <span class="my-auto mx-auto text-4xl font-extrabold">
                <i class="ri-donut-chart-line text-gray-500 duration-150 ease-out"></i> <span class="text-orange-400 duration-500 ease-out"><?= $close_ticket ? $close_ticket : '0' ?> Done</span>
            </span>
        </a>
    </div>
</div>

<script>
    function updateRealTimeDate() {
        // Create a new Date object
        var currentDate = new Date();

        // Define the options for formatting
        var options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };

        // Set the language to Indonesian
        var locale = 'id-ID';

        // Format the date
        var formattedDate = currentDate.toLocaleDateString(locale, options);

        // Display the date
        var realTimeDateElement = document.getElementById('realTimeDate');
        realTimeDateElement.innerHTML = formattedDate;
    }

    // Update the date every second
    setInterval(updateRealTimeDate, 100);
</script>

<?= $this->endSection(); ?>