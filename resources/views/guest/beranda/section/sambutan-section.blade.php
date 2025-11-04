<section class="bg-gradient-to-br from-white to-blue-100 py-16 md:py-24 md:min-h-screen md:flex md:items-center">
    <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-start gap-12">

        <!-- FOTO (overlay nama & jabatan menempel di bagian bawah foto) -->
        <div class="md:w-1/3 flex justify-center">
            <div class="relative p-4 overflow-hidden"
                style="background-image: url('{{ asset('img/logo/logo-kabinet3.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <img src="{{ asset('img/pengurus/pres-tegal.png') }}" alt="Presiden Mahasiswa" class="w-full h-auto">

                <!-- Overlay nama & jabatan -->
                <div
                    class="absolute left-0 right-0 bottom-0 bg-gradient-to-r from-orange-700 to-orange-400 text-white px-6 py-3 mt-6 rounded-3xl shadow-md">
                    <p class="font-semibold text-sm md:text-base leading-tight text-center">
                        Prof Dr. Moh Adzka Fawaid S.Tres M.Boh
                    </p>
                    <p class="text-xs md:text-sm opacity-95 text-center">Presiden Mahasiswa Periode 2025/2026</p>
                </div>
            </div>
        </div>

        <!-- TEKS SAMBUTAN -->
        <div class="md:w-2/3 text-justify">
            <h2 class="text-3xl md:text-4xl font-bold text-[#04295a] mt-0 mb-8 leading-tight">
                Sambutan Presiden Mahasiswa
            </h2>

            <!-- Paragraf sambutan -->
            <div class="relative mb-4">
                <!-- Icon tanda petik pembuka -->
                <div class="mb-4">
                    <svg class="w-10 h-10 text-orange-400 inline-block align-top" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path
                            d="M7.5 7C7.5 4.51472 5.48528 2.5 3 2.5V6C4.38071 6 5.5 7.11929 5.5 8.5C5.5 9.88071 4.38071 11 3 11V14.5C6.31371 14.5 9 11.8137 9 8.5C9 7.11929 8.11929 6 7.5 6V7Z"
                            fill="currentColor" />
                        <path
                            d="M17.5 7C17.5 4.51472 15.4853 2.5 13 2.5V6C14.3807 6 15.5 7.11929 15.5 8.5C15.5 9.88071 14.3807 11 13 11V14.5C16.3137 14.5 19 11.8137 19 8.5C19 7.11929 18.1193 6 17.5 6V7Z"
                            fill="currentColor" />
                    </svg>

                    <p class="text-gray-700 leading-relaxed mb-6 inline">
                        Dengan penuh semangat, kami dari Badan Eksekutif Mahasiswa Keluarga Mahasiswa Universitas
                        Dian
                        Nuswantoro (BEM KM UDINUS) mengajak seluruh mahasiswa untuk terus berperan aktif dalam
                        menciptakan
                        lingkungan kampus yang kolaboratif, inklusif, dan berorientasi pada perubahan positif.
                    </p>
                </div>

                <p class="text-gray-700 leading-relaxed mb-6">
                    Kami percaya bahwa setiap mahasiswa memiliki potensi luar biasa untuk menjadi agen perubahan
                    —
                    bukan hanya di lingkungan akademik, tetapi juga dalam masyarakat luas. Melalui berbagai
                    program
                    kerja
                    dan inisiatif, BEM KM berkomitmen menjadi wadah aspirasi, penggerak kreativitas, dan
                    jembatan
                    antara
                    mahasiswa dengan civitas akademika.
                </p>

                <p class="text-gray-700 leading-relaxed mb-6">
                    Mari bersama-sama bersinergi dan beraksi, menyalakan semangat perjuangan mahasiswa yang
                    berpikir
                    kritis, bertindak solutif, dan bergerak dengan hati. Karena perubahan besar selalu dimulai
                    dari
                    langkah kecil
                    yang kita lakukan bersama.<!-- Icon tanda petik penutup --> <span
                        class="inline-block align-middle ml-2"> <svg class="w-6 h-6 text-orange-400 inline"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M21 13.5C21 10.1863 18.3137 7.5 15 7.5V11C16.3807 11 17.5 12.1193 17.5 13.5C17.5 14.8807 16.3807 16 15 16V19.5C18.3137 19.5 21 16.8137 21 13.5Z"
                                fill="currentColor" />
                            <path
                                d="M11 13.5C11 10.1863 8.31371 7.5 5 7.5V11C6.38071 11 7.5 12.1193 7.5 13.5C7.5 14.8807 6.38071 16 5 16V19.5C8.31371 19.5 11 16.8137 11 13.5Z"
                                fill="currentColor" />
                        </svg> </span>
                </p>
            </div>
        </div>

    </div>
</section>
