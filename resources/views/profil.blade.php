<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Praktikan</title>
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
                    <a href="/profil" class="px-3 py-2 text-sm font-medium text-white bg-slate-900 rounded-md hover:bg-slate-800 transition">Profil</a>
                    <a href="/katalog" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Katalog</a>
                    <a href="/bantuan" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Bantuan</a>
                    <a href="/kontak" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Main Profile Card -->
            <div class="md:col-span-2">
                <div class="bg-white border border-slate-200 rounded-lg">
                    <div class="h-20 bg-slate-100"></div>
                    <div class="px-6 pb-6">
                        <div class="flex flex-col items-center -mt-10 mb-4">
                            <div class="w-20 h-20 bg-slate-200 rounded-full border-4 border-white flex items-center justify-center text-2xl font-bold">A</div>
                        </div>
                        <h2 class="text-xl font-bold text-center mb-1">AmikomEventHub</h2>
                        
                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div class="border border-slate-200 rounded p-3">
                                <p class="text-xs text-slate-600">Kampus</p>
                                <p class="font-semibold text-sm">AMIKOM</p>
                            </div>
                            <div class="border border-slate-200 rounded p-3">
                                <p class="text-xs text-slate-600">Program</p>
                                <p class="font-semibold text-sm">Sistem Informasi</p>
                            </div>
                            <div class="border border-slate-200 rounded p-3">
                                <p class="text-xs text-slate-600">Tahun</p>
                                <p class="font-semibold text-sm">2024-2025</p>
                            </div>
                            <div class="border border-slate-200 rounded p-3">
                                <p class="text-xs text-slate-600">Status</p>
                                <p class="font-semibold text-sm">Aktif</p>
                            </div>
                        </div>

                        <h3 class="font-bold mb-2 text-sm">Tentang</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            bersemangat dalam mengembangkan aplikasi web modern dengan passion pada teknologi terbaru termasuk Laravel, Tailwind CSS, dan JavaScript.
                        </p>

                        <h3 class="font-bold mb-2 text-sm">Keahlian</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-slate-100 text-slate-800 px-2 py-1 rounded text-xs">PHP</span>
                            <span class="bg-slate-100 text-slate-800 px-2 py-1 rounded text-xs">Laravel</span>
                            <span class="bg-slate-100 text-slate-800 px-2 py-1 rounded text-xs">JavaScript</span>
                            <span class="bg-slate-100 text-slate-800 px-2 py-1 rounded text-xs">Tailwind</span>
                            <span class="bg-slate-100 text-slate-800 px-2 py-1 rounded text-xs">MySQL</span>
                            <span class="bg-slate-100 text-slate-800 px-2 py-1 rounded text-xs">HTML/CSS</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Info -->
            <div>
                <div class="bg-white border border-slate-200 rounded-lg p-4 space-y-4">
                    <h3 class="font-bold text-sm">Kontak</h3>
                    
                    <div>
                        <p class="text-xs text-slate-600 font-medium">Email</p>
                        <p class="text-sm text-slate-900">tegardimaz111@students.amikom.ac.id</p>
                    </div>

                    <div>
                        <p class="text-xs text-slate-600 font-medium">Telepon</p>
                        <p class="text-sm text-slate-900">+62 822 XXX XXXX</p>
                    </div>

                    <div>
                        <p class="text-xs text-slate-600 font-medium">Lokasi</p>
                        <p class="text-sm text-slate-900">Yogyakarta, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
