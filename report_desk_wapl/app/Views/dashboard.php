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

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>

<div class="flex flex-col p-2 gap-4 max-sm:h-[63rem]">
    <div class="bg-gray-800 text-gray-500 rounded-md shadow-xl py-5 px-5 w-full lg:w-full" x-data="{chartData:chartData()}" x-init="chartData.fetch()">

        <!-- ini chart -->
        <div class="flex flex-wrap items-end mb-3">
            <h4 class="text-2xl lg:text-3xl text-white font-semibold leading-tight inline-block mr-2">
                <i class="ri-line-chart-line text-yellow-300 font-light"></i> grafik laporan
            </h4>
        </div>
        <div class="p-4 flex-auto">
            <!-- Chart -->
            <div class="relative h-56">
                <canvas id="line-chart" height="200"></canvas>
            </div>
        </div>
    </div>

    <div class="flex md:flex-row max-sm:flex-col gap-4 box-border h-14">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
<script type="text/javascript">
    (function() {
        /* Chart initialisations */
        /* Line Chart */
        var config = {
            type: "line",
            data: {
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
                datasets: [{
                        label: 'installasi baru',
                        backgroundColor: "#4c51bf",
                        borderColor: "#4c51bf",
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

                        fill: false,
                    },
                    {
                        label: 'perbaikan',
                        fill: false,
                        backgroundColor: "#ed64a6",
                        borderColor: "#ed64a6",
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

                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                title: {
                    display: false,
                    text: "Sales Charts",
                    fontColor: "white",
                },
                legend: {
                    labels: {
                        fontColor: "white",
                    },
                    align: "end",
                    position: "bottom",
                },
                tooltips: {
                    mode: "index",
                    intersect: false,
                },
                hover: {
                    mode: "nearest",
                    intersect: true,
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            fontColor: "rgba(255,255,255,.7)",
                        },
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: "Month",
                            fontColor: "white",
                        },
                        gridLines: {
                            display: false,
                            borderDash: [2],
                            borderDashOffset: [2],
                            color: "rgba(33, 37, 41, 0.3)",
                            zeroLineColor: "rgba(0, 0, 0, 0)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2],
                        },
                    }, ],
                    yAxes: [{
                        ticks: {
                            fontColor: "rgba(255,255,255,.7)",
                        },
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: "Value",
                            fontColor: "white",
                        },
                        gridLines: {
                            borderDash: [3],
                            borderDashOffset: [3],
                            drawBorder: false,
                            color: "rgba(255, 255, 255, 0.15)",
                            zeroLineColor: "rgba(33, 37, 41, 0)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2],
                        },
                    }, ],
                },
            },
        };
        var ctx = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(ctx, config);
    })();
</script>


<?= $this->endSection(); ?>