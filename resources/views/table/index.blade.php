<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ArmandoComidas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/indexM">Mesas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/indexC">categorias</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/index">Platos</a>
      </li>
    </ul>
  </div>
</nav>

</head>
<body>
<h1 >Lista de Mesas</h1>       
            
            <table > 
                <thead>
                    <tr>
                        <th>#</th>
                        <th>capacidad:</th>
                     
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tables as $table) 
                    <tr>
                        <td>{{$table->id}}</td>
                        <td>{{$table->capacidad}}</td>
                       
                       
                        <td> 
                            <a href="{{route('table.show', $table->id)}}" >Mostrar</a> 
                        </td>
                        <td>     <form action="{{route('table.editar',$table->id)}}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-outline-info">Editar</button>
                        </form>
                    
                    </td>
                            <td>
                            <form action="{{route('table.destroy',$table->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">Eliminar</button> 
                            </form>  
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
              <a href="/crearM">Añadir Mesa Nueva</a>
            </div>
</body>
</html>