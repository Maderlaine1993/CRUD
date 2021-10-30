<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <title> Document </title>
    </head>

    <body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">

                Usuarios
             </a>
            <div>
                <img src="https://encuestasumgblog.files.wordpress.com/2017/04/logopngumg1.png?w=645" width="100">
            </div>
            <a class="navbar-brand" href="{{url('/listarol')}}" >

                Roles
            </a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <div class="imagen-center">
        <img src="https://encuestasumgblog.files.wordpress.com/2017/04/logopngumg1.png?w=645">
    </div>

    </body>
</html>
