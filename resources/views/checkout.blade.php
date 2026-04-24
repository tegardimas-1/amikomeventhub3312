@extends('layouts.app')

@section('title', 'Checkout - AmikomEventHub')

@section('content')

<main class="max-w-3xl mx-auto px-6 py-20">
    <!-- ===== HEADER SECTION ===== -->
    <section class="mb-12">
        <a href="{{ route('events.show', 1) }}" class="text-indigo-600 font-bold flex items-center gap-2 mb-6 hover:gap-3 transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali ke Event
        </a>
        <h1 class="text-4xl font-extrabold">Checkout</h1>
        <p class="text-slate-500 mt-2">Lengkapi data Anda untuk mendapatkan tiket.</p>
    </section>

    <!-- ===== MAIN CONTENT GRID ===== -->
    <div class="grid grid-cols-1 gap-8">
        
        <!-- STEP 1: ORDER SUMMARY -->
        <section class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
            <h2 class="text-xl font-bold mb-6 pb-4 border-b">Pesanan Anda</h2>
            
            <!-- Event Details -->
            <div class="flex gap-6 items-start">
                <img src="{{ asset('assets/concert.png') }}" alt="Event" class="w-24 h-24 rounded-2xl object-cover flex-shrink-0">
                <div>
                    <h3 class="font-extrabold text-lg">Jazz Night 2024: A Celebration</h3>
                    <p class="text-slate-500 text-sm">16 Nov 2024 • The Blue Note Lounge</p>
                    <p class="text-indigo-600 font-bold mt-3">1 x Rp 150.000</p>
                </div>
            </div>

            <!-- Price Breakdown -->
            <div class="mt-8 pt-6 border-t space-y-3">
                <div class="flex justify-between">
                    <span class="text-slate-600">Harga Tiket</span>
                    <span class="font-semibold">Rp 150.000</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-600">Biaya Layanan</span>
                    <span class="font-semibold">Rp 5.000</span>
                </div>
                <div class="flex justify-between text-2xl font-black mt-4 pt-4 border-t">
                    <span>Total Bayar</span>
                    <span class="text-indigo-600">Rp 155.000</span>
                </div>
            </div>
        </section>

        <!-- STEP 2: BUYER INFORMATION FORM -->
        <section class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
            <h2 class="text-xl font-bold mb-6 text-indigo-600">📦 Data Pemesan (Tanpa Login)</h2>
            
            <form class="space-y-6" id="checkoutForm">
                <!-- Full Name Field -->
                <div>
                    <label for="fullName" class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">
                        Nama Lengkap
                    </label>
                    <input 
                        id="fullName"
                        type="text" 
                        placeholder="Masukkan nama sesuai identitas"
                        class="w-full px-5 py-4 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"
                        required>
                </div>

                <!-- Email & Phone Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">
                            Email Aktif
                        </label>
                        <input 
                            id="email"
                            type="email" 
                            placeholder="contoh@gmail.com"
                            class="w-full px-5 py-4 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"
                            required>
                        <p class="text-xs text-slate-400 mt-2 font-bold uppercase tracking-tighter">
                            ✓ E-Ticket akan dikirim ke email ini
                        </p>
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label for="phone" class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">
                            No. WhatsApp
                        </label>
                        <input 
                            id="phone"
                            type="tel" 
                            placeholder="08xxxxxxx"
                            class="w-full px-5 py-4 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"
                            required>
                    </div>
                </div>

                <!-- Pay Button -->
                <button 
                    type="button" 
                    onclick="handlePayment()"
                    class="w-full py-5 bg-indigo-600 text-white rounded-2xl font-black text-xl shadow-xl shadow-indigo-200 hover:bg-indigo-700 active:scale-95 transition-all">
                    Bayar Sekarang
                </button>

                <!-- T&C Text -->
                <p class="text-center text-xs text-slate-400">
                    Dengan menekan tombol di atas, Anda menyetujui Syarat & Ketentuan kami.
                </p>
            </form>
        </section>

    </div>
</main>

@endsection

<!-- ===== PAYMENT MODAL (MIDTRANS) ===== -->
@section('extra-scripts')

<div id="paymentModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-6">
    <div class="bg-white w-full max-w-sm rounded-3xl overflow-hidden shadow-2xl animate-modal-in">
        <!-- MODAL HEADER -->
        <div class="bg-slate-50 p-6 flex justify-between items-center border-b">
            <img src="https://midtrans.com/assets/img/logo-dark.png" alt="Midtrans" class="h-6">
            <button onclick="closePaymentModal()" class="p-2 hover:bg-slate-200 rounded-full transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l18 18"></path>
                </svg>
            </button>
        </div>

        <!-- MODAL BODY -->
        <div class="p-8 text-center space-y-6">
            <!-- Total Amount -->
            <div>
                <p class="text-slate-500 font-medium mb-2">Total Tagihan</p>
                <h2 class="text-4xl font-black text-indigo-600">Rp 155.000</h2>
                <p class="text-xs text-slate-400 mt-2">Order ID: <span id="orderId" class="font-mono">—</span></p>
            </div>

            <!-- Payment Methods -->
            <div class="space-y-3">
                <p class="text-sm text-slate-600 font-semibold">Pilih Metode Pembayaran:</p>
                
                <!-- Method 1: GoPay/QRIS -->
                <button 
                    onclick="processPayment('gopay')"
                    class="w-full py-4 border-2 border-indigo-100 rounded-2xl px-6 hover:border-indigo-600 hover:bg-indigo-50 transition flex justify-between items-center group">
                    <span class="font-bold text-slate-700 group-hover:text-indigo-600">GoPay / QRIS</span>
                    <span class="text-indigo-400">→</span>
                </button>

                <!-- Method 2: Virtual Account (Disabled) -->
                <button 
                    type="button"
                    class="w-full py-4 border-2 border-slate-100 rounded-2xl px-6 opacity-50 cursor-not-allowed flex justify-between items-center">
                    <span class="font-bold text-slate-500">Virtual Account (BNI, BRI)</span>
                    <span class="text-slate-300">→</span>
                </button>

                <!-- Method 3: Card (Disabled) -->
                <button 
                    type="button"
                    class="w-full py-4 border-2 border-slate-100 rounded-2xl px-6 opacity-50 cursor-not-allowed flex justify-between items-center">
                    <span class="font-bold text-slate-500">Kartu Debit/Kredit</span>
                    <span class="text-slate-300">→</span>
                </button>
            </div>

            <!-- Security Badge -->
            <div class="flex items-center justify-center gap-2 text-xs text-slate-400 font-bold uppercase tracking-widest pt-6 border-t">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                </svg>
                Secure Checkout by Midtrans
            </div>
        </div>
    </div>
</div>

<!-- ===== JAVASCRIPT ===== -->
<script>
    // Payment Modal Functions
    function openPaymentModal(orderId) {
        document.getElementById('orderId').textContent = orderId;
        document.getElementById('paymentModal').classList.remove('hidden');
        document.getElementById('paymentModal').classList.add('flex');
    }

    function closePaymentModal() {
        document.getElementById('paymentModal').classList.add('hidden');
        document.getElementById('paymentModal').classList.remove('flex');
    }

    // Handle Payment Process
    function processPayment(method) {
        console.log('Processing payment with method:', method);
        
        // Simulate payment processing
        setTimeout(() => {
            window.location.href = '{{ route('tickets.show', 1) }}';
        }, 1000);
    }

    // Main Payment Handler
    function handlePayment() {
        const fullName = document.getElementById('fullName').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;

        // Validation
        if (!fullName || !email || !phone) {
            alert('Mohon lengkapi semua data sebelum melanjutkan.');
            return;
        }

        if (!isValidEmail(email)) {
            alert('Email tidak valid. Mohon cek kembali.');
            return;
        }

        if (!isValidPhone(phone)) {
            alert('Nomor WhatsApp tidak valid. Mohon gunakan format 08xxxxxxx');
            return;
        }

        // Generate Order ID
        const timestamp = Date.now();
        const random = Math.floor(Math.random() * 9000) + 1000;
        const orderId = 'TRX-' + timestamp + '-' + random;

        // Save to session/store (in real app, send to server)
        console.log('Order Data:', { fullName, email, phone, orderId });

        // Show payment modal
        openPaymentModal(orderId);
    }

    // Validation Helper Functions
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function isValidPhone(phone) {
        const phoneRegex = /^08\d{7,11}$/;
        return phoneRegex.test(phone);
    }

    // Close modal when clicking backdrop
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('paymentModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closePaymentModal();
            }
        });
    });
</script>

<!-- ===== STYLES ===== -->
<style>
    @keyframes modalIn {
        0% {
            transform: scale(0.9);
            opacity: 0;
        }
        70% {
            transform: scale(1.05);
            opacity: 1;
        }
        100% {
            transform: scale(1);
        }
    }

    .animate-modal-in {
        animation: modalIn 0.4s ease-out forwards;
    }
</style>

@endsection