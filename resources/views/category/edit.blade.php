
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>

<h4 class="heading">Editar Categoria</h4>
<form action="{{route('category.update', $category)}}"  method="POST">

    @csrf
    @method('put')
    <input type="text" name="nombre"  id="nombre" placeholder="Nombre" value="{{old('nombre',$category->nombre) }}">
        <label for="nombre">Ingrese el Nombre</label>
        @error('nombre')
                 <div style="color:crimson">Nombre Obligatorio</div>
            @enderror
        <br>
    </div>
    <div class="form-floating">
        <input type="text" name="color"  id="color" placeholder="color" value="{{old('color',$category->color) }}">
        <label for="color">Ingrese Descripcion</label>
        @error('color')
                 <div style="color:crimson">Color Obligatorio debe empezar por #</div>
            @enderror
        <br>
    </div>
    
    <div class="form-floating">
        
        <br>
        <button type="submit" class="btn btn-outline-info">Actualizar</button>
</form>
</html>