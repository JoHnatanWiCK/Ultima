<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Ver Categoria</h4>
<table>
<tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Color</th>
   
</tr>

<br><br>

<tr>        
    <td>{{$category->id}}</td>
    <td>{{$category->nombre}}</td>
    <td>{{$category->color}}</td>
   
   
</tr>

</table>
</body>
</html>