<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Prueba</title>
</head>
<body style="background-color: lightslategrey">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="/show">Poet's Circle</a>

      </nav>
      
      
    <div class="container">
        <br>
        <h2 style="color: whitesmoke">Tabla clientes</h2>   
    <a style="color: black; text-decoration: none;"  href="/insert"><h4>Agregar nuevo cliente <img src="{{url('images./create.png')}}" alt=""></h4></a>
        <table class="table table-dark table-striped">
        <thead>
            <tr>
            <th>poet Code</th>
            <th>First Name</th>
            <th>Sur Name</th>
            <th>Address</th>
            <th>Post Code</th>
            <th>Telephone Number</th>
            <th>Actualizar</th>
            <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($poet as $user)
            <tr>
            <td scope="row">{{$user->poetCode}}</td>
            <td>{{$user->firstName}}</td>
            <td>{{$user->surName}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->postCode}}</td>
            <td>{{$user->telephoneNumber}}</td>
            <td style="text-align: center"><a href="{{action('Crud@show',['poetCode'=>$user->poetCode])}}"><img src="{{url('images./edit.png')}}" alt="Icono editar"></a></td>
            <td style="text-align: center"><a href="{{action('Crud@destroy',['poetCode'=>$user->poetCode])}}"><img src="{{url('images./delete.png')}}" alt="Icono borrar"></a></td>
            </tr>
            @endforeach
        </tbody>
        </table>
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>    
        @endif

</body>
</html>