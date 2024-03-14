<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crear Nota</title>
</head>
<body>
  <form method="POST" action="{{ route('store') }}">
    @csrf
    <label>Título</label>
    <input type="text" name="title">
    @error('title')
      <p style="color: red;">{{ $message }}</p>
    @enderror
    <br>
    <label>Description</label>
    <input type="text" name="description">
    @error('description')
      <p style="color: red;">{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Guardar">
  
</body>
</html>