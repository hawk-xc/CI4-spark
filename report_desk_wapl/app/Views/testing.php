<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>

<div>
    <form action="" method="get">
        <input type="text" name="search" id="search" class="p-2 border border-sky-100 rounded-md placeholder:text-teal-600 my-2" placeholder="search here...">
        <button type="submit" class="px-3 py-2 bg-sky-200 font-semibold text-slate-500 rounded-md">
            cari
        </button>
    </form>
</div>

<form class="container flex flex-row gap-3" method="get" action="">
    <select name="count" class="block w-full px-4 py-2 border rounded-md bg-white text-gray-800 focus:outline-none focus:border-blue-500">
        <option value="2" <?= (old('status') === '2') ? 'selected' : '' ?>>1 showlist</option>
        <option value="3" <?= (old('status') === '3') ? 'selected' : '' ?>>2 showlist</option>
        <option value="4" <?= (old('status') === '4') ? 'selected' : '' ?>>3 showlist</option>
        <option value="100" <?= (old('status') === '100') ? 'selected' : '' ?>>100 showlist</option>
    </select>
    <select name="type" class="block w-full px-4 py-2 border rounded-md bg-white text-gray-800 focus:outline-none focus:border-blue-500">
        <option value="mt" <?= (old('status') === 'mt') ? 'selected' : '' ?>>Perbaikan</option>
        <option value="new" <?= (old('type') === 'new') ? 'selected' : '' ?>>Installasi baru</option>
    </select>
    <select name="order_by" class="block w-full px-4 py-2 border rounded-md bg-white text-gray-800 focus:outline-none focus:border-blue-500">
        <option value="name" <?= (old('status') === 'name') ? 'selected' : '' ?>>urutkan berdasarkan abjad nama</option>
        <option value="subject" <?= (old('status') === 'subject') ? 'selected' : '' ?>>urutkan berdasarkan abjad subject</option>
        <option value="ticket.created_at" <?= (old('status') === 'created_at') ? 'selected' : '' ?>>urutkan berdasarkan tanggal</option>
    </select>
    <button type="submit" class="px-2 py-2 bg-sky-300 font-semibold rounded-md shadow-sm text-white">aplikasikan</button>
</form>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg my-3" id="dataListing" name="dataListing">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    subject
                </th>
                <th scope="col" class="px-6 py-3">
                    contact
                </th>
                <th scope="col" class="px-6 py-3">
                    type
                </th>
                <th scope="col" class="px-6 py-3">
                    status
                </th>
                <th scope="col" class="px-6 py-3">
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $r) : ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $r['ticket_id'] ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $r['subject'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $r['name'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $r['type'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $r['status'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <?= $pager->links('ticket', 'default_new') ?>
    </table>
</div>



<!-- Modal toggle -->
<!-- Main modal -->



<script type="text/javascript">
    $(document).ready(function() {
        $('#search').keyup(function() {
            $('#dataListing').load("http://localhost:8080/ticket/" + $('#search').val());
        });
    })
</script>

<?= $this->endSection() ?>