<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#DDE8FF]">
    <nav class="bg-white"> 
        <div class="max-w-7xl mx-auto px-4 py-5 flex justify-between items-center">
            <a href="/reports" class="font-bold">
                <span class="text-blue-600 text-3xl">НАРУШЕНИЙ</span>
                <span class="text-red-600 text-3xl">.НЕТ</span>
            </a>
            <p class="">Имя пользователя</p>
        </div>
    </nav>
    <div class="max-w-7xl mx-auto px-4 p-4">
    <a href="/reports" class="inline-block px-6 py-2 bg-red-600 text-white rounded-md text-lg">
        Создать заявление
    </a>
</div>
</body>
</html>