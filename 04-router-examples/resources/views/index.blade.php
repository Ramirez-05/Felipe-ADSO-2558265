<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listado de Notas</title>
</head>
<body>

  @if($message = Session::get('success'))
    <div style="background-color: green; color: white;">
      <p>{{ $message }}</p>
    </div>
  @endif

  @if($message = Session::get('error'))
    <div style="background-color: red; color: white;">
      <p>{{ $message }}</p>
    </div>
  @endif


  <h4>Crear Nota</h4>
  <a href="{{ route('create') }}">Crear Nota</a>
  <h1>Listado</h1>
  <ul>
    @forelse($notes as $note)
    <li>
      <p>
        <h3>{{$note->title}}</h3>
        <button><a href="{{ route('show', $note->id) }}"><img src="{{ asset('assets/img/view.png') }}" alt="Ver" width="20px"></a></button>
        <button><a href="{{ route('edit', $note->id) }}"><img src="{{ asset('assets/img/edit.png') }}" alt="Editar" width="20px"></a></button>
        <form action="{{ route('destroy', $note->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button><img src="{{ asset('assets/img/delete.png') }}" alt="Eliminar" width="20px"></button>
        </form>
      </p>

    </li>
    @empty
      <li>Lista vacia </li>
    @endforelse
  </ul>
</body>
</html>