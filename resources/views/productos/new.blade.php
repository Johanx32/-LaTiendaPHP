@extends('layouts.menu')

@section('contenido')

<div class="row">
    <h1 class="grey-text text-darken-1">Nuevo Producto</h1>
</div>

<div class="row">
    <form class="col s8">
        <div class="row">
            <div class="input-field col s8">
                <input type="text" placeholder="Nombre de producto" id="nombre" name="nombre">
                <label for="nombre">Nombre</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <textarea name="desc" id="desc" class="materialize-textarea"></textarea>
                <label for="desc">Descripcion</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <input type="text" placeholder="Precio del producto" id="Precio" name="Precio">
                <label for="Precio">Precio</label>
            </div>
        <div class="file-field input-field col s8">
            <div class="btn brown darken-4">
                <span>Imagen del producto</span>
                <input type="file" name="imagen">
            </div><br><br>
            <div class="file-path-wrapper">
                <input class="file-path" type="text">
            </div>
        </div>
        </div>


        <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
            </button>
        </div>
    </form>
</div>

@endsection