<?= $this->extend('particle/dashboardParticle.php'); ?>
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

    return $month[$num];
}
?>

<div class="flex flex-col p-2 gap-4 max-sm:h-[63rem]">
    <div class="flex flex-col bg-white rounded-lg shadow-sm p-3 h-full">
        <div class="flex justify-between h-10 items-center max-w-full w-full">
            <span class="text-slate-800 font-bold text-lg">
                <i class="ri-home-gear-line text-sky-400"></i> panel utama
            </span>
            <span class="p-2 bg-slate-200 rounded-md max-sm:text-[10px]" id="realTimeDate">
            </span>
        </div>
        <div class="mt-4 h-60 w-full max-w-full">

            <!-- testing purpose -->
            <div class="flex items-center justify-center align-middle">
                <canvas id="speedChart" width="200" height="50" class="flex"></canvas>
            </div>

        </div>
    </div>
    <div class="flex md:flex-row max-sm:flex-col gap-4 box-border h-full">
        <a href="/ticket" class="flex md:bg-white max-sm:bg-blue-200 sm:bg-green-300 w-full rounded-lg shadow-sm p-3 h-[12rem] flex-col hover:shadow-lg hover:border hover:border-slate-300 box-border duration-300 ease-out">
            <span class="text-slate-800 font-bold text-lg">
                <i class="ri-link text-sky-400"></i> open ticket
            </span>
            <span class="my-auto mx-auto flex flex-col">
                <span class="text-4xl font-extrabold">
                    <i class="ri-add-line text-gray-500"></i><span class="text-4xl font-extrabold text-orange-400 duration-500 ease-out"><?= $open_ticket ? $open_ticket : '0' ?>
                    </span>
                </span>
                <span class="text-lg">
                    ticket baru
                </span>
            </span>
        </a>
        <a href="/ticket" class="flex md:bg-white max-sm:bg-blue-200 sm:bg-green-300 w-full rounded-lg shadow-sm p-3 h-[12rem] flex-col hover:shadow-lg hover:border hover:border-slate-300 box-border duration-300 ease-out">
            <span class="text-slate-800 font-bold text-lg">
                <i class="ri-link text-sky-400"></i> ticket done
            </span>
            <span class="my-auto mx-auto flex flex-col">
                <span class="text-4xl font-extrabold">
                    <i class="ri-add-line text-gray-500"></i><span class="text-4xl font-extrabold text-orange-400 duration-500 ease-out"><?= $close_ticket ? $close_ticket : '0' ?>
                    </span>
                </span>
                <span class="text-lg">
                    ticket selesai
                </span>
            </span>
        </a>
        <a href="/ticket" class="flex md:bg-white max-sm:bg-blue-200 sm:bg-green-300 w-full rounded-lg shadow-sm p-3 h-[12rem] flex-col hover:shadow-lg hover:border hover:border-slate-300 box-border duration-300 ease-out">
            <span class="text-slate-800 font-bold text-lg">
                <i class="ri-link text-sky-400"></i> open maintenance
            </span>
            <span class="my-auto mx-auto flex flex-col">
                <span class="text-4xl font-extrabold">
                    <i class="ri-add-line text-gray-500"></i><span class="text-4xl font-extrabold text-orange-400 duration-500 ease-out"><?= $open_mt ? $open_mt : '0' ?>
                    </span>
                </span>
                <span class="text-lg">
                    ticket perbaikan
                </span>
            </span>
        </a>
        <a href="/ticket" class="flex md:bg-white max-sm:bg-blue-200 sm:bg-green-300 w-full rounded-lg shadow-sm p-3 h-[12rem] flex-col hover:shadow-lg hover:border hover:border-slate-300 box-border duration-300 ease-out">
            <span class="text-slate-800 font-bold text-lg">
                <i class="ri-link text-sky-400"></i> done maintenance
            </span>
            <span class="my-auto mx-auto flex flex-col">
                <span class="text-4xl font-extrabold">
                    <i class="ri-add-line text-gray-500"></i><span class="text-4xl font-extrabold text-orange-400 duration-500 ease-out"><?= $done_mt ? $done_mt : '0' ?>
                    </span>
                </span>
                <span class="text-lg">
                    ticket selesai
                </span>
            </span>
        </a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
    function updateRealTimeDate() {
        // Create a new Date object
        var currentDate = new Date();

        // Define the options for formatting
        var options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
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
<script type="text/javascript">
    //   let ctx = document.getElementById("myChart");
    var speedCanvas = document.getElementById("speedChart");

    //   Chart.defaults.global.defaultFontFamily = "Lato";

    var dataFirst = {
        label: "Installasi jaringan baru",
        data: [
            <?= $new_Januari ?>,
            <?= $new_Februari ?>,
            <?= $new_Maret ?>,
            <?= $new_April ?>,
            <?= $new_Mei ?>,
            <?= $new_Juni ?>,
            <?= $new_Juli ?>,
            <?= $new_Agustus ?>,
            <?= $new_September ?>,
            <?= $new_Oktober ?>,
            <?= $new_November ?>,
            <?= $new_Desember ?>
        ],
        lineTension: 0,
        fill: false,
        borderColor: "red",
    };

    var dataSecond = {
        label: "Perbaikan jaringan",
        data: [
            <?= $mt_Januari ?>,
            <?= $mt_Februari ?>,
            <?= $mt_Maret ?>,
            <?= $mt_April ?>,
            <?= $mt_Mei ?>,
            <?= $mt_Juni ?>,
            <?= $mt_Juli ?>,
            <?= $mt_Agustus ?>,
            <?= $mt_September ?>,
            <?= $mt_Oktober ?>,
            <?= $mt_November ?>,
            <?= $mt_Desember ?>
        ],
        lineTension: 0,
        fill: false,
        borderColor: "blue",
    };

    var speedData = {
        labels: [
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
        ],
        datasets: [dataFirst, dataSecond],
    };

    var chartOptions = {
        legend: {
            display: true,
            position: "top",
            labels: {
                boxWidth: 40,
                fontColor: "black",
            },
        },
    };

    var lineChart = new Chart(speedCanvas, {
        type: "line",
        data: speedData,
        options: chartOptions,
    });

    Chart.defaults.font.family = "Arial";
    Chart.defaults.global.defaultFontSize = 18;
</script>


<?= $this->endSection(); ?>