<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<body>

    <span class="text-2xl mb-3"><?= $title ?></span>
    <div class="mt-3 relative overflow-x-auto rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-sky-500 dark:bg-gray-700 dark:text-gray-400">
                <tr class="rounded-md">
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        mail
                    </th>
                    <th scope="col" class="px-6 py-3">
                        role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $user->userid; ?>
                        </th>
                        <td class="px-6 py-4">
                            <?= $user->username; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $user->usermail; ?>
                        </td>
                        <td class="px-6 py-4">
                            <span class="py-1 px-3 bg-blue-300 rounded-md text-white"><?= $user->role; ?></span>
                        </td>
                        <td class="px-6 py-4">
                            <?php if ($user->status) { ?>
                                <span class="font-bold text-green-400">
                                    <i class="ri-checkbox-blank-circle-fill"></i> active
                                </span>
                            <?php } else { ?>
                                <span class="font-bold text-red-500">
                                    <i class="ri-checkbox-blank-circle-fill"></i> offline
                                </span>
                            <?php } ?>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-white hover:underline px-3 py-2 bg-blue-400 rounded-lg"><i class="ri-edit-2-line"></i> Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

<?= $this->endSection(); ?>

</html>