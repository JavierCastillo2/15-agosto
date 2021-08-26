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
        <div class="col-md-6">
            <div class="table-reponsive">
                <table class="table">
                    <tr>
                        <td><b>Nombre</b></td>
                        <td>{{$user->names}}</td>
                    </tr>
                    <tr>
                        <td><b>Apellido</b></td>
                        <td>{{$user->lastnames}}</td>
                    </tr>
                    <tr>
                        <td><b>Correo</b></td>
                        <td>{{$user->email}}</td>
                    </tr>
                </table>
                <div class="form-group">
                    <a href="{{ url('users') }}" class="btn btn-danger">Ir a Inicio</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
