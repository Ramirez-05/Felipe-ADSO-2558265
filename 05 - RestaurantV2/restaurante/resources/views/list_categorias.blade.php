<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @forelse ($categorias as $category)
            <li>
                {{ $category->nombre }}
                <a href="{{ route('update_categoria', $category->id) }}">Editar</a>

            </li>
        @empty
            <li>lista vacía</li>
        @endforelse
    </ul>
</body>
</html>