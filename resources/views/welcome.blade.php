<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Portal BEMKM UDINUS') }}</title>
    @vite('resources/css/app.css')

    <!-- Slideshow Styles -->
    <style>
        @keyframes fade {
            0% {
                opacity: 0;
            }

            8% {
                opacity: 1;
            }

            33% {
                opacity: 1;
            }

            41% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        .slideshow {
            position: relative;
            width: 100%;
            height: 24rem;
        }

        /* diperbesar */
        .slideshow img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            animation: fade 9s infinite ease-in-out;
            backface-visibility: hidden;
        }

        .slideshow img:nth-child(1) {
            animation-delay: 0s;
        }

        .slideshow img:nth-child(2) {
            animation-delay: 3s;
        }

        .slideshow img:nth-child(3) {
            animation-delay: 6s;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <nav class="bg-white shadow-sm fixed w-full z-20 top-0 left-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-2 rtl:space-x-reverse">
                <img src="{{ asset('storage/img/logo/logo-bemkm-udinus.png') }}" class="h-9" alt="Logo UDINUS">
                <span class="self-center text-xl font-semibold whitespace-nowrap text-gray-900">
                    <span class="text-blue-800">BEMKM</span> UDINUS
                </span>
            </a>

            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none"
                aria-controls="navbar-default" aria-expanded="false">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-small flex flex-col p-3 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-4 md:mt-0 md:border-0 md:bg-white">
                    <li><a href="#" class="block py-2 px-2 text-gray-900 hover:text-blue-600">Beranda</a></li>
                    <li class="relative">
                        <details class="md:relative">
                            <summary
                                class="flex items-center justify-between py-2 px-2 text-gray-900 hover:text-blue-600 list-none cursor-pointer">
                                Profil
                                <svg class="w-4 h-4 ml-2 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </summary>

                            <ul
                                class="mt-2 md:absolute md:left-0 md:top-full md:bg-white md:shadow-md md:rounded-md md:w-40 md:py-2">
                                <li><a href="#"
                                        class="block py-2 px-4 text-gray-900 hover:text-blue-800">Kabinet</a></li>
                                <li><a href="#"
                                        class="block py-2 px-4 text-gray-900 hover:text-blue-800">Struktural</a></li>
                            </ul>
                        </details>
                    </li>
                    <li><a href="#" class="block py-2 px-2 text-gray-900 hover:text-blue-800">Program Kerja</a>
                    </li>
                    <li><a href="#" class="block py-2 px-2 text-gray-900 hover:text-blue-800">Berita</a>
                    </li>
                    <li><a href="#" class="block py-2 px-2 text-gray-900 hover:text-blue-800">Partnership</a>
                    </li>
                    <li><a href="#" class="block py-2 px-2 text-gray-900 hover:text-blue-800">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="w-full h-3 bg-white shadow-md pointer-events-none"></div>

    <section class="pt-32 pb-20 bg-gradient-to-b from-white to-blue-500/10">
        <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center justify-between gap-10 px-6">
            <div class="flex-1">
                <h1 class="text-4xl font-extrabold leading-tight mb-5 text-blue-900 whitespace-nowrap">
                    BADAN EKSEKUTIF MAHASISWA
                </h1>
                <h1 class="text-4xl font-extrabold text-yellow-600 mb-6">KELUARGA MAHASISWA</h1>
                <div class="inline-block text-medium bg-blue-500 text-white px-4 py-1 rounded-full mb-10 shadow-sm">
                    - KABINET AKSA SINERGI -
                </div>

                <div class="mt-4 space-y-3">
                    <p class="text-lg font-bold text-gray-800">Bersinergi dalam Satu Aksi,</p>
                    <p class="text-lg text-gray-600">
                        Bukan hanya tentang bekerja bersama tetapi tentang saling memahami dan
                        tumbuh bersama.
                    </p>
                    <p class="text-lg text-gray-600">
                        Kami bergerak dengan hati, menyatukan ide, tenaga, dan harapan demi membawa perubahan positif
                        untuk
                        Keluarga Besar mahasiswa UDINUS.
                    </p>
                </div>
            </div>

            <div class="flex-1 flex justify-center">
                <div class="relative w-full max-w-xl rounded-3xl overflow-hidden shadow-lg">\
                    <div class="slideshow">
                        <img src="{{ asset('storage/img/beranda/beranda1.jpg') }}" alt="Slide 1" loading="lazy"
                            class="rounded-3xl">
                        <img src="{{ asset('storage/img/beranda/beranda2.jpg') }}" alt="Slide 2" loading="lazy"
                            class="rounded-3xl">
                        <img src="{{ asset('storage/img/beranda/beranda3.jpg') }}" alt="Slide 3" loading="lazy"
                            class="rounded-3xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
