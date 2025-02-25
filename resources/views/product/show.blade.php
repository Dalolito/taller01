@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')
<div class="card mb-3 shadow-sm">
  <div class="row g-0">
    <!-- Imagen del producto -->
    <div class="col-md-4 d-flex align-items-center justify-content-center bg-light">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start" alt="Product Image">
    </div>

    <!-- Detalles del producto -->
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title text-primary fw-bold">{{ $viewData["product"]["name"] }}</h3>
        <h4 class="text-success fw-semibold">Precio: ${{ number_format($viewData["product"]["price"], 2) }}</h4>
        <p class="text-muted">Categoría: {{ $viewData["product"]["category"] ?? 'No especificada' }}</p>

        <!-- Descripción del producto -->
        <p class="mt-3">{{ $viewData["product"]["description"] ?? 'No hay descripción disponible.' }}</p>

        <!-- Botón para eliminar el producto -->
        <form action="{{ route('product.delete', ['id' => $viewData['product']['id']]) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-3">
                <i class="bi bi-trash"></i> Eliminar producto
            </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection