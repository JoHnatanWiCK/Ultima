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
<h1 >Lista de categorias</h1>       
            
            <table > 
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre:</th>
                        <th>Color:</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category) 
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->nombre}}</td>
                        <td>{{$category->color}}</td>
                       
                        <td> 
                            <a href="{{route('category.show', $category->id)}}" >Mostrar</a> 
                        </td>
                        <td>     <form action="{{route('category.editar',$category->id)}}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-outline-info">Editar</button>
                        </form>
                    
                    </td>
                            <td>
                            <form action="{{route('category.destroy',$category->id)}}" method="POST">
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
              <a href="/crearC">Añadir Categoria Nueva</a>
            </div>
</body>
</html>