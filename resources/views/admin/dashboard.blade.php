@extends('layouts.sidebar')

@section('content')
    @if (session('success'))
        <div role="alert" id="confirm-alert" class="alert alert-success bg-indigo-50 rounded-none text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif


    <div class="navbar bg-indigo-100 p-5 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-blue-600">DASHBOARD</h1>
        <button class="bg-red-500 text-white font-semibold hover:bg-red-600 px-4 py-2 rounded" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            LOGOUT
        </button>
    </div>

    <div class="p-10 bg-indigo-100">
        <div class="flex justify-center rounded-s-md">
            <div class="card bg-white w-1/2 shadow-xl">
                <div class="card-body">
                    <div class="flex  items-center mt-5">
                        <img src="https://img.icons8.com/?size=100&id=20749&format=png&color=000000" class="w-30 mr-4">
                        <h2 class="text-3xl text-blue-600 font-bold">SELAMAT DATANG, ADMIN</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full mt-20 flex lg:flex-row flex-col items-center gap-5 justify-center">
            <div class="card bg-blue-600 text-white w-96 rounded-2xl shadow-xl mr-5">
                <div class="card-body">
                    <h2 class="card-title text-lg font-normal">Guru</h2>
                    <div class="flex">
                        <h1 class="text-3xl font-bold">100</h1>
                        <img src="https://img.icons8.com/?size=100&id=60390&format=png&color=FFFFFF" class="w-40 ml-40">
                    </div>
                </div>
            </div>
            <div class="card bg-blue-600 text-white w-96 shadow-xl mr-5">
                <div class="card-body">
                    <a class="card-title text-lg font-normal" href="{{ route('siswa.index') }}">Siswa</a>
                    <div class="flex">
                        <h1 class="text-3xl font-bold">100</h1>
                        <img src="https://img.icons8.com/?size=100&id=23265&format=png&color=FFFFFF" class="w-40 ml-40">
                    </div>
                </div>
            </div>
            <div class="card bg-blue-600 text-white w-96 shadow-xl mr-5">
                <div class="card-body">
                    <h2 class="card-title text-lg font-normal">Pencatatan Poin</h2>
                    <div class="flex">
                        <h1 class="text-3xl font-bold">100</h1>
                        <img src="https://img.icons8.com/?size=100&id=41414&format=png&color=FFFFFF" class="w-40 ml-40">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
        @csrf
    </form>

   <script src="{{ asset('js/script.js') }}"></script>
@endsection
