<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('users/create') }}" class="btn btn-primary">Crear Usuario</a>
            @if (session('update'))
                <div class="alert alert-success mt-3" >
                    {{ session('update') }}
                </div>
            @elseif (session('delete'))
            <div class="alert alert-danger mt-3" >
                {{ session('delete') }}
            </div>
            @elseif (session('create'))
            <div class="alert alert-info mt-3" >
                {{ session('create') }}
            </div>
            @endif
            <div class="table-reponsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Fecha de creacion</th>
                            <th>Fecha de Actualizacion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $users as $User )
                            <tr>
                                <td>{{ $User->id }}</td>
                                <td>{{ $User->names }}</td>
                                <td>{{ $User->lastnames }}</td>
                                <td>{{ $User->email }}</td>
                                <td>{{ $User->created_at }}</td>
                                <td>{{ $User->updated_at }}</td>
                                <td>
                                    <form action="{{ route('users.destroy', $User->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('users.show', $User->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href= "{{ route('users.edit',$User->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $users-> Links() }}
        </div>
    </div>
</div>
</body>
</html>
