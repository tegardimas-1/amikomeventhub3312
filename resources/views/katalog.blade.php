<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog Event</title>
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
                    <a href="/katalog" class="px-3 py-2 text-sm font-medium text-white bg-slate-900 rounded-md hover:bg-slate-800 transition">Katalog</a>
                    <a href="/bantuan" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Bantuan</a>
                    <a href="/kontak" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-6 lg:px-8 py-12">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold mb-2">Katalog Event</h1>
            <p class="text-slate-600">Daftar event yang tersedia</p>
        </div>

        <!-- Filter Section -->
        <div class="mb-8 flex flex-wrap gap-2">
            <button class="px-3 py-1 bg-slate-900 text-white rounded text-sm font-medium">Semua</button>
            <button class="px-3 py-1 border border-slate-300 text-slate-700 rounded text-sm font-medium hover:bg-slate-50">Workshop</button>
            <button class="px-3 py-1 border border-slate-300 text-slate-700 rounded text-sm font-medium hover:bg-slate-50">Seminar</button>
            <button class="px-3 py-1 border border-slate-300 text-slate-700 rounded text-sm font-medium hover:bg-slate-50">Kompetisi</button>
        </div>

        <!-- Events List -->
        <div class="space-y-3">
            <!-- Event 1 -->
            <div class="border border-slate-200 rounded-lg p-4 hover:border-slate-300 transition">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex-1">
                        <span class="inline-block bg-slate-100 text-slate-700 px-2 py-1 rounded text-xs font-medium mb-2">Workshop</span>
                        <h3 class="font-bold mb-1">Web Development Mastery</h3>
                        <p class="text-sm text-slate-600 mb-2">Belajar teknologi web terkini menggunakan Laravel dan Tailwind CSS</p>
                        <p class="text-xs text-slate-500">15 Mei 2024 | 09:00 - 16:00 WITA</p>
                    </div>
                    <button class="px-4 py-1 border border-slate-900 text-slate-900 rounded text-sm font-medium hover:bg-slate-900 hover:text-white transition whitespace-nowrap">Daftar</button>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="border border-slate-200 rounded-lg p-4 hover:border-slate-300 transition">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex-1">
                        <span class="inline-block bg-slate-100 text-slate-700 px-2 py-1 rounded text-xs font-medium mb-2">Seminar</span>
                        <h3 class="font-bold mb-1">Digital Innovation Talk</h3>
                        <p class="text-sm text-slate-600 mb-2">Inspirasi dari para pemimpin teknologi tentang masa depan digital</p>
                        <p class="text-xs text-slate-500">22 Mei 2024 | 13:00 - 17:00 WITA</p>
                    </div>
                    <button class="px-4 py-1 border border-slate-900 text-slate-900 rounded text-sm font-medium hover:bg-slate-900 hover:text-white transition whitespace-nowrap">Daftar</button>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="border border-slate-200 rounded-lg p-4 hover:border-slate-300 transition">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex-1">
                        <span class="inline-block bg-slate-100 text-slate-700 px-2 py-1 rounded text-xs font-medium mb-2">Kompetisi</span>
                        <h3 class="font-bold mb-1">Hackathon AMIKOM 2024</h3>
                        <p class="text-sm text-slate-600 mb-2">Kompetisi programming dengan tema inovasi digital</p>
                        <p class="text-xs text-slate-500">05-07 Juni 2024 | Full Day Event</p>
                    </div>
                    <button class="px-4 py-1 border border-slate-900 text-slate-900 rounded text-sm font-medium hover:bg-slate-900 hover:text-white transition whitespace-nowrap">Daftar</button>
                </div>
            </div>

            <!-- Event 4 -->
            <div class="border border-slate-200 rounded-lg p-4 hover:border-slate-300 transition">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex-1">
                        <span class="inline-block bg-slate-100 text-slate-700 px-2 py-1 rounded text-xs font-medium mb-2">Workshop</span>
                        <h3 class="font-bold mb-1">UI/UX Design Workshop</h3>
                        <p class="text-sm text-slate-600 mb-2">Pelajari prinsip design, prototyping, dan user experience</p>
                        <p class="text-xs text-slate-500">19 Juni 2024 | 09:00 - 15:00 WITA</p>
                    </div>
                    <button class="px-4 py-1 border border-slate-900 text-slate-900 rounded text-sm font-medium hover:bg-slate-900 hover:text-white transition whitespace-nowrap">Daftar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
