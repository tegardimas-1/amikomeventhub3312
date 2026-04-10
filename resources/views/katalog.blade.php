<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog Event - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">
    <!-- Navigation Bar -->
    <nav class="bg-white border-b-2 border-amber-500 shadow-lg sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-amber-600">AmikomEventHub</h1>
                </div>
                <div class="flex gap-2 flex-wrap justify-end">
                    <a href="/" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Home</a>
                    <a href="/profil" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Profil</a>
                    <a href="/katalog" class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-600 transition duration-300 text-sm font-medium">Katalog</a>
                    <a href="/bantuan" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Bantuan</a>
                    <a href="/kontak" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4">Katalog Event</h1>
            <p class="text-lg text-slate-600">Jelajahi berbagai acara menarik yang kami selenggarakan di AMIKOM</p>
        </div>

        <!-- Filter Section -->
        <div class="mb-8 flex flex-wrap gap-4 justify-center">
            <button class="px-6 py-2 bg-amber-500 text-white rounded-full hover:bg-amber-600 transition font-semibold">Semua</button>
            <button class="px-6 py-2 bg-white text-slate-700 border-2 border-amber-500 rounded-full hover:bg-amber-50 transition font-semibold">Workshop</button>
            <button class="px-6 py-2 bg-white text-slate-700 border-2 border-slate-300 rounded-full hover:bg-slate-50 transition font-semibold">Seminar</button>
            <button class="px-6 py-2 bg-white text-slate-700 border-2 border-slate-300 rounded-full hover:bg-slate-50 transition font-semibold">Networking</button>
            <button class="px-6 py-2 bg-white text-slate-700 border-2 border-slate-300 rounded-full hover:bg-slate-50 transition font-semibold">Kompetisi</button>
        </div>

        <!-- Events Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Event Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-r from-blue-500 to-cyan-500 h-48 flex items-center justify-center">
                    <span class="text-6xl">💻</span>
                </div>
                <div class="p-6">
                    <div class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-bold mb-3">Workshop</div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Web Development Mastery</h3>
                    <p class="text-slate-600 text-sm mb-4">Belajar langsung dari praktisi industri tentang teknologi web terkini menggunakan Laravel dan Tailwind CSS.</p>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-2">
                        <span>📅</span>
                        <span>15 Mei 2024</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-4">
                        <span>⏰</span>
                        <span>09:00 - 16:00 WITA</span>
                    </div>
                    <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition font-semibold">Daftar Sekarang</button>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 h-48 flex items-center justify-center">
                    <span class="text-6xl">🎤</span>
                </div>
                <div class="p-6">
                    <div class="inline-block bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-xs font-bold mb-3">Seminar</div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Digital Innovation Talk</h3>
                    <p class="text-slate-600 text-sm mb-4">Mendengarkan inspirasi dari para pemimpin teknologi tentang masa depan digital dan transformasi bisnis.</p>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-2">
                        <span>📅</span>
                        <span>22 Mei 2024</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-4">
                        <span>⏰</span>
                        <span>13:00 - 17:00 WITA</span>
                    </div>
                    <button class="w-full bg-purple-500 text-white py-2 rounded-lg hover:bg-purple-600 transition font-semibold">Daftar Sekarang</button>
                </div>
            </div>

            <!-- Event Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-r from-green-500 to-emerald-500 h-48 flex items-center justify-center">
                    <span class="text-6xl">🤝</span>
                </div>
                <div class="p-6">
                    <div class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-bold mb-3">Networking</div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Tech Community Meetup</h3>
                    <p class="text-slate-600 text-sm mb-4">Bertemu dengan komunitas developer lokal, networking, dan berbagi pengalaman dalam dunia teknologi.</p>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-2">
                        <span>📅</span>
                        <span>29 Mei 2024</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-4">
                        <span>⏰</span>
                        <span>18:00 - 21:00 WITA</span>
                    </div>
                    <button class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition font-semibold">Daftar Sekarang</button>
                </div>
            </div>

            <!-- Event Card 4 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-r from-red-500 to-orange-500 h-48 flex items-center justify-center">
                    <span class="text-6xl">🏆</span>
                </div>
                <div class="p-6">
                    <div class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-xs font-bold mb-3">Kompetisi</div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Hackathon AMIKOM 2024</h3>
                    <p class="text-slate-600 text-sm mb-4">Kompetisi programming dengan tema inovasi digital. Hadiah jutaan rupiah menanti para pemenang.</p>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-2">
                        <span>📅</span>
                        <span>05-07 Juni 2024</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-4">
                        <span>⏰</span>
                        <span>Full Day Event</span>
                    </div>
                    <button class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition font-semibold">Daftar Sekarang</button>
                </div>
            </div>

            <!-- Event Card 5 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-r from-indigo-500 to-violet-500 h-48 flex items-center justify-center">
                    <span class="text-6xl">📚</span>
                </div>
                <div class="p-6">
                    <div class="inline-block bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-xs font-bold mb-3">Workshop</div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Mobile App Development</h3>
                    <p class="text-slate-600 text-sm mb-4">Workshop intensif membuat aplikasi mobile dengan Flutter dan native Android untuk pemula hingga advanced.</p>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-2">
                        <span>📅</span>
                        <span>12 Juni 2024</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-4">
                        <span>⏰</span>
                        <span>10:00 - 16:00 WITA</span>
                    </div>
                    <button class="w-full bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600 transition font-semibold">Daftar Sekarang</button>
                </div>
            </div>

            <!-- Event Card 6 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-r from-yellow-500 to-amber-500 h-48 flex items-center justify-center">
                    <span class="text-6xl">🎨</span>
                </div>
                <div class="p-6">
                    <div class="inline-block bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-bold mb-3">Workshop</div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">UI/UX Design Workshop</h3>
                    <p class="text-slate-600 text-sm mb-4">Pelajari prinsip design, prototyping, dan user experience dari desainer profesional industri.</p>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-2">
                        <span>📅</span>
                        <span>19 Juni 2024</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-600 text-sm mb-4">
                        <span>⏰</span>
                        <span>09:00 - 15:00 WITA</span>
                    </div>
                    <button class="w-full bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600 transition font-semibold">Daftar Sekarang</button>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-amber-500 rounded-2xl shadow-xl p-8 md:p-12 text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Jangan Lewatkan Event Kami!</h2>
            <p class="text-amber-50 text-lg mb-6">Daftarkan email Anda untuk mendapatkan notifikasi event terbaru</p>
            <div class="flex gap-3 max-w-md mx-auto">
                <input type="email" placeholder="Masukkan email Anda" class="flex-1 px-4 py-3 rounded-lg focus:outline-none">
                <button class="px-6 py-3 bg-white text-amber-600 rounded-lg font-bold hover:bg-amber-50 transition">Subscribe</button>
            </div>
        </div>
    </div>
</body>

</html>
