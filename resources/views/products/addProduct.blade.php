@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
    <div class="container">
        <h1 class="my-4">Crear Nuevo Producto</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf <!-- Token de seguridad para formularios en Laravel -->

            <!-- Campo: Título -->
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <!-- Campo: Descripción -->
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <!-- Campo: Categoría -->
            <div class="mb-3">
                <label for="category" class="form-label">Categoría</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="Ropa">Ropa</option>
                    <option value="Accesorios">Accesorios</option>
                    <option value="Bicicletas">Bicicletas</option>

                </select>
            </div>

            <!-- Campo: Imagen -->
            <div class="mb-3">
                <label for="image" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>

            <!-- Campo: Marca -->
            <div class="mb-3">
                <label for="brand" class="form-label">Marca</label>
                <input type="text" class="form-control" id="brand" name="brand" required>
            </div>

            <!-- Campo: Precio -->
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>

            <!-- Campo: Stock -->
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>

            <!-- Botón de envío -->
            <button type="submit" class="btn btn-primary">Crear Producto</button>
        </form>
    </div>
@endsection