<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="max-w-7xl mx-auto">
        <a href="{{ route('report.index') }}">На главную</a>
    </div>
    <div class="max-w-7xl mx-auto">
        <form method="post" action="{{route('reports.update', ['report'=>$report->id])}}" >
            @csrf
            @method('put')
            <div>
                <input type="text" name="number" id="number" class="mb-8 border border-blue-600 rounded-lg px-3 py-1 w-62 bg-white  placeholder-gray-400 text-left"
                maxlength="10" placeholder="Номер авто" value="{{ old('number', $report->number) }}">
            </div>
            <div>
                <textarea name="description" 
                class="mb-8 h-50 w-full border border-blue-600 rounded-lg px-3 w-full bg-white placeholder-gray-400 text-left"
                placeholder="описание нарушения">{{ old('description', $report->description) }}</textarea>
            </div>
            <div>
                <button type="submit" class="inline-block px-6 py-2 bg-red-600 text-white rounded-md text-lg">
                    Обновить
                </button>
            </div>
        </form>

    </div>
</body>

</html>