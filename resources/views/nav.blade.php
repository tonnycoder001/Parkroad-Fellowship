<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Laravel Application</title>

</head>

<body class="bg-gray-100">
    <div id="app">
        <nav class="bg-white shadow-md">
            <div class="container mx-auto px-6 py-3">
                <div class="flex justify-between ">

                    <div class="flex justify ">
                        <img src="images/logo.png" class="h-8 w-auto" loading="lazy" srcset="images/logo.png 4x">
                    </div>
                    <h1 class="font-bold text-3xl">PARKROAD FELLOWSHIP</h1>
                    <div class="flex space-x-4">


                        <ul class="flex space-x-4">
                            <li>
                                <a class="text-gray-800 hover:text-gray-600" href="">Login</a>
                            </li>
                            <li>
                                <a class="text-gray-800 hover:text-gray-600" href="{{ route('register') }}">Register</a>
                            </li>

                            <li class="relative">
                                <a id="navbarDropdown" class="text-gray-800 hover:text-gray-600" href="#"
                                    role="button">
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
