<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update',$category->id)}}" method="post">
        @method('put')

        @csrf
        nombre <input type="text" name="nombre" value="{{$category->nombre}}">
        descripcion <input type="text" name="descripcion" value="{{$category->descripcion}}">
        <button type="submit">Editar categoria</button>
    </form>
    @foreach ($category->getAttributes() as $key => $value)
        {{ $key }} <input type="text" name="{{ $key }}" value="{{ $value }}">
    @endforeach

    <form action="{{route('update_status',$category->id)}}" method="post">
        @csrf
        @method('put')
        <input type="submit" value="Cambiar estado">
    </form>
</body>
</html>