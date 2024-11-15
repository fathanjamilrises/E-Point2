<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-indigo-100 min-h-screen">
    <div class="flex min-h-screen">
        <div class="sidebar bg-indigo-100 w-64 shadow-md p-5 min-h-screen">
            <div class="flex justify-center mt-5 items-center mb-5">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhz8AFQvvGtYEen7kAp-davF2fGzhMzOgV0bEb-7JXL7lHlwsOmtGa8lxeB6JEIHYuuyszOELhKwY2ZNYIMfJdd4nIsYc7eWnUYHwomteMAB8V8794lU6aPwMh_YtkeUJvbznVYuxl690E/s200/LOGO+SMKN4+2015.png" alt="" class="w-10 mr-2">
                <h1 class="text-2xl font-bold text-blue-600">E-POINT</h1>
            </div>
            <ul class="space-y-5 my-36 mx-5">
                <li class="flex items-center space-x-3 text-blue-600 text-lg hover:text-blue-800">
                    <svg class="w-6 h-6 text-blue-600 hover:text-blue-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                    </svg>
                    <a class="font-semibold" href="{{ route('admin/dashboard') }}">Beranda</a>
                </li>
                <li class="flex items-center space-x-3 text-blue-600 text-lg hover:text-blue-800">
                    <svg class="w-6 h-6 text-blue-600 hover:text-blue-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                    </svg>
                    <a class="font-semibold" href="{{ route('siswa.index') }}">Data Siswa</a>
                </li>
            </ul>
        </div>
        <div class="w-0.5 bg-gray-300"></div>
        <div class="flex-1 p-10 bg-indigo-100">
            @yield('content')
        </div>
    </div>
</body>
</html>
