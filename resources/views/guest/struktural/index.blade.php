<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Portal BEMKM UDINUS') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Include Navbar -->
    @include('guest.components.navbar')

    <section class="bg-gradient-to-br from-white to-blue-50 py-16 md:py-24 md:min-h-screen md:flex md:items-center">
        <div class="container mx-auto px-6 md:px-12">
            <!-- Judul -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#04295a] mb-4 mt-4 leading-tight text-center">Struktur
                    BEM KM UDINUS</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Struktur organisasi Kabinet Aksa Sinergi yang menjadi fondasi sinergi dan kolaborasi dalam
                    kepemimpinan mahasiswa.
                </p>
            </div>

            <!-- Susunan Struktur -->
            <div class="space-y-16">
                <!-- Level 1 -->
                <div class="flex justify-center">
                    <div
                        class="relative rounded-2xl shadow-lg w-64 min-h-[20rem] overflow-hidden hover:shadow-xl transition">
                        <img src="{{ asset('img/struktural/presiden-prabowo.jpg') }}" alt="Presiden Mahasiswa"
                            class="absolute inset-0 w-full h-full object-cover">
                        <h3
                            class="absolute left-1/2 bottom-6 transform -translate-x-1/2 flex items-center gap-2 bg-gradient-to-r from-white/80 to-blue-50/70 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm md:text-base font-bold text-blue-900 shadow-lg ring-1 ring-blue-100 border border-white/30 whitespace-nowrap">
                            <svg class="w-4 h-4 text-yellow-400" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M12 2l2.09 4.26L19 7.27l-3 2.92.71 4.15L12 12.9 7.29 14.34 8 10.19 5 7.27l4.91-.99L12 2z" />
                            </svg>
                            Presiden Mahasiswa
                        </h3>
                    </div>
                    <div class="mx-8 my-auto w-0.5 h-20 bg-blue-300"></div>
                    <div
                        class="relative rounded-2xl shadow-lg w-64 min-h-[20rem] overflow-hidden hover:shadow-xl transition">
                        <img src="{{ asset('img/struktural/wapres-gibran.jpg') }}" alt="Wakil Presiden Mahasiswa"
                            class="absolute inset-0 w-full h-full object-cover">
                        <h3
                            class="absolute left-1/2 bottom-6 transform -translate-x-1/2 inline-flex items-center gap-2 bg-gradient-to-r from-white/80 to-blue-50/70 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm md:text-base font-bold text-blue-900 shadow-lg ring-1 ring-blue-100 border border-white/30 whitespace-nowrap">
                            <svg class="w-4 h-4 text-yellow-400" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M12 2l2.09 4.26L19 7.27l-3 2.92.71 4.15L12 12.9 7.29 14.34 8 10.19 5 7.27l4.91-.99L12 2z" />
                            </svg>Wakil Presiden Mahasiswa
                        </h3>
                    </div>
                </div>

                <!-- Level 2 -->
                <div class="flex justify-center">
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] text-center p-6 hover:shadow-xl transition">
                        <img src="{{ asset('img/struktural/mayor-teddy.png') }}" alt="Sekretaris Jendral"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Sekretaris Jendral</h3>
                    </div>
                </div>

                <!-- Level 3 -->
                <div class="grid md:grid-cols-2 gap-10 max-w-3xl mx-auto">
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Biro Administrasi"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Biro Administrasi</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Biro Keuangan"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Biro Keuangan</h3>
                    </div>
                </div>

                <!-- Level 4 -->
                <div class="grid md:grid-cols-2 gap-10 max-w-3xl mx-auto">
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Biro PSDM"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Biro PSDM</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Biro Medkominfo"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Biro Medkominfo</h3>
                    </div>
                </div>

                <!-- Level 5 -->
                <div class="grid md:grid-cols-3 gap-10 max-w-5xl mx-auto">
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Menko Pergerakan"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Menko Pergerakan</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Menko Penaungan"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Menko Penaungan & Kesejahteraan</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Menko Relasi"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Menko Relasi & Inovasi</h3>
                    </div>
                </div>

                <!-- Level 6 (Kementerian) -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Kementerian Sospol"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Kementerian Sospol</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Kementerian Sosmas"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Kementerian Sosmas</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Kementerian PP&I"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Kementerian PP&I</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Kementerian Dalam Negeri"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Kementerian Dalam Negeri</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Kementerian Kespora"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Kementerian Kespora</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Kementerian Advokesma"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Kementerian Advokesma</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Kementerian Luar Negeri"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Kementerian Luar Negeri</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Kementerian Kreasi"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Kementerian Kreasi</h3>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-lg w-64 min-h-[16rem] mx-auto text-center p-6 hover:shadow-xl transition">
                        <img src="/storage/img/logo/logo-kabinet.png" alt="Kementerian BUMKM"
                            class="w-20 h-20 mx-auto rounded-full mb-4 object-contain">
                        <h3 class="text-lg font-semibold text-blue-800">Kementerian BUMKM</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
