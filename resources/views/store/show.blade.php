@extends('store.template')
@section('content')
<h1>Detalle del producto</h1>
<div class="product-block">
    <h3>{{ $product->name }}</h3><hr>
    <div class="product-info">
        <p>{{ $product->description }}</p>
        <p>Precio: ${{ number_format($product->price,2) }}</p>
        <p>
            <a href="#">Añadir</a>
        </p>
    </div>
</div>
<p><a href="{{ route('home') }}">Volver</a></p>
@stop