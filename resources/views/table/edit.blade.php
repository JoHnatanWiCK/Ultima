
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>

<h4 class="heading">Editar Categoria</h4>
<form action="{{route('table.update', $table)}}"  method="POST">

    @csrf
    @method('put')
    <input type="number" name="capacidad"  id="capacidad" placeholder="capacidad" value="{{old('capacidad',$table->capacidad) }}">
        <label for="nombre">Ingrese la Capacidad</label>
        @error('capacidad')
                 <div style="color:crimson"> Obligatorio</div>
            @enderror
        <br>
    </div>
    
    
    <div class="form-floating">
        
        <br>
        <button type="submit" class="btn btn-outline-info">Actualizar</button>
</form>
</html>