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

  @if (isset($user) and is_object($user))
        @php
            $title = 'Editar cliente';
            $poetCode = $user->poetCode;
            $firstName = $user->firstName;
            $surName = $user->surName;
            $address = $user->address;
            $postCode = $user->postCode;
            $telephoneNumber = $user->telephoneNumber;
        @endphp
    @else 
        @php
            $title = 'Registrar cliente';
            $poetCode = '';
            $firstName = '';
            $surName = '';
            $address = '';
            $postCode = '';
            $telephoneNumber = '';
        @endphp
    @endif

  

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">{{$title}}</a>
        
        
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/show">volver</a>
          </li>
        </ul>
      </nav>
      
      <div class="container-fluid">
        <h3>Tabla Poetas</h3>
      </div>

    <div class="container">
        <h2>Rellene los campos</h2>
    <form action="{{isset($user) ? action('Crud@update') :action('Crud@store')}}" method="post" >
        {{csrf_field()}}
    @if (isset($user) and is_object($user))
        <input type="hidden" name="poetCode" value="{{$poetCode}}">
    @endif
      <div class="form-group">
        <label for="cCode">Poet code:</label>
        <input type="number" class="form-control" id="cCode" placeholder="Enter Poet Code" name="cCode" value="{{$poetCode}}">
      </div>
      <div class="form-group">
        <label for="fName">First name:</label>
        <input type="text" class="form-control" id="fName" placeholder="Enter first Name" name="fName" value="{{$firstName}}">
      </div>
      <div class="form-group">
        <label for="sName">Sur name:</label>
        <input type="text" class="form-control" id="sName" placeholder="Enter sur name" name="sName" value="{{$surName}}">
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{$address}}">
      </div>
      <div class="form-group">
        <label for="pCode">Post Code:</label>
        <input type="number" class="form-control" id="pCode" placeholder="Enter post code" name="pCode" value="{{$postCode}}">
      </div>
      <div class="form-group">
        <label for="tNumber">Telephone Number:</label>
        <input type="number" class="form-control" id="tNumber" placeholder="Enter password" name="tNumber" value="{{$telephoneNumber}}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>
</html>