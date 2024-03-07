<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Nota</title>
</head>
<body>
  <h1>Editar Nota</h1>
  <form action="{{ route('update', $note->id) }}" method="POST">
    @method('put')
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" value="{{$note->title}}">
    <br>
    <label for="content">Content</label>
    <textarea name="description" id="" cols="30" rows="10">{{$note->description}}</textarea>
    <button type="submit" name="Update"> Actualizar</button>
  </form>
  <a href="{{ route('index') }}">Volver</a>
</body>
</html>