@extends('layout/app')

@section('content')
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 py-4" action="/generate" method="GET">
            <h1 class="text-center text-2xl mb-4">Генератор пароля</h1>
            <div class="block mx-auto my-1">
                <div class="flex justify-between items-center mb-1">
                    <label for="WithLowerLetters">Строчные буквы(a-z)</label>
                    <input id="WithLowerLetters" type="checkbox" name="with-lower-letters">
                </div>
                <div class="flex justify-between items-center mb-1">
                    <label for="WithUpperLetters">Заглавные буквы(A-Z)</label>
                    <input id="WithUpperLetters" type="checkbox" name="with-upper-letters">
                </div>
                <div class="flex justify-between items-center mb-1">
                    <label for="WithNumbers">Цифры(0-9)</label>
                    <input id="WithNumbers" type="checkbox" name="with-numbers">
                </div>
                <div class="flex justify-between items-center mb-1">
                    <label for="WithMinus">Минус(-)</label>
                    <input id="WithMinus" type="checkbox" name="with-minus">
                </div>
                <div class="flex justify-between items-center mb-1">
                    <label for="WithUnderscore">Подчеркивание(_)</label>
                    <input id="WithUnderscore" type="checkbox" name="with-underscore">
                </div>
                <div class="flex justify-between items-center mb-1">
                    <label for="WithSpecialCharacters">Символы(!$%&:^?*#@/.)</label>
                    <input id="WithSpecialCharacters" type="checkbox" name="with-specia-characters">
                </div>
                <div class="flex justify-between items-center mb-1">
                    <label for="WithStaples">Скобки({[()]})</label>
                    <input id="WithStaples" type="checkbox" name="with-staples">
                </div>
                <div class="flex justify-between items-center">
                    <label for="SizePassword">Размер пароля</label>
                    <input class="border rounded border-gray-400" id="SizePassword" type="number" name="size-password" required value="8" min="4" max="256">
                </div>
            </div>
            <div class="flex justify-center pt-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="Submit" type="submit">Сгенерировать</button>
            </div>
        </form>
    </div>    
@endsection