<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<div id="modalBox" class="hidden duration-200 transition-all ease-in absolute inset-0 flex items-center justify-center backdrop-blur-sm z-50 backdrop-brightness-75">
    <div class="bg-white rounded-md w-auto p-5 flex justify-center align-middle items-center flex-col">
        <h2 class="font-bold text-slate-800 text-xl">cek identitas</h2>
        <!-- msgBox -->
        <div class="p-2 border-l-4 border-red-400 bg-slate-100 rounded-sm my-3 w-64 flex flex-col">
            <span id="spanUser"></span>
            <span id="spanMail"></span>
            <span id="spanNumber"></span>
            <span id="spanAddress"></span>
        </div>
    </div>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    nama
                </th>
                <th scope="col" class="px-6 py-3">
                    surel
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">aksi</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contact as $data) : ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $data['contact_id'] ?>
                    </th>
                    <td class="px-6 py-2">
                        <?= $data['name'] ?>
                    </td>
                    <td class="px-6 py-2">
                        <?= $data['email'] ?>
                    </td>
                    <td class="px-6 py-2 text-right text-xl cursor-pointer">
                        <i id="<?= $data['contact_id'] ?>" name="infoTab" class="ri-search-eye-line"></i>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('i[name=infoTab').on('click', function() {
            let $id = $(this).attr('id');

            $.ajax({
                url: 'getuser?id=' + $id,
                method: 'get',
                success: function(data) {
                    $('#modalBox').removeClass('hidden')
                    const jsonData = JSON.parse(data);
                    $('#spanUser').html("<i class='ri-user-line mr-2'></i> " + jsonData.name);
                    $('#spanMail').html("<i class='ri-mail-line mr-2'></i> " + jsonData.email);
                    $('#spanNumber').html("<i class='ri-phone-line mr-2'></i> " + jsonData.phone);
                    $('#spanAddress').html("<i class='ri-map-pin-line mr-2'></i> " + jsonData.address);
                }
            })
        })
    })
</script>

<?= $this->endSection() ?>