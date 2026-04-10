<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AmikomEventHub - Platform Event AMIKOM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-slate-900">
    <!-- Navigation Bar -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <h1 class="text-xl font-semibold text-slate-900">AmikomEventHub</h1>
                <div class="flex gap-1">
                    <a href="/" class="px-3 py-2 text-sm font-medium text-white bg-slate-900 rounded-md hover:bg-slate-800 transition">Home</a>
                    <a href="/profil" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Profil</a>
                    <a href="/katalog" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Katalog</a>
                    <a href="/bantuan" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Bantuan</a>
                    <a href="/kontak" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-slate-900 text-white py-24">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">Temukan Event Terbaik di AMIKOM</h1>
                    <p class="text-lg text-slate-300 mb-8 leading-relaxed">Platform terpadu untuk mengelola, mempromosikan, dan menghadiri berbagai acara menarik dari AMIKOM Yogyakarta.</p>
                    <div class="flex gap-4">
                        <a href="/katalog" class="px-6 py-3 bg-white text-slate-900 font-medium rounded-md hover:bg-slate-100 transition">Jelajahi Event</a>
                        <a href="/kontak" class="px-6 py-3 border border-white text-white font-medium rounded-md hover:bg-slate-800 transition">Hubungi Kami</a>
                    </div>
                </div>
                <div class="text-6xl text-center opacity-10">📅</div>
            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <section class="py-16 bg-white">
        <div class="max-w-2xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Siap Memulai?</h2>
            <p class="text-slate-600 mb-8">Bergabunglah dengan ribuan pengguna yang telah memanfaatkan AmikomEventHub</p>
            <div class="flex gap-4 justify-center">
                <a href="/katalog" class="px-6 py-3 bg-slate-900 text-white font-medium rounded-md hover:bg-slate-800 transition">Lihat Event</a>
                <a href="/kontak" class="px-6 py-3 border border-slate-900 text-slate-900 font-medium rounded-md hover:bg-slate-900 hover:text-white transition">Hubungi</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="font-semibold text-white mb-3">AmikomEventHub</h4>
                    <p class="text-sm">Platform manajemen event untuk AMIKOM Yogyakarta</p>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-3">Navigation</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/" class="hover:text-white transition">Home</a></li>
                        <li><a href="/katalog" class="hover:text-white transition">Event</a></li>
                        <li><a href="/bantuan" class="hover:text-white transition">Bantuan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-3">Info</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/profil" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="/kontak" class="hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-3">Contact</h4>
                    <p class="text-sm">support@amikomeventhub.com</p>
                    <p class="text-sm">+62 822 XXXX XXXX</p>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 text-center text-sm">
                <p>&copy; 2024 AmikomEventHub. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
