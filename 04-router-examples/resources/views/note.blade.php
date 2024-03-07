<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crear Nota</title>
</head>
<body>
  <h1>Crear Nota</h1>
  <form action="{{ route('store') }}" method="post">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="description">Content:</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <br>
    <button type="submit" value="create">Crear Nota</button>
  </form>
  
</body>
</html>