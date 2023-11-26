<?= $this->extend('particle/dashboardParticle'); ?>
<?= $this->section("content"); ?>


<div class="container mx-auto shadow-sm rounded-lg">

    <div class="bg-white shadow-md rounded w-full flex flex-col overflow-y-scroll gap-3 md:h-[29rem] max-sm:order-2 max-sm:h-[47rem] max-sm:text-md ">
        <?php if (session()->getFlashdata('message')) { ?>
            <div id="messageBox" class="my-2 max-w-full p-2 bg-orange-200 border border-slate-600 rounded-md flex justify-between">
                <span class="flex flex-row"><span><i class="ri-information-fill"></i> <?= session()->getFlashdata('message') ?></span></span> <i class="ri-close-fill font-bold hover:text-red-400" id="closeButton"></i>
            </div>
        <?php } ?>
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

                <?php foreach ($contact as $ct) : ?>
                    <tr class="border-b border-gray-200 hover-bg-gray-100 hover:bg-slate-100">
                        <td class="py-3 px-6 text-center"><?= $ct['contact_id'] ?></td>
                        <td class="py-3 px-6 text-center"><?= $ct['name']; ?></td>
                        <td class="py-3 px-6 text-center"><?= $ct['email']; ?></td>
                        <td class="py-3 px-6 text-center"><?= $ct['phone']; ?></td>
                        <td class="py-3 px-6 text-center">
                            <div class="relative inline-block text-left">
                                <div>
                                    <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button<?= $ct['contact_id'] ?>" aria-expanded="false" aria-haspopup="true">
                                        Options
                                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Dropdown menu -->
                                <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button<?= $ct['contact_id'] ?>" tabindex="-1" id="menu-button-menu<?= $ct['contact_id'] ?>">
                                    <div class="py-1 text-left " role="none">
                                        <a class="block px-4 py-2 hover:bg-gray-200" href="/form/edit/<?= $ct['contact_id']; ?>"><i class="ri-edit-2-line pr-4"></i>Edit</a>
                                        <!-- <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-chat-check-line pr-4"></i>Aprove</a> -->

                                        <form class="block px-4 py-2 hover:bg-gray-200" action="/form/<?= $ct['contact_id']; ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button id="upConfirmBox" onclick="return confirm('Apakah Anda Yakin Menghapus Ini?')">
                                                <i class="ri-delete-bin-6-line pr-4"></i>Delete
                                            </button>

                                        </form>
                                        <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Action 2</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Action 3</a> -->
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <!-- End of Dummy Data nantinya -->
            </tbody>
        </table>
    </div>
</div>

<script src="js/contactDropdown.js"></script>


<?= $this->endSection(); ?>