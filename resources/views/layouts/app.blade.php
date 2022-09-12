<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agridata tech</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

    <header class="shadow-sm w-full">
        <div class="flex text-white w-full items-center justify-between h-16 px-4 mx-auto max-w-screen-xl bg-zinc-900">


            <div class="flex align-items items-center space-x-4">
                <div class="p-3">
                    <a href="/">
                        <img class="w-36" src="{{ asset('images/logos/logo.png') }}">
                    </a>
                </div>

            </div>



        </div>

        <div class="border-t border-gray-100 lg:hidden">

        </div>
    </header>

    @yield('content')
</body>

<!-- Section 1 -->
<footer class="bg-white">
    <div class="flex justify-center items-center ">
        <div class="p-4">
            <img src="{{ asset('logos/nust.png') }}" class="w-32 mx-2" alt="" href="">
        </div>
        <div class="p-4">
            <img src="{{ asset('logos/indaba.jpg') }}" class="w-32 mx-2" alt="" href="">
        </div>
        <div class="p-4">
            <img src="{{ asset('logos/unesco.png') }}" class="w-32 mx-2" alt="" href="">
        </div>
        <div class="p-4">
            <img src="{{ asset('logos/government.png') }}" class="w-32 mx-2" alt="" href="">
        </div>






    </div>
    <div class="px-8 pt-16 mx-auto lg:px-12 xl:px-16 max-w-7xl">


        <div class="flex flex-col items-center justify-between py-10 border-t border-solid lg:flex-row border-gray">
            <ul class="flex flex-wrap space-x-5 text-xs">
                <li class="mb-6 text-center flex-full lg:flex-none lg:mb-0">&copy; {{ date('Y') }}
                    Agritech, Inc. All rights reserved.</li>

            </ul>


        </div>
    </div>
</footer>

<!-- Scripts -->




</html>
