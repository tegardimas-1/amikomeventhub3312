<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bantuan</title>
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
                    <a href="/bantuan" class="px-3 py-2 text-sm font-medium text-white bg-slate-900 rounded-md hover:bg-slate-800 transition">Bantuan</a>
                    <a href="/kontak" class="px-3 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-md transition">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 py-16">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-3">Bantuan & FAQ</h1>
            <p class="text-lg text-slate-600">Temukan jawaban atas pertanyaan umum seputar AmikomEventHub</p>
        </div>

        <!-- FAQs Sections -->
        <div class="space-y-8">
            <!-- Section 1: Umum -->
            <div>
                <h2 class="text-2xl font-bold mb-4">Pertanyaan Umum</h2>
                
                <div class="space-y-3">
                    <!-- FAQ Item 1 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden">
                        <button class="w-full p-4 flex items-center justify-between text-left hover:bg-slate-50 transition">
                            <h3 class="font-medium text-slate-900">Apa itu AmikomEventHub?</h3>
                            <span class="text-slate-600">+</span>
                        </button>
                        <div class="hidden px-4 pb-4 bg-slate-50 border-t border-slate-200">
                            <p class="text-slate-600 text-sm">AmikomEventHub adalah platform untuk mengelola dan mempromosikan berbagai acara di AMIKOM Yogyakarta. Mahasiswa dapat mencari informasi event, mendaftar, dan berinteraksi dengan peserta lainnya.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden">
                        <button class="w-full p-4 flex items-center justify-between text-left hover:bg-slate-50 transition">
                            <h3 class="font-medium text-slate-900">Bagaimana cara mendaftar?</h3>
                            <span class="text-slate-600">+</span>
                        </button>
                        <div class="hidden px-4 pb-4 bg-slate-50 border-t border-slate-200">
                            <p class="text-slate-600 text-sm">Kunjungi halaman login, pilih "Register", isi data pribadi Anda, verifikasi email, dan akun siap digunakan.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden">
                        <button class="w-full p-4 flex items-center justify-between text-left hover:bg-slate-50 transition">
                            <h3 class="font-medium text-slate-900">Apakah gratis mendaftar event?</h3>
                            <span class="text-slate-600">+</span>
                        </button>
                        <div class="hidden px-4 pb-4 bg-slate-50 border-t border-slate-200">
                            <p class="text-slate-600 text-sm">Sebagian besar event gratis untuk mendaftar. Namun beberapa event khusus atau kompetisi mungkin memiliki biaya pendaftaran. Informasi lengkap tersedia di halaman event masing-masing.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Teknis -->
            <div>
                <h2 class="text-2xl font-bold mb-4">Pertanyaan Teknis</h2>
                
                <div class="space-y-3">
                    <!-- FAQ Item 4 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden">
                        <button class="w-full p-4 flex items-center justify-between text-left hover:bg-slate-50 transition">
                            <h3 class="font-medium text-slate-900">Browser mana yang kompatibel?</h3>
                            <span class="text-slate-600">+</span>
                        </button>
                        <div class="hidden px-4 pb-4 bg-slate-50 border-t border-slate-200">
                            <p class="text-slate-600 text-sm">Kompatibel dengan Chrome, Firefox, Safari, dan Edge. Gunakan versi browser terbaru untuk pengalaman terbaik.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden">
                        <button class="w-full p-4 flex items-center justify-between text-left hover:bg-slate-50 transition">
                            <h3 class="font-medium text-slate-900">Bisakah diakses dari smartphone?</h3>
                            <span class="text-slate-600">+</span>
                        </button>
                        <div class="hidden px-4 pb-4 bg-slate-50 border-t border-slate-200">
                            <p class="text-slate-600 text-sm">Ya, dirancang dengan responsive design untuk smartphone, tablet, dan desktop dengan pengalaman optimal di semua perangkat.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden">
                        <button class="w-full p-4 flex items-center justify-between text-left hover:bg-slate-50 transition">
                            <h3 class="font-medium text-slate-900">Lupa password, apa yang harus dilakukan?</h3>
                            <span class="text-slate-600">+</span>
                        </button>
                        <div class="hidden px-4 pb-4 bg-slate-50 border-t border-slate-200">
                            <p class="text-slate-600 text-sm">Klik "Lupa Password" di halaman login, masukkan email terdaftar, cek email untuk link reset, dan ikuti instruksi membuat password baru.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Event & Registrasi -->
            <div>
                <h2 class="text-2xl font-bold mb-4">Event & Registrasi</h2>
                
                <div class="space-y-3">
                    <!-- FAQ Item 7 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden">
                        <button class="w-full p-4 flex items-center justify-between text-left hover:bg-slate-50 transition">
                            <h3 class="font-medium text-slate-900">Bagaimana cara mendaftar event?</h3>
                            <span class="text-slate-600">+</span>
                        </button>
                        <div class="hidden px-4 pb-4 bg-slate-50 border-t border-slate-200">
                            <p class="text-slate-600 text-sm">Kunjungi katalog event, pilih event yang diminati, klik tombol "Daftar", isi data peserta, dan konfirmasi registrasi.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden">
                        <button class="w-full p-4 flex items-center justify-between text-left hover:bg-slate-50 transition">
                            <h3 class="font-medium text-slate-900">Bisakah dibatalkan registrasi?</h3>
                            <span class="text-slate-600">+</span>
                        </button>
                        <div class="hidden px-4 pb-4 bg-slate-50 border-t border-slate-200">
                            <p class="text-slate-600 text-sm">Ya, hingga 3 hari sebelum event. Masuk ke akun, pergi ke "Event Saya", dan klik "Batal Registrasi". Refund memerlukan 5-7 hari kerja.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 9 -->
                    <div class="border border-slate-200 rounded-lg overflow-hidden">
                        <button class="w-full p-4 flex items-center justify-between text-left hover:bg-slate-50 transition">
                            <h3 class="font-medium text-slate-900">Kapan menerima sertifikat?</h3>
                            <span class="text-slate-600">+</span>
                        </button>
                        <div class="hidden px-4 pb-4 bg-slate-50 border-t border-slate-200">
                            <p class="text-slate-600 text-sm">Dikirimkan via email dalam 5-7 hari kerja setelah event berakhir, dengan syarat hadir minimal 80%.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Dukungan -->
            <div>
                <h2 class="text-2xl font-bold mb-4">Dukungan Pelanggan</h2>
                
                <div class="border border-slate-200 rounded-lg overflow-hidden">
                    <button class="w-full p-4 flex items-center justify-between text-left hover:bg-slate-50 transition">
                        <h3 class="font-medium text-slate-900">Bagaimana menghubungi tim dukungan?</h3>
                        <span class="text-slate-600">+</span>
                    </button>
                    <div class="hidden px-4 pb-4 bg-slate-50 border-t border-slate-200">
                        <p class="text-slate-600 text-sm mb-2">Hubungi kami melalui:</p>
                        <ul class="text-slate-600 text-sm space-y-1">
                            <li>• Email: support@amikomeventhub.com</li>
                            <li>• WhatsApp: +62 822 XXX XXXX</li>
                            <li>• Live Chat: Halaman utama</li>
                            <li>• Jam layanan: Senin-Jumat 09:00-17:00 WITA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact CTA -->
        <div class="mt-12 bg-slate-900 text-white rounded-lg p-8 text-center">
            <h3 class="text-2xl font-bold mb-3">Masih ada pertanyaan?</h3>
            <p class="text-slate-300 mb-6">Hubungi tim dukungan kami</p>
            <a href="/kontak" class="inline-block px-8 py-2 bg-white text-slate-900 rounded-md font-medium hover:bg-slate-100 transition">
                Hubungi Kami
            </a>
        </div>
    </div>

    <!-- JavaScript untuk expand/collapse FAQ -->
    <script>
        document.querySelectorAll('.border').forEach(item => {
            const button = item.querySelector('button');
            const content = item.querySelector('div');
            
            if (button && content) {
                button.addEventListener('click', () => {
                    content.classList.toggle('hidden');
                    const icon = button.querySelector('span:last-child');
                    icon.textContent = content.classList.contains('hidden') ? '+' : '−';
                });
            }
        });
    </script>
</body>

</html>
