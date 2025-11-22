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
                <h2 class="text-3xl md:text-4xl font-bold text-[#04295a] mb-4 mt-4 leading-tight text-center">Kabinet
                    Aksa
                    Sinergi</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto inline">
                    Mengenal identitas, filosofi, dan arah gerak kepemimpinan BEM KM UDINUS 2025/2026.
                </p>
            </div>

            <!-- Logo dan Makna -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <!-- Logo -->
                <div class="flex justify-center">
                    <img src="{{ asset('img/logo/logo-kabinet.png') }}" alt="Logo Kabinet Aksa Sinergi"
                        class="w-80 drop-shadow-xl hover:scale-105 transition duration-300">
                </div>

                <!-- Makna Logo -->
                <div>
                    <h3 class="text-2xl font-semibold text-orange-600 mb-4">Filosofi Nama dan Logo Kabinet</h3>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Nama <span class="font-bold text-blue-800">“Aksa Sinergi”</span> mencerminkan pandangan luas
                        (Aksa)
                        terhadap perubahan dan tekad untuk membangun kolaborasi (Sinergi) dalam setiap langkah
                        organisasi.
                    </p>
                    <p class="mt-3 text-gray-600 leading-relaxed">
                        Logo Kabinet Aksa Sinergi terinspirasi dari simbol energi dan pergerakan yang berpadu dalam
                        harmoni.
                        Setiap lengkungan menyerupai sayap merepresentasikan semangat mahasiswa yang dinamis, saling
                        terhubung,
                        dan membentuk pusaran sinergi yang kuat. Warna biru melambangkan keteguhan dan intelektualitas,
                        sedangkan
                        warna emas menggambarkan semangat dan kemuliaan dalam pengabdian.
                    </p>
                </div>
            </div>

            <!-- Visi & Misi -->
            <div class="bg-white shadow-lg rounded-3xl p-10 md:p-14">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6 border-l-4 border-blue-600 pl-4">Visi</h3>
                <p class="text-gray-700 mb-10 leading-relaxed">
                    Menjadikan BEM KM UDINUS penggerak kolaboratif, progresif, dan solutif,
                    yang menguatkan mahasiswa sebagai katalis perubahan sosial-akademik
                    melalui karya nyata dan inovasi berkelanjutan bagi kampus dan masyarakat.
                </p>

                <h3 class="text-2xl font-semibold text-gray-800 mb-6 border-l-4 border-yellow-500 pl-4">Misi</h3>
                <ul class="space-y-4 text-gray-700 list-disc list-inside">
                    <li>
                        Mewujudkan tata kelola organisasi yang profesional, transparan, dan berintegritas melalui
                        sinergi kepemimpinan partisipatif dan budaya kerja kolektif.
                    </li>
                    <li>
                        Mendorong pengembangan potensi mahasiswa melalui pelatihan, literasi teknologi, dan soft skill
                        berbasis sinergi antar elemen.
                    </li>
                    <li>
                        Menggerakkan aksi kolektif berbasis data, riset kritis, dan kolaborasi lintas minat melalui
                        sinergi gerakan yang responsif dan berdampak.
                    </li>
                    <li>
                        Menjembatani aspirasi mahasiswa secara kritis dan konstruktif melalui sinergi komunikasi dengan
                        pihak kampus.
                    </li>
                    <li>
                        Melaksanakan program sosial dan pemberdayaan masyarakat melalui sinergi multipihak yang selaras
                        dengan nilai Tri Dharma Perguruan Tinggi.
                    </li>
                </ul>
            </div>
        </div>
    </section>

</body>

</html>
