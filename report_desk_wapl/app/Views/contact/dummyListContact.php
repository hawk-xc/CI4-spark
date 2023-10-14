<?= $this->extend('particle/dashboardParticle'); ?>
<?= $this->section("content"); ?>
<div class="bg-slate-300 ">
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-base leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-center">Phone</th>
                        <th class="py-3 px-6 text-center">Action </th>

                    </tr>
                </thead>
                <tbody class="text-gray-600 text-base font-light">
                    <!-- Dummy Data, you should replace this with actual data -->
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-center    ">1</td>
                        <td class="py-3 px-6 text-center    ">Slank</td>
                        <td class="py-3 px-6 text-center    ">slank@.gmailcom</td>
                        <td class="py-3 px-6 text-center">+62 234 567 890</td>
                        <td class="py-3 px-6 text-center">
                            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded-md w-24 ">Edit</button>
                            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded-md w-24">Aprove</button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-center">2</td>
                        <td class="py-3 px-6 text-center">joySmith</td>
                        <td class="py-3 px-6 text-center">joysmith@gmail.com</td>
                        <td class="py-3 px-6 text-center">+62 987 654 321</td>
                        <td class="py-3 px-6 text-center">
                            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded-md w-24 ">Edit</button>
                            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded-md w-24">Aprove</button>
                        </td>

                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-center">3</td>
                        <td class="py-3 px-6 text-center">Bagong</td>
                        <td class="py-3 px-6 text-center">bagong@gmail.com</td>
                        <td class="py-3 px-6 text-center">+62 987 654 321</td>
                        <td class="py-3 px-6 text-center">
                            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded-md w-24 ">Edit</button>
                            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded-md w-24">Aprove</button>
                        </td>

                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-center">4</td>
                        <td class="py-3 px-6 text-center">Kamin</td>
                        <td class="py-3 px-6 text-center">Kamin@gmail.com</td>
                        <td class="py-3 px-6 text-center">+62 987 654 322</td>
                        <td class="py-3 px-6 text-center">
                            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded-md w-24 ">Edit</button>
                            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded-md w-24">Aprove</button>
                        </td>

                    </tr>
                    <!-- End of Dummy Data -->
                </tbody>
            </table>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>