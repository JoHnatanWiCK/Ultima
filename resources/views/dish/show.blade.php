<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Ver plato</h4>
<table>
<tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Precio</th>
    <th>Categoria</th>
</tr>

<br><br>

<tr>        
    <td>{{$dish->id}}</td>
    <td>{{$dish->nombre_plato}}</td>
    <td>{{$dish->descipcion}}</td>
    <td>{{$dish->precio}}</td>
    <td>{{$dish->category_id}}</td>
   
</tr>

</table>
</body>
</html>