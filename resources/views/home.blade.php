<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AmikomEventHub - Platform Event AMIKOM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-slate-800">
    <!-- Navigation Bar -->
    <nav class="bg-white border-b-2 border-indigo-600 shadow-lg sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-indigo-600">AmikomEventHub</h1>
                </div>
                <div class="flex gap-2 flex-wrap justify-end">
                    <a href="/" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-300 text-sm font-medium">Home</a>
                    <a href="/profil" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Profil</a>
                    <a href="/katalog" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Katalog</a>
                    <a href="/bantuan" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Bantuan</a>
                    <a href="/kontak" class="px-4 py-2 bg-slate-200 text-slate-800 rounded-lg hover:bg-slate-300 transition duration-300 text-sm font-medium">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Temukan Event Terbaik di AMIKOM
                    </h1>
                    <p class="text-xl text-indigo-100 mb-8">
                        Platform terpadu untuk mengelola, mempromosikan, dan menghadiri berbagai acara menarik dari AMIKOM Yogyakarta
                    </p>
                    <div class="flex gap-4 flex-wrap">
                        <a href="/katalog" class="px-8 py-4 bg-white text-indigo-600 rounded-lg font-bold hover:bg-indigo-50 transition shadow-lg">
                            Jelajahi Event
                        </a>
                        <a href="/kontak" class="px-8 py-4 bg-indigo-800 text-white rounded-lg font-bold hover:bg-indigo-900 transition border-2 border-white">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div class="text-6xl">🎉</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12">Fitur Unggulan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-2xl transition hover:-translate-y-2">
                    <div class="text-5xl mb-4">📅</div>
                    <h3 class="text-2xl font-bold mb-3">Event Management</h3>
                    <p class="text-slate-600">Kelola event dengan mudah, dari pembuatan hingga evaluasi. Pantau peserta secara real-time.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-2xl transition hover:-translate-y-2">
                    <div class="text-5xl mb-4">👥</div>
                    <h3 class="text-2xl font-bold mb-3">Community Engagement</h3>
                    <p class="text-slate-600">Berinteraksi dengan komunitas, berbagi pengalaman, dan membangun jaringan profesional.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-2xl transition hover:-translate-y-2">
                    <div class="text-5xl mb-4">🏆</div>
                    <h3 class="text-2xl font-bold mb-3">Sertifikasi</h3>
                    <p class="text-slate-600">Dapatkan sertifikat resmi setelah mengikuti event. Tingkatkan portfolio profesional Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Categories Section -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12">Kategori Event</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <a href="/katalog" class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-8 text-white text-center hover:shadow-xl transition hover:-translate-y-2">
                    <div class="text-4xl mb-3">💻</div>
                    <h3 class="font-bold text-lg">Workshop</h3>
                    <p class="text-sm opacity-90">Pelatihan teknis dan hands-on</p>
                </a>

                <a href="/katalog" class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-8 text-white text-center hover:shadow-xl transition hover:-translate-y-2">
                    <div class="text-4xl mb-3">🎤</div>
                    <h3 class="font-bold text-lg">Seminar</h3>
                    <p class="text-sm opacity-90">Diskusi dan sharing pengetahuan</p>
                </a>

                <a href="/katalog" class="bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-8 text-white text-center hover:shadow-xl transition hover:-translate-y-2">
                    <div class="text-4xl mb-3">🤝</div>
                    <h3 class="font-bold text-lg">Networking</h3>
                    <p class="text-sm opacity-90">Membangun koneksi profesional</p>
                </a>

                <a href="/katalog" class="bg-gradient-to-br from-red-500 to-red-600 rounded-2xl p-8 text-white text-center hover:shadow-xl transition hover:-translate-y-2">
                    <div class="text-4xl mb-3">🏆</div>
                    <h3 class="font-bold text-lg">Kompetisi</h3>
                    <p class="text-sm opacity-90">Kesempatan untuk berkompetisi</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-600 to-blue-600 text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <h3 class="text-5xl font-bold mb-2">500+</h3>
                    <p class="text-xl opacity-90">Event Terselenggara</p>
                </div>
                <div>
                    <h3 class="text-5xl font-bold mb-2">10K+</h3>
                    <p class="text-xl opacity-90">Peserta Aktif</p>
                </div>
                <div>
                    <h3 class="text-5xl font-bold mb-2">98%</h3>
                    <p class="text-xl opacity-90">Kepuasan Pengguna</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12">Testimoni Pengguna</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-indigo-400 to-blue-500 rounded-full"></div>
                        <div>
                            <h4 class="font-bold">Budi Santoso</h4>
                            <p class="text-sm text-slate-600">Mahasiswa Teknik Informatika</p>
                        </div>
                    </div>
                    <div class="flex gap-1 mb-3">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="text-slate-600">"AmikomEventHub sangat memudahkan saya untuk menemukan dan mengikuti event yang relevan dengan minat saya. Interface-nya intuitif dan responsif!"</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full"></div>
                        <div>
                            <h4 class="font-bold">Siti Nurhaliza</h4>
                            <p class="text-sm text-slate-600">Mahasiswa Sistem Informasi</p>
                        </div>
                    </div>
                    <div class="flex gap-1 mb-3">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="text-slate-600">"Berkualitas tinggi dan sangat membantu dalam mencari berbagai event. Sertifikat yang diterima juga sangat berguna untuk portfolio saya."</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full"></div>
                        <div>
                            <h4 class="font-bold">Ahmad Rizki</h4>
                            <p class="text-sm text-slate-600">Alumni & Professional</p>
                        </div>
                    </div>
                    <div class="flex gap-1 mb-3">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p class="text-slate-600">"Platform yang inovatif dan well-designed. Saya bisa dengan mudah mengelola dan memantau peserta event yang saya selenggarakan."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-600 to-blue-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Siap Memulai?</h2>
            <p class="text-xl text-indigo-100 mb-8">Bergabunglah dengan ribuan pengguna yang telah memanfaatkan AmikomEventHub</p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="/katalog" class="px-8 py-4 bg-white text-indigo-600 rounded-lg font-bold hover:bg-indigo-50 transition">
                    Lihat Event
                </a>
                <a href="/kontak" class="px-8 py-4 bg-indigo-800 text-white rounded-lg font-bold hover:bg-indigo-900 transition border-2 border-white">
                    Hubungi Tim Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="font-bold text-white mb-4">AmikomEventHub</h4>
                    <p class="text-sm">Platform manajemen event terpadu untuk AMIKOM Yogyakarta</p>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Menu</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/" class="hover:text-white transition">Home</a></li>
                        <li><a href="/katalog" class="hover:text-white transition">Katalog</a></li>
                        <li><a href="/bantuan" class="hover:text-white transition">Bantuan</a></li>
                        <li><a href="/kontak" class="hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Informasi</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/profil" class="hover:text-white transition">Profil Praktikan</a></li>
                        <li><a href="#" class="hover:text-white transition">Tentang</a></li>
                        <li><a href="#" class="hover:text-white transition">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-white transition">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Kontak</h4>
                    <p class="text-sm">📧 support@amikomeventhub.com</p>
                    <p class="text-sm">📞 +62 822 XXXX XXXX</p>
                    <p class="text-sm">📍 Yogyakarta, Indonesia</p>
                </div>
            </div>
            <hr class="border-slate-700 mb-8">
            <div class="text-center text-sm">
                <p>&copy; 2024 AmikomEventHub. All rights reserved. Developed with ❤️</p>
            </div>
        </div>
    </footer>
</body>

</html>
