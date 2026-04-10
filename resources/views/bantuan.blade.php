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

    <div class="max-w-4xl mx-auto px-6 lg:px-8 py-12">
        <!-- Header -->
        <div class="mb-10">
            <h1 class="text-3xl font-bold mb-2">Bantuan & FAQ</h1>
            <p class="text-slate-600">Jawaban atas pertanyaan umum</p>
        </div>

        <!-- FAQs -->
        <div class="space-y-2">
            <!-- FAQ Item 1 -->
            <div class="border border-slate-200 rounded">
                <button class="w-full px-4 py-3 flex items-center justify-between text-left hover:bg-slate-50 transition">
                    <h3 class="text-sm font-medium">Apa itu AmikomEventHub?</h3>
                    <span class="text-slate-600 text-lg">+</span>
                </button>
                <div class="hidden px-4 pb-3 bg-slate-50 border-t border-slate-200">
                    <p class="text-sm text-slate-600">Platform untuk mengelola dan mempromosikan acara di AMIKOM. Mahasiswa dapat mencari informasi event, mendaftar, dan berinteraksi dengan peserta lainnya.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="border border-slate-200 rounded">
                <button class="w-full px-4 py-3 flex items-center justify-between text-left hover:bg-slate-50 transition">
                    <h3 class="text-sm font-medium">Bagaimana cara mendaftar?</h3>
                    <span class="text-slate-600 text-lg">+</span>
                </button>
                <div class="hidden px-4 pb-3 bg-slate-50 border-t border-slate-200">
                    <p class="text-sm text-slate-600">Kunjungi halaman login, pilih "Register", isi data pribadi, verifikasi email, dan akun siap digunakan.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="border border-slate-200 rounded">
                <button class="w-full px-4 py-3 flex items-center justify-between text-left hover:bg-slate-50 transition">
                    <h3 class="text-sm font-medium">Apakah gratis mendaftar event?</h3>
                    <span class="text-slate-600 text-lg">+</span>
                </button>
                <div class="hidden px-4 pb-3 bg-slate-50 border-t border-slate-200">
                    <p class="text-sm text-slate-600">Sebagian besar event gratis. Beberapa event khusus atau kompetisi mungkin memiliki biaya pendaftaran yang tertera di halaman event.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="border border-slate-200 rounded">
                <button class="w-full px-4 py-3 flex items-center justify-between text-left hover:bg-slate-50 transition">
                    <h3 class="text-sm font-medium">Browser mana yang kompatibel?</h3>
                    <span class="text-slate-600 text-lg">+</span>
                </button>
                <div class="hidden px-4 pb-3 bg-slate-50 border-t border-slate-200">
                    <p class="text-sm text-slate-600">Kompatibel dengan Chrome, Firefox, Safari, dan Edge. Gunakan versi browser terbaru untuk pengalaman optimal.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="border border-slate-200 rounded">
                <button class="w-full px-4 py-3 flex items-center justify-between text-left hover:bg-slate-50 transition">
                    <h3 class="text-sm font-medium">Bisakah diakses dari smartphone?</h3>
                    <span class="text-slate-600 text-lg">+</span>
                </button>
                <div class="hidden px-4 pb-3 bg-slate-50 border-t border-slate-200">
                    <p class="text-sm text-slate-600">Ya, dirancang responsive untuk smartphone, tablet, dan desktop dengan pengalaman optimal di semua perangkat.</p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="border border-slate-200 rounded">
                <button class="w-full px-4 py-3 flex items-center justify-between text-left hover:bg-slate-50 transition">
                    <h3 class="text-sm font-medium">Bagaimana cara mendaftar event?</h3>
                    <span class="text-slate-600 text-lg">+</span>
                </button>
                <div class="hidden px-4 pb-3 bg-slate-50 border-t border-slate-200">
                    <p class="text-sm text-slate-600">Kunjungi katalog event, pilih event, klik "Daftar", isi data peserta, dan konfirmasi registrasi.</p>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="border border-slate-200 rounded">
                <button class="w-full px-4 py-3 flex items-center justify-between text-left hover:bg-slate-50 transition">
                    <h3 class="text-sm font-medium">Bagaimana menghubungi tim dukungan?</h3>
                    <span class="text-slate-600 text-lg">+</span>
                </button>
                <div class="hidden px-4 pb-3 bg-slate-50 border-t border-slate-200">
                    <p class="text-sm text-slate-600 mb-2">Email: support@amikomeventhub.com | WhatsApp: +62 822 XXX XXXX | Jam kerja: Senin-Jumat 09:00-17:00</p>
                </div>
            </div>
        </div>

        <!-- Contact CTA -->
        <div class="mt-8 bg-slate-900 text-white rounded-lg p-6 text-center">
            <h3 class="font-bold mb-2">Masih ada pertanyaan?</h3>
            <p class="text-slate-300 text-sm mb-4">Hubungi tim dukungan kami</p>
            <a href="/kontak" class="inline-block px-6 py-2 bg-white text-slate-900 rounded font-medium text-sm hover:bg-slate-100 transition">
                Hubungi
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
