<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="max-w-7xl mx-auto">
        <a href="{{ route('report.index') }}">На главную</a>
    </div>
    <div>
        <form method="post" action="{{route('reports.update', ['report'=>$report])}}" >
            @csrf
            @method('put')
            <div>
                <input type="text" class="mb-8 border border-blue-600 rounded-lg px-3 py-1 w-62 bg-white  placeholder-gray-400 text-left"
                    maxlength="6" placeholder="Номер авто">
            </div>
            <div>
                <input type="text" class="mb-8 h-50 text-top border border-blue-600 rounded-lg px-3 w-150 bg-white  placeholder-gray-400 text-left"
                    placeholder="описание заявки">
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