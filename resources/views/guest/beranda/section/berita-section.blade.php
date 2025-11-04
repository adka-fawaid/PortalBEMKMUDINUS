<!-- SECTION BERITA TERBARU -->
<section class="bg-gradient-to-br from-white to-blue-50 py-16 md:py-24">
    <div class="container mx-auto px-6 md:px-12">

        <!-- Judul Section -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#04295a] mb-3">
                Berita Terbaru BEM KM UDINUS
            </h2>
            <p class="text-gray-500">
                Update kegiatan, acara, dan informasi terbaru seputar BEM KM UDINUS
            </p>
        </div>

        <!-- GRID FEED BERITA -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            <!-- CARD BERITA -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="relative w-full pb-[100%] overflow-hidden">
                    <img src="{{ asset('img/berita/berita1.jpg') }}" alt="Berita 1"
                        class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-[#04295a] mb-2 hover:text-orange-600 transition-colors min-h-14"
                        style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                        Seminar Nasional Kepemimpinan Mahasiswa
                    </h3>
                    <p class="text-sm text-gray-500 mb-3">2 November 2025</p>
                    <a href="#" class="text-orange-600 text-sm font-semibold hover:underline">Selengkapnya
                        →</a>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="relative w-full pb-[100%] overflow-hidden">
                    <img src="{{ asset('img/berita/berita2.jpg') }}" alt="Berita 2"
                        class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-[#04295a] mb-2 hover:text-orange-600 transition-colors min-h-14"
                        style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                        Bakti Sosial BEM KM Bersama Masyarakat Tembalang
                    </h3>
                    <p class="text-sm text-gray-500 mb-3">28 Oktober 2025</p>
                    <a href="#" class="text-orange-600 text-sm font-semibold hover:underline">Selengkapnya
                        →</a>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="relative w-full pb-[100%] overflow-hidden">
                    <img src="{{ asset('img/berita/berita3.jpg') }}" alt="Berita 3"
                        class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-[#04295a] mb-2 hover:text-orange-600 transition-colors min-h-14"
                        style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                        Pelantikan Pengurus Baru BEM KM UDINUS
                    </h3>
                    <p class="text-sm text-gray-500 mb-3">21 Oktober 2025</p>
                    <a href="#" class="text-orange-600 text-sm font-semibold hover:underline">Selengkapnya
                        →</a>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="relative w-full pb-[100%] overflow-hidden">
                    <img src="{{ asset('img/berita/berita4.jpg') }}" alt="Berita 4"
                        class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-[#04295a] mb-2 hover:text-orange-600 transition-colors min-h-14"
                        style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                        Forum Diskusi Mahasiswa: Isu Pendidikan Nasional
                    </h3>
                    <p class="text-sm text-gray-500 mb-3">18 Oktober 2025</p>
                    <a href="#" class="text-orange-600 text-sm font-semibold hover:underline">Selengkapnya
                        →</a>
                </div>
            </div>

        </div>

        <!-- Tombol Lihat Semua -->
        <div class="text-center mt-12">
            <a href="#"
                class="inline-block bg-orange-600 text-white font-semibold px-6 py-3 rounded-full shadow-md hover:bg-orange-700 transition">
                Lihat Semua Berita
            </a>
        </div>

    </div>
</section>
