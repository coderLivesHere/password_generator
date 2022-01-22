@extends('layout/app')

@section('content')
    <div class="w-full max-w-xs">
        <div class="bg-white shadow-md rounded px-8 py-4">
            <h1 class="text-center text-2xl mb-4">Пароль</h1>
            <div class="block border rounded">
                <input id="Password" class="w-full" disabled type="text" value="{{ $password }}">
            </div>
            <div class="flex justify-center pt-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="CopyPass" onclick="copyPassword()">Скопировать</button>
            </div>
            <div class="flex justify-center pt-4">
                <a href="/" class="text-blue-500 text-sm underline decoration-1" id="Back">Вернуться назад</a>
            </div>
        </div>
    </div>    
@endsection