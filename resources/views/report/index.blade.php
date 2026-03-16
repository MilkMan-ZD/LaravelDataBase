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
    <div class="max-w-7xl mx-auto">
        <a href="{{ route('reports.create') }}">Создать заявление</a>
    </div>
    <div>
        <span>Сортировка по дате создания: </span>
        <a href="{{ route('reports.index', ['sort'=>'desc']) }}">сначала новые</a>
        <a href="{{ route('reports.index', ['sort'=>'asc']) }}">сначала старые</a>
    </div>
    <div class="max-w-7xl mx-auto grid grid-cols-3 gap-4 p-4">
        @foreach ($reports as $report)
        <div class="bg-white border border-gray-200 rounded-lg p-4">
            <div>
                <p class="font-bold  text-red-600">
                    {{ $report->created_at }}
                </p>
                <p class="font-bold ">
                    {{ $report->number }}
                </p>
                <p class="mt-2">
                    {{ $report->description }}
                </p>
                <p>
                    Статус заявления - <span class="font-bold">{{ $report->status->name }}</span>
                </p>
            </div>
            <div>
                <form method="POST" action="{{route('reports.destroy', $report->id)}}">
                    @method('delete')
                    @csrf
                    <input class="text-red-600" type="submit" value="Удалить">
                </form>
            </div>
        </div>
        @endforeach
        {{$reports->links()}}
    </div>
    <div class="max-w-7xl mx-auto px-4 p-4">
        <a href="/reports" class="inline-block px-6 py-2 bg-red-600 text-white rounded-md text-lg">
            Создать заявление
        </a>
    </div>
</body>

</html>