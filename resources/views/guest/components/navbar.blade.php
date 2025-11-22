<style>
    /* rotate svg when details is open */
    .profile-details[open]>summary svg {
        transform: rotate(180deg);
    }

    .profile-details summary svg {
        transition: transform .2s;
        transform-origin: center;
    }
</style>

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
                <li>
                    <a href="{{ route('guest.index') }}"
                        class="relative block py-2 px-2 {{ request()->routeIs('guest.index') ? 'text-blue-800' : 'text-gray-900 hover:text-blue-800' }} group">
                        Beranda
                        <span aria-hidden="true"
                            class="absolute left-0 -bottom-0.5 h-0.5 w-full bg-blue-800 origin-left transform transition-transform duration-300 {{ request()->routeIs('guest.index') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100"></span>
                    </a>
                </li>
                <li class="relative">

                    <details class="md:relative profile-details">
                        <summary
                            class="relative flex items-center justify-between py-2 px-2 group cursor-pointer select-none {{ request()->routeIs(['guest.kabinet.index', 'guest.struktural.index']) ? 'text-blue-800' : 'text-gray-900 hover:text-blue-800' }}"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="flex items-center">
                                <span>Profil</span>
                            </span>

                            <svg class="w-4 h-4 ml-2 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>

                            <span aria-hidden="true"
                                class="absolute left-0 -bottom-0.5 h-0.5 w-full bg-blue-800 origin-left transform transition-transform duration-300 {{ request()->routeIs(['guest.kabinet.index', 'guest.struktural.index']) ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100"></span>
                        </summary>

                        <ul
                            class="mt-2 md:absolute md:left-0 md:top-full md:bg-white md:shadow-md md:rounded-md md:w-40 md:py-2">
                            <li>
                                <a href="{{ route('guest.kabinet.index') }}"
                                    {{ request()->routeIs('guest.kabinet.index') ? 'aria-current="page"' : '' }}
                                    class="block py-2 px-4 transition-colors {{ request()->routeIs('guest.kabinet.index') ? 'text-blue-800 bg-blue-50 rounded-md' : 'text-gray-900 hover:text-blue-800 hover:bg-blue-50' }}">
                                    Kabinet
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('guest.struktural.index') }}"
                                    class="block py-2 px-4 text-gray-900 hover:text-blue-800"
                                    {{ request()->routeIs('guest.struktural.index') ? 'text-blue-800' : '' }}>Struktural</a>
                            </li>
                        </ul>
                    </details>
                </li>
                <li>
                    <a href="#"
                        class="relative block py-2 px-2 text-gray-900 hover:text-blue-800 group {{ request()->routeIs('guest.kegiatan.index') ? 'text-blue-800' : '' }}">
                        Kegiatan
                        <span aria-hidden="true"
                            class="absolute left-0 -bottom-0.5 h-0.5 w-full bg-blue-800 origin-left transform transition-transform duration-300 {{ request()->routeIs('guest.program-kerja.index') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100"></span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative block py-2 px-2 text-gray-900 hover:text-blue-800 group {{ request()->routeIs(['berita*', 'news*']) ? 'text-blue-800' : '' }}">
                        Berita
                        <span aria-hidden="true"
                            class="absolute left-0 -bottom-0.5 h-0.5 w-full bg-blue-800 origin-left transform transition-transform duration-300 {{ request()->routeIs(['berita*', 'news*']) ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100"></span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative block py-2 px-2 text-gray-900 hover:text-blue-800 group {{ request()->routeIs(['partnership*', 'kemitraan*']) ? 'text-blue-800' : '' }}">
                        Partnership
                        <span aria-hidden="true"
                            class="absolute left-0 -bottom-0.5 h-0.5 w-full bg-blue-800 origin-left transform transition-transform duration-300 {{ request()->routeIs(['partnership*', 'kemitraan*']) ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100"></span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative block py-2 px-2 text-gray-900 hover:text-blue-800 group {{ request()->routeIs(['kontak*', 'contact*']) ? 'text-blue-800' : '' }}">
                        Kontak
                        <span aria-hidden="true"
                            class="absolute left-0 -bottom-0.5 h-0.5 w-full bg-blue-800 origin-left transform transition-transform duration-300 {{ request()->routeIs(['kontak*', 'contact*']) ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    (function() {
        // Close dropdown when clicking outside and update aria-expanded
        document.addEventListener('click', function(e) {
            document.querySelectorAll('.profile-details').forEach(function(detail) {
                if (detail.hasAttribute('open') && !detail.contains(e.target)) {
                    detail.removeAttribute('open');
                    const summary = detail.querySelector('summary');
                    if (summary) summary.setAttribute('aria-expanded', 'false');
                }
            });
        });

        // Keep aria-expanded in sync after toggling
        document.querySelectorAll('.profile-details summary').forEach(function(summary) {
            summary.addEventListener('click', function() {
                const detail = this.parentElement;
                // wait for native toggle to finish
                setTimeout(function() {
                    if (detail.hasAttribute('open')) summary.setAttribute('aria-expanded',
                        'true');
                    else summary.setAttribute('aria-expanded', 'false');
                }, 0);
            });
        });
    })();
</script>
