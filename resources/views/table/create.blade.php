<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Crear Mesa</h4>
    <form action="{{route('table.store')}}" method="POST">
        
    @csrf
    <div class="form-floating" >
        <input type="number" name="capacidad"  id="capacidad" placeholder="Capacidad">
        <label for="capacidad">Ingrese la Capacidad</label>
        @error('capacidad')
                 <div style="color:crimson"> Obligatorio</div>
            @enderror
        <br>
    </div>

    
    <div class="form-floating">
        
        <br>
        <button type="submit" class="btn btn-outline-info">Crear</button>
        
    </div>
</body>
</html>