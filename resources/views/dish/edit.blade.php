
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<h4 class="heading">Editar Plato</h4>
<form action="{{route('dish.update', $dish)}}"  method="POST">

    @csrf
    @method('put')
    <input type="text" name="nombre_plato"  id="nombre" placeholder="Nombre"  value="{{old('nombre_plato',$dish->nombre_plato) }}">
        <label for="nombre">Ingrese el Nombre</label>
        @error('nombre_plato')
                 <div style="color:crimson">Nombre Obligatorio</div>
            @enderror
        <br>
    </div>
    <div class="form-floating">
        <input type="text" name="descripcion"  id="descripcion" placeholder="Descripcion" value="{{old('descripcion',$dish->descipcion) }}">>
        <label for="descripcion">Ingrese Descripcion</label>
        @error('descripcion')
                 <div style="color:crimson">hola descripcion</div>
            @enderror
        <br>
    </div>
    <div class="form-floating">
        <input type="number" name="precio"  id="precio" placeholder="Precio"  value="{{old('precio',$dish->precio) }}">
        <label for="precio">Ingrese el precio</label>
        @error('precio')
                 <div class="" style="color:crimson">El Precio es Obligatorio</div>
            @enderror
        <br>
    </div>

    <div class="form-floating">
        <select name="category_id" id="category_id">
            <option value="">Seleccionar Categoria</option>
           
        @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->id }} - {{ $category->nombre }}" </option>
                    @endforeach
        </select>
        @error('category_id')
                 <div class=""  style="color:crimson">Debe seleccionar una Categoria</div>
            @enderror
        <br>

    <div class="form-floating">
        
        <br>
        <button type="submit" class="btn btn-outline-info">Actualizar</button>
</form>
</html>