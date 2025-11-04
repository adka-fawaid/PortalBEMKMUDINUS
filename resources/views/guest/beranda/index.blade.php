<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Portal BEMKM UDINUS') }}</title>
    @vite('resources/css/app.css')

    <!-- Slideshow Styles (merged) -->
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

        /* Animate slide containers instead of raw images */
        .slideshow .slide {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            animation: fade 9s infinite ease-in-out;
            backface-visibility: hidden;
            display: block;
        }

        .slideshow .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .slideshow .slide .overlay {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: .25rem;
            align-items: flex-start;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(2, 6, 23, 0.45) 40%, rgba(2, 6, 23, 0.6) 100%);
            color: white;
            backdrop-filter: blur(4px);
        }

        .slideshow .slide .badge {
            background: linear-gradient(90deg, #f97316, #ef4444);
            padding: .25rem .6rem;
            font-weight: 600;
            font-size: .75rem;
            border-radius: 9999px;
            box-shadow: 0 4px 14px rgba(99, 102, 241, 0.12);
        }

        .slideshow .slide .title {
            font-weight: 700;
            font-size: 1.125rem;
            text-shadow: 0 6px 18px rgba(2, 6, 23, 0.6);
        }

        .slideshow .slide .meta {
            font-size: .8rem;
            opacity: .9;
        }

        .slideshow .decor {
            position: absolute;
            border-radius: 8px;
            pointer-events: none;
            mix-blend-mode: overlay;
        }

        .slideshow .decor.top-left {
            top: 0.75rem;
            left: 0.75rem;
            padding: .35rem .5rem;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.6));
            color: #0b2545;
            font-weight: 700;
            font-size: .75rem;
            border-radius: 9999px;
            box-shadow: 0 6px 18px rgba(2, 6, 23, 0.08);
        }

        /* Animation delays for slide containers */
        .slideshow .slide:nth-child(1) {
            animation-delay: 0s;
        }

        .slideshow .slide:nth-child(2) {
            animation-delay: 3s;
        }

        .slideshow .slide:nth-child(3) {
            animation-delay: 6s;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    @include('guest.components.navbar')

    <!-- Include Beranda Section -->
    @include('guest.beranda.section.beranda-section')

    <!-- Include Sambutan Section -->
    @include('guest.beranda.section.sambutan-section')

    <!-- Include Kabinet Section -->
    @include('guest.beranda.section.kabinet-section')

    <!-- Include Berita Section -->
    @include('guest.beranda.section.berita-section')

    <!-- Include Footer -->
    @include('guest.components.footer')

</body>

</html>
