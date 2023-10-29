<?= $this->extend('particle/dashboardParticle'); ?>
<?= $this->section("content"); ?>

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
                <!-- Dummy Data, nanti pakek foreach untuk akses data dari databases -->
                <?php for ($i = 1; $i <= 6; $i++) { ?>
                    <tr class="border-b border-gray-200 hover-bg-gray-100">
                        <td class="py-3 px-6 text-center"><?= $i ?></td>
                        <td class="py-3 px-6 text-center">Joysmith</td>
                        <td class="py-3 px-6 text-center">Joysmith@.gmailcom</td>
                        <td class="py-3 px-6 text-center">+62 234 567 890</td>
                        <td class="py-3 px-6 text-center">
                            <div class="relative inline-block text-left">
                                <div>
                                    <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button<?= $i ?>" aria-expanded="false" aria-haspopup="true">
                                        Options
                                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Dropdown menu -->
                                <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button<?= $i ?>" tabindex="-1" id="menu-button-menu<?= $i ?>">
                                    <div class="py-1 text-left " role="none">
                                        <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-edit-2-line pr-4"></i>Edit</a>
                                        <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-chat-check-line pr-4"></i>Aprove</a>
                                        <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-delete-bin-6-line pr-4"></i>Delete</a>
                                        <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Action 2</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Action 3</a> -->
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
                <!-- End of Dummy Data nantinya -->
            </tbody>
        </table>
    </div>
</div>

<script src="js/contactDropdown.js"></script>


<?= $this->endSection(); ?>