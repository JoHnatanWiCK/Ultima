<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Crear Plato</h4>
    <form action="{{route('plato.store')}}" method="POST">
        
    @csrf
    <div class="form-floating" >
        <input type="text" name="nombre_plato"  id="nombre" placeholder="Nombre">
        <label for="nombre">Ingrese el Nombre</label>
        @error('nombre_plato')
                 <div style="color:crimson">Nombre Obligatorio</div>
            @enderror
        <br>
    </div>
    <div class="form-floating">
        <input type="text" name="descripcion"  id="descripcion" placeholder="Descripcion">
        <label for="descripcion">Ingrese Descripcion</label>
        @error('descripcion')
                 <div style="color:crimson">hola descripcion</div>
            @enderror
        <br>
    </div>
    <div class="form-floating">
        <input type="number" name="precio"  id="precio" placeholder="Precio">
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
        <button type="submit" class="btn btn-outline-info">Crear</button>
        
    </div>
</body>
</html>