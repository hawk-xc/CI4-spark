<link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet">

<?php if (session()->has('message')) : ?>
	<div class="p-2 bg-sky-200 rounded-md border border-sky-500 ">
		<i class="ri-information-2-line"></i> <?= session('message') ?>
	</div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
	<div class="p-2 bg-red-300 rounded-md border border-red-900 ">
		<i class="ri-information-2-line"></i> <?= session('error') ?>
	</div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
	<ul class="p-2 bg-red-300 rounded-md border border-red-900 ">
		<?php foreach (session('errors') as $error) : ?>
			<li><i class="ri-information-2-line"></i> <?= $error ?></li>
		<?php endforeach ?>
	</ul>
<?php endif ?>