<nav class="bg-white shadow-lg fixed w-full z-20 top-0 left-0 border-b-4 border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-2 rtl:space-x-reverse">
            <img src="{{ asset('img/logo/logo-bemkm-udinus.png') }}" class="h-9" alt="Logo UDINUS">
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
                            <svg class="w-4 h-4 ml-2 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>

                        <ul
                            class="mt-2 md:absolute md:left-0 md:top-full md:bg-white md:shadow-md md:rounded-md md:w-40 md:py-2">
                            <li><a href="#" class="block py-2 px-4 text-gray-900 hover:text-blue-800">Kabinet</a>
                            </li>
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
