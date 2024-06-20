<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Crear Plato</h4>
    <form action="{{route('category.store')}}" method="POST">
        
    @csrf
    <div class="form-floating" >
        <input type="text" name="nombre"  id="nombre" placeholder="Nombre">
        <label for="nombre">Ingrese el Nombre</label>
        @error('nombre')
                 <div style="color:crimson">Nombre Obligatorio</div>
            @enderror
        <br>
    </div>
    <div class="form-floating">
        <input type="text" name="color"  id="color" placeholder="color">
        <label for="color">Ingrese Descripcion</label>
        @error('color')
                 <div style="color:crimson">Color Obligatorio debe empezar por #</div>
            @enderror
        <br>
    </div>
    
    <div class="form-floating">
        
        <br>
        <button type="submit" class="btn btn-outline-info">Crear</button>
        
    </div>
</body>
</html>