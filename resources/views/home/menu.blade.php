<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ArmandoComidas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">register</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/menu">Menu</a>
      </li>
    </ul>
  </div>
</nav>
</head>
<body>
    
<h1>!Bienvenido  a nuestro MENU¡</h1>

<div class=""  >
@foreach ($dishes as $dish) 
                <tr>
                    <td>{{$dish->id}}</td>
                   
                    <td>{{$dish->nombre_plato}}</td>
                    <td>{{$dish->descripcion}}</td>
                    <td>{{$dish->precio}}</td>
                    <td>{{$dish->category_id}}</td>
                    <input type="checkbox" name="añadir" id="añadir">
                    <br><br>
                </tr>
                @endforeach
                <form action="{{route('ordenar')}}" method="POST">
                  <select name="mesa" id="mesa" >
                    <option value="">Seleccionar Mesa</option>
                    @foreach ($tables as $table)
                    <option value="">{{$table->id}}</option>
                    

                    @endforeach
                  </select>
                 <input class="form-control" type="submit" value="Ordenar">

                </form>
                </div>
</body>
</html>