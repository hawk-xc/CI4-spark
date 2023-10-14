<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- <link rel="stylesheet" href="./tailwind/output.css"> -->
    <link rel="stylesheet" href="<?= base_url('tailwind/output.css') ?>">


</head>

<body class="bg-gray-100">
    <header class="bg-slate-800 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-semibold">Report Desk CS</h1>
            <p class="text-lg">Kami siap melayani Anda!</p>
        </div>
    </header>

    <section class="container mx-auto py-8">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Contact Form</h2>
            <form action="submit_contact_form" method="post">
                <div class="mb-4">
                    <label for="name" class="block text-gray-600">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-600">Pesan Statistik</label>
                    <textarea id="message" name="message" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" rows="4" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <footer class="bg-gray-200 py-4 ">
        <div class="container mx-auto text-center text-gray-600">
            &copy; <?= date('Y') ?>Report Desk App
        </div>
    </footer>
</body>

</html>