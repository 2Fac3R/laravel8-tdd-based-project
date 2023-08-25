<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Tags Manager</title>
</head>

<body class="bg-gray-200 py-8">
    <div class="max-w-lg bg-white mx-auto p-6 rounded shadow">
        @if ($errors->any())
            <ul class="list-none p-4 mb-4 bg-red-100 text-red-500">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="tags" method="POST" class="flex flex-column mb-4">
            @csrf
            <input type="text" name="name" class="rounded-l bg-gray-200 p-4 w-full outline-none"
                placeholder="New tag">
            <input type="submit" value="Add" class="rounded-r px-8 bg-blue-500 text-white outline-none">
        </form>
        <table class="w-full">
            <thead>
                <th>Name</th>
                <th>Slug</th>
                <th>Actions</th>
            </thead>
            @forelse ($tags as $tag)
                <tr>
                    <td class="px-4 py-2">{{ $tag->name }}</td>
                    <td class="px-4 py-2">{{ $tag->slug }}</td>
                    <td class="px-4 py-2">
                        <form action="tags/{{ $tag->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="px-4 rounded bg-red-500 text-white">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>
                        <p>No tags found.</p>
                    </td>
                </tr>
            @endforelse
        </table>
    </div>
</body>

</html>
