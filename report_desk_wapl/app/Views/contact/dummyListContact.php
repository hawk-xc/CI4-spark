<?= $this->extend('particle/dashboardParticle'); ?>
<?= $this->section("content"); ?>
<style>
    .dropdown-button {
        position: relative;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        right: 0;
    }
</style>
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
                            <div class="w-full max-w-xs">
                                <div class="relative inline-block text-center">
                                    <button type="button" onclick="toggleDropdown('menu1')" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " id="options-menu" aria-expanded="true" aria-haspopup="true">
                                        <!-- <i class="ri-arrow-down-double-fill transition hover:rotate-180 duration-300" onclick="toggleDropdown('menu1')"></i> -->
                                        Option
                                    </button>

                                    <div id="dropdown-menu" class="dropdown-menu origin-top-left absolute right-0 mt-2 w-56 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 hidden z-20">
                                        <div class="py-1 text-left " role="none">
                                            <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-edit-2-line pr-4"></i>Edit</a>
                                            <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-chat-check-line pr-4"></i>Aprove</a>
                                            <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-delete-bin-6-line pr-4"></i>Delete</a>
                                            <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Action 2</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Action 3</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-center">2</td>
                        <td class="py-3 px-6 text-center">joySmith</td>
                        <td class="py-3 px-6 text-center">joysmith@gmail.com</td>
                        <td class="py-3 px-6 text-center">+62 987 654 321</td>
                        <td class="py-3 px-6 text-center">
                            <div class="w-full max-w-xs">
                                <div class="relative inline-block text-center">
                                    <button type="button" onclick="toggleDropdown('menu2')" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " id="options-menu" aria-expanded="true" aria-haspopup="true">
                                        <!-- <i class="ri-arrow-down-double-fill transition hover:rotate-180 duration-300" onclick="toggleDropdown('menu1')"></i> -->
                                        Option
                                    </button>

                                    <div id="dropdown-menu1" class="origin-top-left absolute right-0 mt-2 w-56 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 hidden z-20">
                                        <div class="py-1 text-left " role="none">
                                            <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-edit-2-line pr-4"></i>Edit</a>
                                            <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-chat-check-line pr-4"></i>Aprove</a>
                                            <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-delete-bin-6-line pr-4"></i>Delete</a>
                                            <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Action 2</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Action 3</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-center">3</td>
                        <td class="py-3 px-6 text-center">Bagong</td>
                        <td class="py-3 px-6 text-center">bagong@gmail.com</td>
                        <td class="py-3 px-6 text-center">+62 987 654 321</td>
                        <td class="py-3 px-6 text-center">
                            <div class="w-full max-w-xs">
                                <div class="relative inline-block text-center">
                                    <button type="button" onclick="toggleDropdown('menu')" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 z-50" id="options-menu" aria-expanded="true" aria-haspopup="true">
                                        Options
                                    </button>

                                    <div id="dropdown-menu2" class="origin-top-left absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden z-20">
                                        <div class="py-1 text-left" role="none">
                                            <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-edit-2-line pr-4"></i>Edit</a>
                                            <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-chat-check-line pr-4"></i>Aprove</a>
                                            <a class="block px-4 py-2 hover:bg-gray-200" href="#"><i class="ri-delete-bin-6-line pr-4"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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



    <script>
        let openDropdown = null;

        function toggleDropdown(menuId) {
            if (openDropdown && openDropdown !== menuId) {
                document
                    .getElementById("dropdown-" + openDropdown)
                    .classList.add("hidden");
            }
            var dropdownMenu = document.getElementById("dropdown-" + menuId);
            if (dropdownMenu.classList.contains("hidden")) {
                dropdownMenu.classList.remove("hidden");
                openDropdown = menuId;
            } else {
                dropdownMenu.classList.add("hidden");
                openDropdown = null;
            }
        }
        window.addEventListener("click", function(event) {
            if (!event.target.matches("[onclick^='toggleDropdown']")) {
                if (openDropdown) {
                    document.getElementById("dropdown-" + openDropdown).classList.add("hidden");
                    openDropdown = null;
                }
            }
        });
    </script>
    <?= $this->endSection(); ?>