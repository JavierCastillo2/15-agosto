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
        <div class="col-md-4">
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" class="form-control" name="names">
                </div>
                <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" class="form-control" name="lastnames">
                </div>
                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" class="form-control" name="email">
                </div>
            <hr>
                <div class="form-group">
                    <label for=""></label>
                    <button class="btn btn-primary">Crear Usuario</button>
                    <a href="{{ url('users') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>

