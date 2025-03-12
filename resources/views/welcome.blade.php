<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite('resources/css/app.css')

    </head>
    <body class=" ">
        <x-header />
        <x-navigation />
        <x-game-banner />


        <div class="flex h-screen">

            <!-- Sidebar -->
            <div class="hidden lg:block w-64 h-full bg-[#1e1010] text-white p-4">
                <h2 class="text-2xl font-bold">Sidebar</h2>
                <ul class="mt-8 space-y-4">
                    <li><a href="#" class="text-gray-300 hover:text-white">Dashboard</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Settings</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Profile</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Notifications</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Logout</a></li>
                </ul>
            </div>

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col">

                <!-- Navbar -->
                <header class="bg-[#140c0a] p-4 flex justify-between items-center">

                    <div class="flex items-center bg-white p-2 rounded-lg shadow-md max-w-lg w-full">
                        <input type="text" placeholder="Search..." class="border-none outline-none w-full px-2 py-1" />

                    </div>
                </header>

                <!-- Main Content (Children) -->
                <main class=" flex-1">
                    <div class="relative min-h-screen bg-[#33130b]">
                        <!-- Background Blur -->
                        <div class="absolute inset-0 bg-[url('/bg.png')] bg-cover bg-center backdrop-blur-lg"></div>

                        <!-- Game Grid -->
                        <div class="relative grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 p-4">
                            @foreach ($games as $game)
                                <x-game-card :title="$game['title']" :image="$game['image']" :isNew="$game['isNew']" />
                            @endforeach
                        </div>
                    </div>
                </main>

            </div>
        </div>

    </body>
</html>
