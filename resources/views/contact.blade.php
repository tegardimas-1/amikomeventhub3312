<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-slate-900">
    <!-- Navigation Bar -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <h1 class="text-xl font-semibold text-slate-900">AmikomEventHub</h1>
                <div class="flex gap-1">
                    <a href="/" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Home</a>
                    <a href="/profil" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Profil</a>
                    <a href="/katalog" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Katalog</a>
                    <a href="/bantuan" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Bantuan</a>
                    <a href="/kontak" class="px-3 py-2 text-sm font-medium text-white bg-slate-900 rounded-md hover:bg-slate-800 transition">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-6 lg:px-8 py-12">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold mb-2">Hubungi Kami</h1>
            <p class="text-slate-600">Tim kami siap membantu Anda</p>
        </div>

        <!-- Contact Form and Info Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <!-- Contact Form -->
            <div class="border border-slate-200 rounded-lg p-6">
                <h2 class="font-bold mb-4">Kirim Pesan</h2>
                <form class="space-y-3">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Nama</label>
                        <input type="text" placeholder="Nama Anda" class="w-full px-3 py-2 border border-slate-200 rounded text-sm focus:outline-none focus:border-slate-900 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Email</label>
                        <input type="email" placeholder="Email Anda" class="w-full px-3 py-2 border border-slate-200 rounded text-sm focus:outline-none focus:border-slate-900 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Subject</label>
                        <input type="text" placeholder="Topik" class="w-full px-3 py-2 border border-slate-200 rounded text-sm focus:outline-none focus:border-slate-900 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Pesan</label>
                        <textarea rows="4" placeholder="Pesan..." class="w-full px-3 py-2 border border-slate-200 rounded text-sm focus:outline-none focus:border-slate-900 transition resize-none"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-slate-900 text-white py-2 rounded font-medium text-sm hover:bg-slate-800 transition">Kirim</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-3">
                <div class="border border-slate-200 rounded-lg p-4">
                    <h3 class="font-bold text-sm mb-1">Email</h3>
                    <p class="text-slate-600 text-sm">support@amikomeventhub.com</p>
                </div>
                <div class="border border-slate-200 rounded-lg p-4">
                    <h3 class="font-bold text-sm mb-1">Telepon</h3>
                    <p class="text-slate-600 text-sm">+62 822 XXXX XXXX</p>
                </div>
                <div class="border border-slate-200 rounded-lg p-4">
                    <h3 class="font-bold text-sm mb-1">Alamat</h3>
                    <p class="text-slate-600 text-sm">Jl. Ringroad Utara, Yogyakarta 55283</p>
                </div>
                <div class="border border-slate-200 rounded-lg p-4">
                    <h3 class="font-bold text-sm mb-1">Jam Kerja</h3>
                    <p class="text-slate-600 text-sm">Senin-Jumat 09:00-17:00 WITA</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>