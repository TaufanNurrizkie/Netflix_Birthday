<!DOCTYPE html>
<html lang="en">
    @vite('resources/css/app.css')
<head>
    <meta charset="UTF-8">
    <title>Netflix Clone</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-black text-white">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-10 bg-transparent text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center space-x-4">
                <a href="/" class="text-lg font-bold">
                    <img src="{{ asset('netflix.png') }}" alt="Netflix Logo" class="h-12"> 
                </a>
                <ul class="flex space-x-4">
                    <li><a href="/home" class="hover:text-gray-300">Home</a></li>
                    <li><a href="#" class="hover:text-gray-300">TV Shows</a></li>
                    <li><a href="#" class="hover:text-gray-300">Movies</a></li>
                    <li><a href="#" class="hover:text-gray-300">Recently Added</a></li>
                    <li><a href="#" class="hover:text-gray-300">My List</a></li>
                </ul>
            </div>

            <div class="flex space-x-4 items-center">
                <!-- Search Icon -->
                <div class="search-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                        <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m17 17l4 4M3 11a8 8 0 1 0 16 0a8 8 0 0 0-16 0"/>
                    </svg>
                </div>
                <!-- Bell Icon -->
                <div class="bell-icon flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                        <path fill="white" d="M22 20H2v-2h1v-6.969C3 6.043 7.03 2 12 2s9 4.043 9 9.031V18h1zM5 18h14v-6.969C19 7.148 15.866 4 12 4s-7 3.148-7 7.031zm4.5 3h5a2.5 2.5 0 0 1-5 0"/>
                    </svg>
                </div>

                <div class="w-[40px] h-[40px] bg-white rounded-full"><img src="{{ asset('Topan.jpg') }}" alt="" class="rounded-full w-[40px] h-[40px]"></div>
            </div>
            
    </nav>
    
    @yield('content')
</body>
</html>
