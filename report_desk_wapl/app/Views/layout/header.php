<div class="max-sm:pl-3 py-4 flex flex-row justify-between flex-nowrap overflow-hidden">
    <span class="max-sm:text-lg md:ml-56 lg:ml-56 md:text-2xl lg:text-2xl font-bold text-slate-800"><?= $name ?></span>
    <span class="flex flex-row gap-3 mr-4">
        <span class="flex flex-row gap-1 bg-slate-200 rounded-full max-sm:w-7 max-sm:h-7 md:px-3 items-center justify-center">
            <i class="text-slate-800 ri-search-2-line max-sm:text-sm"></i>
            <form action="" method="post" class="max-sm:hidden">
                <input type="text" class="placeholder:text-sm bg-transparent active:outline-none focus:outline-none md:w-40" placeholder="Hey, cari semua disini . . .">
            </form>
        </span>
        <span class="flex flex-row items-center align-middle gap-2">
            <span id="greet" class="md:flex md:flex-col lg:flex lg:flex-col max-sm:hidden">
                <span>Denny irawan</span>
                <span class="text-xs">Pengoprek hamdal</span>
            </span>
            <span id="image" class="max-sm:w-7 max-sm:h-7 md:w-10 md:h-10 lg:w-10 lg:h-10 rounded-full bg-slate-200 flex justify-center align-middle items-center">
                <i class="ri-user-5-fill max-sm:text-lg md:text-2xl text-slate-500"></i>
            </span>
        </span>
        <span id="hamburgerMenu" class="flex flex-row gap-1 bg-slate-200 rounded-full max-sm:w-7 max-sm:h-7 md:hidden items-center justify-center">
            <i class="text-slate-800 ri-menu-2-line max-sm:text-sm"></i>
        </span>
    </span>
</div>