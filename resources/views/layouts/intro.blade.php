<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Layout')</title>



    <!-- Font OVO -->
    <link href="https://fonts.googleapis.com/css2?family=Ovo&display=swap" rel="stylesheet">

    <!-- Font Angela White -->
    <style>
        @font-face {
            font-family: 'AngelaWhite';
            src: url('/font/angela-white.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .font-angela {
            font-family: 'AngelaWhite', cursive;
        }
    </style>

    <!-- CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Tailwind Config langsung via CDN -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cream: '#F7F3ED',
                        olive: '#BAA485',
                    },
                    maxWidth: {
                        'screen-custom': '1480px',
                    },
                    height: {
                        'screen-90': '92vh',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-cream text-gray-800 min-h-screen flex items-center justify-center overflow-hidden">


    <!-- Background Image Layer -->
    <div class="absolute inset-0 z-0">
       <img src="/images/intro/background-bangunan.svg" alt="Background Bangunan"
    class="w-full h-full max-w-[100%] max-h-[100%] object-contain opacity-50 scale-105 translate-y-[100px]">


    </div>

    <!-- Container with Border -->
    <div class="w-full max-w-screen-custom p-4 sm:p-8 md:p-12 lg:p-16 h-screen-90">
        <!-- SVG Corner Decorations -->
        <div class="pointer-events-none fixed inset-0 z-0">
            <img src="/images/intro/kiri-atas.svg" alt="Kiri Atas"
                class="absolute top-0 left-0 w-16 h-16 sm:w-24 sm:h-24 md:w-48 md:h-48 m-2 md:m-4">
            <img src="/images/intro/kanan-atas.svg" alt="Kanan Atas"
                class="absolute top-0 right-0 w-16 h-16 sm:w-24 sm:h-24 md:w-48 md:h-48 m-2 md:m-4">
            <img src="/images/intro/kiri-bawah.svg" alt="Kiri Bawah"
                class="absolute bottom-0 left-0 w-16 h-16 sm:w-24 sm:h-24 md:w-48 md:h-48 m-2 md:m-4">
            <img src="/images/intro/kanan-bawah.svg" alt="Kanan Bawah"
                class="absolute bottom-0 right-0 w-16 h-16 sm:w-24 sm:h-24 md:w-48 md:h-48 m-2 md:m-4">

            <!-- Corner Boxes -->
            <div class="absolute top-0 left-0 m-2 md:m-4 w-6 h-6 sm:w-8 sm:h-8 border-4 border-olive bg-transparent">
            </div>
            <div class="absolute top-0 right-0 m-2 md:m-4 w-6 h-6 sm:w-8 sm:h-8 border-4 border-olive bg-transparent">
            </div>
            <div class="absolute bottom-0 left-0 m-2 md:m-4 w-6 h-6 sm:w-8 sm:h-8 border-4 border-olive bg-transparent">
            </div>
            <div class="absolute bottom-0 right-0 m-2 md:m-4 w-6 h-6 sm:w-8 sm:h-8 border-4 border-olive bg-transparent">
            </div>
        </div>

        <!-- Main Content -->
        <main class="relative z-10">
            @yield('content')
        </main>
    </div>

</body>

</html>
