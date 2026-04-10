<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bantuan & FAQ - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-900 to-slate-800 min-h-screen">
    <!-- Navigation Bar -->
    <nav class="bg-slate-950 border-b-2 border-emerald-500 shadow-lg sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-emerald-400">AmikomEventHub</h1>
                </div>
                <div class="flex gap-2 flex-wrap justify-end">
                    <a href="/" class="px-4 py-2 bg-slate-700 text-white rounded-lg hover:bg-slate-600 transition duration-300 text-sm font-medium">Home</a>
                    <a href="/profil" class="px-4 py-2 bg-slate-700 text-white rounded-lg hover:bg-slate-600 transition duration-300 text-sm font-medium">Profil</a>
                    <a href="/katalog" class="px-4 py-2 bg-slate-700 text-white rounded-lg hover:bg-slate-600 transition duration-300 text-sm font-medium">Katalog</a>
                    <a href="/bantuan" class="px-4 py-2 bg-emerald-500 text-white rounded-lg hover:bg-emerald-600 transition duration-300 text-sm font-medium">Bantuan</a>
                    <a href="/kontak" class="px-4 py-2 bg-slate-700 text-white rounded-lg hover:bg-slate-600 transition duration-300 text-sm font-medium">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Bantuan & FAQ</h1>
            <p class="text-lg text-slate-300">Temukan jawaban atas pertanyaan-pertanyaan umum seputar AmikomEventHub</p>
        </div>

        <!-- Search Bar -->
        <div class="mb-12">
            <div class="relative">
                <input type="text" placeholder="Cari pertanyaan..." class="w-full px-6 py-4 rounded-xl bg-slate-800 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 border border-slate-700">
                <span class="absolute right-4 top-4 text-2xl">🔍</span>
            </div>
        </div>

        <!-- FAQs Sections -->
        <div class="space-y-6">
            <!-- Section 1: Umum -->
            <div>
                <h2 class="text-2xl font-bold text-emerald-400 mb-4 flex items-center gap-2">
                    <span class="text-3xl">❓</span> Pertanyaan Umum
                </h2>
                
                <!-- FAQ Item 1 -->
                <div class="bg-slate-800 rounded-xl overflow-hidden mb-4 border border-slate-700 hover:border-emerald-500 transition">
                    <button class="w-full p-6 flex items-center justify-between hover:bg-slate-750 transition text-left">
                        <h3 class="text-lg font-semibold text-white">Apa itu AmikomEventHub?</h3>
                        <span class="text-2xl text-emerald-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-slate-300 bg-slate-900 border-t border-slate-700">
                        <p>AmikomEventHub adalah platform yang dirancang khusus untuk mengelola, mempromosikan, dan memfasilitasi berbagai acara yang diadakan oleh AMIKOM Yogyakarta. Melalui platform ini, mahasiswa dan komunitas dapat dengan mudah mencari informasi event, mendaftar, dan berinteraksi dengan peserta lainnya.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-slate-800 rounded-xl overflow-hidden mb-4 border border-slate-700 hover:border-emerald-500 transition">
                    <button class="w-full p-6 flex items-center justify-between hover:bg-slate-750 transition text-left">
                        <h3 class="text-lg font-semibold text-white">Bagaimana cara mendaftar di AmikomEventHub?</h3>
                        <span class="text-2xl text-emerald-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-slate-300 bg-slate-900 border-t border-slate-700">
                        <p>Untuk mendaftar, Anda perlu:</p>
                        <ol class="list-decimal list-inside mt-3 space-y-2">
                            <li>Kunjungi halaman login dan pilih opsi "Register"</li>
                            <li>Isi data pribadi Anda yang akurat</li>
                            <li>Verifikasi email Anda</li>
                            <li>Akun Anda siap digunakan!</li>
                        </ol>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-slate-800 rounded-xl overflow-hidden mb-4 border border-slate-700 hover:border-emerald-500 transition">
                    <button class="w-full p-6 flex items-center justify-between hover:bg-slate-750 transition text-left">
                        <h3 class="text-lg font-semibold text-white">Apakah gratis untuk mendaftar event?</h3>
                        <span class="text-2xl text-emerald-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-slate-300 bg-slate-900 border-t border-slate-700">
                        <p>Sebagian besar event yang kami selenggarakan adalah gratis untuk didaftar oleh mahasiswa AMIKOM. Namun, beberapa event khusus atau kompetisi mungkin memiliki biaya pendaftaran atau hadiah yang memerlukan kontribusi finansial. Informasi lengkap akan tertera di halaman event masing-masing.</p>
                    </div>
                </div>
            </div>

            <!-- Section 2: Teknis -->
            <div class="mt-10">
                <h2 class="text-2xl font-bold text-blue-400 mb-4 flex items-center gap-2">
                    <span class="text-3xl">⚙️</span> Pertanyaan Teknis
                </h2>

                <!-- FAQ Item 4 -->
                <div class="bg-slate-800 rounded-xl overflow-hidden mb-4 border border-slate-700 hover:border-blue-500 transition">
                    <button class="w-full p-6 flex items-center justify-between hover:bg-slate-750 transition text-left">
                        <h3 class="text-lg font-semibold text-white">Brower apa yang perlu saya gunakan?</h3>
                        <span class="text-2xl text-blue-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-slate-300 bg-slate-900 border-t border-slate-700">
                        <p>AmikomEventHub kompatibel dengan semua browser modern seperti Chrome, Firefox, Safari, dan Edge. Kami merekomendasikan menggunakan versi browser terbaru untuk pengalaman terbaik.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-slate-800 rounded-xl overflow-hidden mb-4 border border-slate-700 hover:border-blue-500 transition">
                    <button class="w-full p-6 flex items-center justify-between hover:bg-slate-750 transition text-left">
                        <h3 class="text-lg font-semibold text-white">Bisakah saya akses dari smartphone?</h3>
                        <span class="text-2xl text-blue-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-slate-300 bg-slate-900 border-t border-slate-700">
                        <p>Ya! AmikomEventHub dirancang dengan responsive design sehingga dapat diakses dengan sempurna dari smartphone, tablet, dan desktop. Pengalaman pengguna akan optimal di semua perangkat.</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="bg-slate-800 rounded-xl overflow-hidden mb-4 border border-slate-700 hover:border-blue-500 transition">
                    <button class="w-full p-6 flex items-center justify-between hover:bg-slate-750 transition text-left">
                        <h3 class="text-lg font-semibold text-white">Apa yang harus saya lakukan jika lupa password?</h3>
                        <span class="text-2xl text-blue-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-slate-300 bg-slate-900 border-t border-slate-700">
                        <p>Jika Anda lupa password, ikuti langkah berikut:</p>
                        <ol class="list-decimal list-inside mt-3 space-y-2">
                            <li>Klik tombol "Lupa Password" di halaman login</li>
                            <li>Masukkan alamat email terdaftar Anda</li>
                            <li>Cek email untuk link reset password</li>
                            <li>Ikuti instruksi untuk membuat password baru</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Section 3: Event & Registrasi -->
            <div class="mt-10">
                <h2 class="text-2xl font-bold text-purple-400 mb-4 flex items-center gap-2">
                    <span class="text-3xl">🎉</span> Event & Registrasi
                </h2>

                <!-- FAQ Item 7 -->
                <div class="bg-slate-800 rounded-xl overflow-hidden mb-4 border border-slate-700 hover:border-purple-500 transition">
                    <button class="w-full p-6 flex items-center justify-between hover:bg-slate-750 transition text-left">
                        <h3 class="text-lg font-semibold text-white">Bagaimana cara mendaftar event?</h3>
                        <span class="text-2xl text-purple-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-slate-300 bg-slate-900 border-t border-slate-700">
                        <p>Untuk mendaftar event, cukup kunjungi halaman katalog event, pilih event yang Anda minati, dan klik tombol "Daftar Sekarang". Anda akan diminta untuk mengisi data peserta dan mengkonfirmasi registrasi.</p>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="bg-slate-800 rounded-xl overflow-hidden mb-4 border border-slate-700 hover:border-purple-500 transition">
                    <button class="w-full p-6 flex items-center justify-between hover:bg-slate-750 transition text-left">
                        <h3 class="text-lg font-semibold text-white">Bisakah saya membatalkan registrasi?</h3>
                        <span class="text-2xl text-purple-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-slate-300 bg-slate-900 border-t border-slate-700">
                        <p>Ya, Anda dapat membatalkan registrasi hingga 3 hari sebelum event berlangsung. Masuk ke akun Anda, pergi ke "Event Saya", dan klik "Batal Registrasi". Untuk event berbayar, proses refund akan memerlukan 5-7 hari kerja.</p>
                    </div>
                </div>

                <!-- FAQ Item 9 -->
                <div class="bg-slate-800 rounded-xl overflow-hidden mb-4 border border-slate-700 hover:border-purple-500 transition">
                    <button class="w-full p-6 flex items-center justify-between hover:bg-slate-750 transition text-left">
                        <h3 class="text-lg font-semibold text-white">Kapan saya akan menerima sertifikat?</h3>
                        <span class="text-2xl text-purple-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-slate-300 bg-slate-900 border-t border-slate-700">
                        <p>Sertifikat akan dikirimkan melalui email dalam 5-7 hari kerja setelah event berakhir, dengan syarat Anda telah hadir minimal 80% dalam keseluruhan event.</p>
                    </div>
                </div>
            </div>

            <!-- Section 4: Dukungan -->
            <div class="mt-10">
                <h2 class="text-2xl font-bold text-pink-400 mb-4 flex items-center gap-2">
                    <span class="text-3xl">📞</span> Dukungan Pelanggan
                </h2>

                <!-- FAQ Item 10 -->
                <div class="bg-slate-800 rounded-xl overflow-hidden mb-4 border border-slate-700 hover:border-pink-500 transition">
                    <button class="w-full p-6 flex items-center justify-between hover:bg-slate-750 transition text-left">
                        <h3 class="text-lg font-semibold text-white">Bagaimana cara menghubungi tim dukungan?</h3>
                        <span class="text-2xl text-pink-400">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-slate-300 bg-slate-900 border-t border-slate-700">
                        <p>Anda dapat menghubungi tim dukungan kami melalui:</p>
                        <ul class="list-disc list-inside mt-3 space-y-2">
                            <li>Email: support@amikomeventhub.com</li>
                            <li>WhatsApp: +62 822 XXX XXXX</li>
                            <li>Live Chat: Tersedia di halaman utama</li>
                            <li>Jam layanan: Senin-Jumat 09:00-17:00 WITA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact CTA -->
        <div class="mt-12 bg-gradient-to-r from-emerald-600 to-blue-600 rounded-2xl p-8 text-center">
            <h3 class="text-2xl font-bold text-white mb-3">Masih ada pertanyaan?</h3>
            <p class="text-emerald-50 mb-6">Jangan ragu untuk menghubungi tim dukungan kami</p>
            <a href="/kontak" class="inline-block px-8 py-3 bg-white text-emerald-600 rounded-lg font-bold hover:bg-slate-50 transition">
                Hubungi Kami
            </a>
        </div>
    </div>

    <!-- JavaScript untuk expand/collapse FAQ -->
    <script>
        document.querySelectorAll('.bg-slate-800').forEach(item => {
            const button = item.querySelector('button');
            const content = item.querySelector('div');
            
            button.addEventListener('click', () => {
                content.classList.toggle('hidden');
                const icon = button.querySelector('span:last-child');
                icon.textContent = content.classList.contains('hidden') ? '+' : '−';
            });
        });
    </script>
</body>

</html>
