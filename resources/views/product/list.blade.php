@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')
<div class="row">
  @foreach ($viewData["products"] as $product)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card">
      <div class="card-body text-center">
        <h5 class="card-title">{{ $product["title"] }}</h5>
        <p class="card-text">Precio: ${{ number_format($product["price"], 2) }}</p>
        <p class="card-text">Categoría: {{ $product["category"] }}</p>
        <a href="{{ route('product.show', ['id' => $product['id']]) }}" class="btn btn-primary">
            Ver producto
        </a>

      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
