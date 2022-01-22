<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Генератор пароля</title>
    <script>
        function copyPassword() {
            password = document.querySelector('#Password').value;
            navigator.clipboard.writeText(password)
                .then(() => alert('Текст скопирован в буфер обмена'))
                    .catch((error) => console.log('Копирование не удалось', error));
        }
    </script>
</head>
<body>
    <div class="w-screen h-screen flex justify-center items-center bg-[#edf2f7]">
        @yield('content')
    </div>
</body>
</html>