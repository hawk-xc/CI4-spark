<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    contact id
                </th>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    mail
                </th>
                <th scope="col" class="px-6 py-3">
                    phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contact as $con_val) { ?>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $con_val['contact_id'] ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $con_val['name'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $con_val['email'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $con_val['phone'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?= $pager->links('contact', 'pages_appview_testing') ?>

<?= $this->endSection() ?>