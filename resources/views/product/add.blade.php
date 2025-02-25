@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
    <div class="container">
        <h1 class="my-4">Crear Nuevo Producto</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('product.save') }}" class="container mt-3">
            @csrf

            <input type="text" class="form-control mb-2" name="title" placeholder="Enter title" value="{{ old('title') }}">
            
            <textarea class="form-control mb-2" name="description" placeholder="Enter description">{{ old('description') }}</textarea>
            
            <input type="text" class="form-control mb-2" name="category" placeholder="Enter category" value="{{ old('category') }}">
            
            <input type="text" class="form-control mb-2" name="image" placeholder="Enter image URL" value="{{ old('image') }}">
            
            <input type="text" class="form-control mb-2" name="brand" placeholder="Enter brand" value="{{ old('brand') }}">
            
            <input type="number" class="form-control mb-2" name="price" placeholder="Enter price" value="{{ old('price') }}" step="0.01">
            
            <input type="number" class="form-control mb-2" name="stock" placeholder="Enter stock" value="{{ old('stock') }}">
            
            <input type="submit" class="btn btn-primary" value="Save">
        </form>



    </div>
@endsection