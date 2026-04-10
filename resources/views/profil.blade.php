<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Praktikan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 min-h-screen">
    <!-- Navigation Bar -->
    <nav class="bg-slate-950 border-b-2 border-indigo-600 shadow-lg sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-indigo-400">AmikomEventHub</h1>
                </div>
                <div class="flex gap-2 flex-wrap justify-end">
                    <a href="/" class="px-4 py-2 bg-slate-700 text-white rounded-lg hover:bg-slate-600 transition duration-300 text-sm">Home</a>
                    <a href="/profil" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-300 text-sm">Profil</a>
                    <a href="/katalog" class="px-4 py-2 bg-slate-700 text-white rounded-lg hover:bg-slate-600 transition duration-300 text-sm">Katalog</a>
                    <a href="/bantuan" class="px-4 py-2 bg-slate-700 text-white rounded-lg hover:bg-slate-600 transition duration-300 text-sm">Bantuan</a>
                    <a href="/kontak" class="px-4 py-2 bg-slate-700 text-white rounded-lg hover:bg-slate-600 transition duration-300 text-sm">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Main Profile Card -->
            <div class="md:col-span-2">
                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                    <div class="bg-gradient-to-r from-indigo-600 to-blue-600 h-32"></div>
                    <div class="px-8 pb-8">
                        <div class="flex flex-col items-center -mt-16 mb-6">
                            <div class="w-32 h-32 bg-gradient-to-br from-indigo-400 to-blue-500 rounded-full border-4 border-white shadow-lg flex items-center justify-center">
                                <span class="text-5xl text-white font-bold">👨‍💻</span>
                            </div>
                        </div>
                        <h2 class="text-3xl font-bold text-center text-slate-800 mb-2">Praktikan AmikomEventHub</h2>
                        <p class="text-center text-indigo-600 font-semibold mb-6">Full Stack Web Developer</p>
                        
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="bg-slate-100 rounded-lg p-4 border-l-4 border-indigo-600">
                                <p class="text-sm text-slate-600">Nama Kampus</p>
                                <p class="text-lg font-bold text-slate-800">AMIKOM Yogyakarta</p>
                            </div>
                            <div class="bg-slate-100 rounded-lg p-4 border-l-4 border-blue-600">
                                <p class="text-sm text-slate-600">Program</p>
                                <p class="text-lg font-bold text-slate-800">Teknik Informatika</p>
                            </div>
                            <div class="bg-slate-100 rounded-lg p-4 border-l-4 border-purple-600">
                                <p class="text-sm text-slate-600">Tahun</p>
                                <p class="text-lg font-bold text-slate-800">2024 - 2025</p>
                            </div>
                            <div class="bg-slate-100 rounded-lg p-4 border-l-4 border-pink-600">
                                <p class="text-sm text-slate-600">Status</p>
                                <p class="text-lg font-bold text-slate-800">Aktif</p>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-slate-800 mb-4">Tentang Saya</h3>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            Seorang praktikan yang bersemangat dalam mengembangkan aplikasi web modern. 
                            Memiliki passion tinggi dalam mempelajari teknologi terbaru di bidang web development 
                            khususnya Laravel, Tailwind CSS, dan JavaScript. Berkomitmen untuk menciptakan 
                            solusi digital yang berkualitas dan user-friendly untuk aplikasi AmikomEventHub.
                        </p>

                        <h3 class="text-xl font-bold text-slate-800 mb-4">Keahlian</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-indigo-100 text-indigo-800 px-4 py-2 rounded-full text-sm font-semibold">PHP</span>
                            <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold">Laravel</span>
                            <span class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-semibold">JavaScript</span>
                            <span class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold">Tailwind CSS</span>
                            <span class="bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold">MySQL</span>
                            <span class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-semibold">HTML/CSS</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Info Card -->
            <div class="md:col-span-1">
                <div class="bg-white rounded-2xl shadow-2xl p-8 sticky top-24">
                    <h3 class="text-xl font-bold text-slate-800 mb-6">Informasi Kontak</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="text-2xl">📧</div>
                            <div>
                                <p class="text-sm text-slate-600 font-semibold">Email</p>
                                <p class="text-slate-800">praktikan@amikom.ac.id</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="text-2xl">📞</div>
                            <div>
                                <p class="text-sm text-slate-600 font-semibold">Telepon</p>
                                <p class="text-slate-800">+62 822 XXX XXXX</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="text-2xl">📍</div>
                            <div>
                                <p class="text-sm text-slate-600 font-semibold">Lokasi</p>
                                <p class="text-slate-800">Yogyakarta, Indonesia</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="text-2xl">🌐</div>
                            <div>
                                <p class="text-sm text-slate-600 font-semibold">Portfolio</p>
                                <a href="#" class="text-indigo-600 hover:text-indigo-800 transition">portfolio.example.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-8 border-t-2 border-slate-200">
                        <h4 class="font-bold text-slate-800 mb-4">Media Sosial</h4>
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center text-white hover:bg-indigo-700 transition">
                                <span class="text-lg">f</span>
                            </a>
                            <a href="#" class="w-10 h-10 bg-sky-400 rounded-lg flex items-center justify-center text-white hover:bg-sky-500 transition">
                                <span class="text-lg">𝕏</span>
                            </a>
                            <a href="#" class="w-10 h-10 bg-pink-600 rounded-lg flex items-center justify-center text-white hover:bg-pink-700 transition">
                                <span class="text-lg">📷</span>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center text-white hover:bg-gray-800 transition">
                                <span class="text-lg">🔗</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
