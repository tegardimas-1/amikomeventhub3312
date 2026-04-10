<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hubungi Kami - AmikomEventHub</title>
    <!-- Menyisipkan Tailwind CSS melalui CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-rose-50 to-pink-100 min-h-screen">
    <!-- Navigation Bar -->
    <nav class="bg-white border-b-2 border-rose-500 shadow-lg sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-rose-600">AmikomEventHub</h1>
                </div>
                <div class="flex gap-2 flex-wrap justify-end">
                    <a href="/" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Home</a>
                    <a href="/profil" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Profil</a>
                    <a href="/katalog" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Katalog</a>
                    <a href="/bantuan" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Bantuan</a>
                    <a href="/kontak" class="px-4 py-2 bg-rose-500 text-white rounded-lg hover:bg-rose-600 transition duration-300 text-sm font-medium">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4">Hubungi Kami</h1>
            <p class="text-lg text-slate-600">Tim kami siap membantu Anda 24/7</p>
        </div>

        <!-- Contact Form and Info Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-slate-800 mb-6">Kirim Pesan</h2>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap</label>
                        <input type="text" placeholder="Masukkan nama Anda" class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-rose-500 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
                        <input type="email" placeholder="Email Anda" class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-rose-500 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Subject</label>
                        <input type="text" placeholder="Topik pertanyaan" class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-rose-500 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Pesan</label>
                        <textarea rows="5" placeholder="Tulis pesan Anda di sini..." class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-rose-500 transition resize-none"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-rose-500 text-white py-3 rounded-lg font-bold hover:bg-rose-600 transition duration-300">Kirim Pesan</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-4">
                <!-- Info Card 1 -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl">📧</div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Email</h3>
                            <p class="text-slate-600">support@amikomeventhub.com</p>
                            <p class="text-slate-600">admin@amikomeventhub.com</p>
                        </div>
                    </div>
                </div>

                <!-- Info Card 2 -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl">📞</div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Telepon</h3>
                            <p class="text-slate-600">+62 822 XXXX XXXX</p>
                            <p class="text-slate-600">(Senin-Jumat, 09:00-17:00 WITA)</p>
                        </div>
                    </div>
                </div>

                <!-- Info Card 3 -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl">📍</div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Alamat</h3>
                            <p class="text-slate-600">Jl. Ringroad Utara, Yogyakarta</p>
                            <p class="text-slate-600">55283, Indonesia</p>
                        </div>
                    </div>
                </div>

                <!-- Info Card 4 -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl">⏰</div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Jam Kerja</h3>
                            <p class="text-slate-600">Senin-Jumat: 09:00 - 17:00</p>
                            <p class="text-slate-600">Sabtu-Minggu: Libur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="bg-gradient-to-r from-rose-500 to-pink-500 rounded-2xl shadow-xl p-8 md:p-12 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ikuti Kami</h2>
            <p class="text-rose-50 mb-8">Dapatkan update terbaru dari AmikomEventHub</p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="#" class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-rose-600 font-bold text-lg hover:bg-rose-50 transition hover:shadow-lg">f</a>
                <a href="#" class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-rose-600 font-bold text-lg hover:bg-rose-50 transition hover:shadow-lg">𝕏</a>
                <a href="#" class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-rose-600 font-bold text-lg hover:bg-rose-50 transition hover:shadow-lg">📷</a>
                <a href="#" class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-rose-600 font-bold text-lg hover:bg-rose-50 transition hover:shadow-lg">▶️</a>
            </div>
        </div>
    </div>
</body>

</html>