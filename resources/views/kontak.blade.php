@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient py-16 lg:py-20 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto text-center fade-in">
            <h1 class="text-4xl lg:text-5xl font-display font-bold mb-4" style="color: var(--navy-primary);">
                Hubungi Kami
            </h1>
            <p class="text-lg text-[var(--gray-medium)] max-w-2xl mx-auto">
                Ada pertanyaan? Kami siap membantu Anda
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <!-- Contact Info Cards -->
                <div class="text-center p-8 rounded-xl scale-in stagger-delay-1" style="background: var(--gray-light);">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background: var(--accent-green);">
                        <i class="fas fa-phone text-2xl text-white"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-3" style="color: var(--navy-primary);">Telepon</h3>
                    <p class="text-[var(--gray-medium)] mb-2">Hubungi kami via telepon</p>
                    <a href="tel:+6281258887895" class="font-semibold hover:underline" style="color: var(--accent-green);">
                        +62 812-5888-7895
                    </a>
                </div>

                <div class="text-center p-8 rounded-xl scale-in stagger-delay-2" style="background: var(--gray-light);">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background: var(--accent-green);">
                        <i class="fab fa-whatsapp text-2xl text-white"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-3" style="color: var(--navy-primary);">WhatsApp</h3>
                    <p class="text-[var(--gray-medium)] mb-2">Chat dengan customer service</p>
                    <a href="https://api.whatsapp.com/send?phone=6281258887895" target="_blank"
                        class="font-semibold hover:underline" style="color: var(--accent-green);">
                        Chat Sekarang
                    </a>
                </div>

                <div class="text-center p-8 rounded-xl scale-in stagger-delay-3" style="background: var(--gray-light);">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background: var(--accent-green);">
                        <i class="fas fa-envelope text-2xl text-white"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-3" style="color: var(--navy-primary);">Email</h3>
                    <p class="text-[var(--gray-medium)] mb-2">Kirim email kepada kami</p>
                    <a href="mailto:joulwinnofficial@gmail.com" class="font-semibold hover:underline"
                        style="color: var(--accent-green);">
                        joulwinnofficial@gmail.com
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="fade-in-left">
                    <h2 class="text-3xl font-display font-bold mb-6" style="color: var(--navy-primary);">
                        Kirim Pesan
                    </h2>
                    <p class="text-[var(--gray-medium)] mb-8">
                        Isi formulir di bawah ini dan kami akan segera menghubungi Anda kembali.
                    </p>

                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="nama" class="block text-sm font-semibold mb-2"
                                style="color: var(--navy-primary);">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="nama" name="nama" required
                                class="w-full px-4 py-3 rounded-lg border-2 focus:outline-none focus:border-[var(--accent-green)] transition"
                                style="border-color: var(--gray-light);" placeholder="Masukkan nama lengkap Anda">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold mb-2"
                                style="color: var(--navy-primary);">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 rounded-lg border-2 focus:outline-none focus:border-[var(--accent-green)] transition"
                                style="border-color: var(--gray-light);" placeholder="nama@email.com">
                        </div>

                        <div>
                            <label for="telepon" class="block text-sm font-semibold mb-2"
                                style="color: var(--navy-primary);">
                                Nomor Telepon
                            </label>
                            <input type="tel" id="telepon" name="telepon"
                                class="w-full px-4 py-3 rounded-lg border-2 focus:outline-none focus:border-[var(--accent-green)] transition"
                                style="border-color: var(--gray-light);" placeholder="+62 812-3456-7890">
                        </div>

                        <div>
                            <label for="subjek" class="block text-sm font-semibold mb-2"
                                style="color: var(--navy-primary);">
                                Subjek <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="subjek" name="subjek" required
                                class="w-full px-4 py-3 rounded-lg border-2 focus:outline-none focus:border-[var(--accent-green)] transition"
                                style="border-color: var(--gray-light);" placeholder="Apa yang bisa kami bantu?">
                        </div>

                        <div>
                            <label for="pesan" class="block text-sm font-semibold mb-2"
                                style="color: var(--navy-primary);">
                                Pesan <span class="text-red-500">*</span>
                            </label>
                            <textarea id="pesan" name="pesan" rows="6" required
                                class="w-full px-4 py-3 rounded-lg border-2 focus:outline-none focus:border-[var(--accent-green)] transition resize-none"
                                style="border-color: var(--gray-light);"
                                placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>

                        <button type="submit" class="btn-primary w-full py-4 rounded-xl font-semibold text-lg">
                            <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
                        </button>

                        <p class="text-sm text-gray-600">
                            <i class="fas fa-info-circle mr-1"></i>
                            Kami akan merespons dalam waktu 1x24 jam
                        </p>
                    </form>
                </div>

                <!-- Contact Info & Map -->
                <div class="fade-in-right">
                    <!-- Office Info -->
                    <div class="p-8 rounded-xl mb-8" style="background: var(--gray-light);">
                        <h3 class="font-display text-2xl font-bold mb-6" style="color: var(--navy-primary);">
                            Kantor Kami
                        </h3>

                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 rounded-lg flex items-center justify-center"
                                        style="background: var(--accent-green);">
                                        <i class="fas fa-map-marker-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1" style="color: var(--navy-primary);">Alamat</h4>
                                    <p class="text-[var(--gray-medium)]">
                                        PT JOULWINN GELVIS HOTAPEA<br>
                                        BSD Ruko Boulevard, Jalan Raya Taman Tekno Serpong Blok AA No.7, Ciater, Serpong
                                        Sub-District, South Tangerang City, Banten 15323, Indonesia
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 rounded-lg flex items-center justify-center"
                                        style="background: var(--accent-green);">
                                        <i class="fas fa-clock text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1" style="color: var(--navy-primary);">Jam Operasional</h4>
                                    <p class="text-[var(--gray-medium)]">
                                        Senin - Jumat: 09.00 - 18.00 WIB<br>
                                        Sabtu: 09.00 - 15.00 WIB<br>
                                        Minggu: Tutup
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 rounded-lg flex items-center justify-center"
                                        style="background: var(--accent-green);">
                                        <i class="fas fa-comments text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1" style="color: var(--navy-primary);">Customer Service</h4>
                                    <p class="text-[var(--gray-medium)]">
                                        WhatsApp: Aktif 24/7<br>
                                        Email: Respon dalam 1x24 jam<br>
                                        Telepon: 09.00 - 17.00 WIB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="rounded-xl overflow-hidden shadow-lg" style="border: 3px solid var(--solar-cream);">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.23964241693!2d106.68942999999999!3d-6.229386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1234567890"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-8 text-center p-6 rounded-xl" style="background: var(--gray-light);">
                        <h4 class="font-display text-xl font-bold mb-4" style="color: var(--navy-primary);">
                            Ikuti Kami
                        </h4>
                        <div class="flex justify-center gap-4">
                            <a href="#"
                                class="w-12 h-12 rounded-full flex items-center justify-center hover:scale-110 transition"
                                style="background: var(--accent-green);">
                                <i class="fab fa-facebook-f text-white"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-full flex items-center justify-center hover:scale-110 transition"
                                style="background: var(--accent-green);">
                                <i class="fab fa-instagram text-white"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-full flex items-center justify-center hover:scale-110 transition"
                                style="background: var(--accent-green);">
                                <i class="fab fa-twitter text-white"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-full flex items-center justify-center hover:scale-110 transition"
                                style="background: var(--accent-green);">
                                <i class="fab fa-youtube text-white"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-full flex items-center justify-center hover:scale-110 transition"
                                style="background: var(--accent-green);">
                                <i class="fab fa-tiktok text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mt-20 fade-in">
                <h2 class="text-3xl lg:text-4xl font-display font-bold mb-12 text-center"
                    style="color: var(--navy-primary);">
                    Pertanyaan Umum
                </h2>
                <div class="max-w-4xl mx-auto space-y-4">
                    <div class="p-6 rounded-xl" style="background: var(--gray-light);">
                        <h4 class="font-bold text-lg mb-2" style="color: var(--navy-primary);">
                            <i class="fas fa-question-circle mr-2" style="color: var(--accent-green);"></i>
                            Bagaimana cara memesan produk?
                        </h4>
                        <p class="text-[var(--gray-medium)] pl-8">
                            Anda dapat memesan melalui WhatsApp dengan klik tombol "Pesan via WhatsApp" pada halaman produk,
                            atau hubungi customer service kami di nomor yang tertera.
                        </p>
                    </div>

                    <div class="p-6 rounded-xl" style="background: var(--gray-light);">
                        <h4 class="font-bold text-lg mb-2" style="color: var(--navy-primary);">
                            <i class="fas fa-question-circle mr-2" style="color: var(--accent-green);"></i>
                            Berapa lama waktu pengiriman?
                        </h4>
                        <p class="text-[var(--gray-medium)] pl-8">
                            Waktu pengiriman tergantung lokasi tujuan. Untuk Jakarta dan sekitarnya 1-2 hari kerja, untuk
                            luar kota 3-5 hari kerja setelah pembayaran dikonfirmasi.
                        </p>
                    </div>

                    <div class="p-6 rounded-xl" style="background: var(--gray-light);">
                        <h4 class="font-bold text-lg mb-2" style="color: var(--navy-primary);">
                            <i class="fas fa-question-circle mr-2" style="color: var(--accent-green);"></i>
                            Apakah ada biaya perakitan?
                        </h4>
                        <p class="text-[var(--gray-medium)] pl-8">
                            Produk kami dirancang untuk mudah dirakit sendiri dengan panduan yang jelas. Namun, kami juga
                            menyediakan layanan perakitan dengan biaya tambahan. Silakan hubungi customer service untuk
                            informasi lebih lanjut.
                        </p>
                    </div>

                    <div class="p-6 rounded-xl" style="background: var(--gray-light);">
                        <h4 class="font-bold text-lg mb-2" style="color: var(--navy-primary);">
                            <i class="fas fa-question-circle mr-2" style="color: var(--accent-green);"></i>
                            Bagaimana kebijakan pengembalian barang?
                        </h4>
                        <p class="text-[var(--gray-medium)] pl-8">
                            Kami menerima pengembalian dalam 7 hari setelah barang diterima jika ada kerusakan atau cacat
                            produksi. Produk harus dalam kondisi asli dan belum dirakit. Silakan hubungi customer service
                            untuk proses retur.
                        </p>
                    </div>

                    <div class="p-6 rounded-xl" style="background: var(--gray-light);">
                        <h4 class="font-bold text-lg mb-2" style="color: var(--navy-primary);">
                            <i class="fas fa-question-circle mr-2" style="color: var(--accent-green);"></i>
                            Apakah produk bergaransi?
                        </h4>
                        <p class="text-[var(--gray-medium)] pl-8">
                            Ya, semua produk kami memiliki garansi. Durasi garansi bervariasi tergantung jenis produk.
                            Informasi garansi dapat dilihat pada halaman detail produk atau tanyakan ke customer service
                            kami.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection