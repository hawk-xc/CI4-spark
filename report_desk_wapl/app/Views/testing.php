<?= $this->extend('./particle/dashboardParticle.php'); ?>
<?= $this->section('content'); ?>
<div class="p-10">

    <div class="dropdown inline-block relative group">sd
        <i class="arrow ri-arrow-down-s-line duration-150 transition-all group-hover:rotate-180 group-hover:duration-150 group-hover:transition-all"></i>
        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
            <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">One</a></li>
            <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Two</a></li>
            <li class=""><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Three is the magic number</a></li>
        </ul>
    </div>

    <div>
        <form action="ss">
            <label for="lang">language</label>
            <select name="language" id="lang" class="selection:rotate-90">
                <option class="px-2 bg-blue-400 mx-2 py-3" value="java">java</option>
                <option class="px-2 bg-blue-400 mx-2 py-3" value="python">python</option>
                <option class="px-2 bg-blue-400 mx-2 py-3" value="typescript">typescript</option>
                <option class="px-2 bg-blue-400 mx-2 py-3" value="php">php</option>
            </select>
            <?= d($faker) ?>
        </form>
    </div>

</div>
<?= $this->endSection() ?>