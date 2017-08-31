@extends('store.template')
@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i> Detalle de producto</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="product-block">
                <img src="{{ $product->image }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-block">
                <h3>{{ $product->name }}</h3><hr>
                <div class="product-info">
                    <p>{{ $product->description }}</p>
                    <p>Precio: ${{ number_format($product->price,2) }}</p>
                    <p>
                        <a class="btn btn-warning btn-block" href="{{ route('cart-add', $product->slug) }}">
                            <i class="fa fa-cart-plus"></i>
                            Añadir</a>
                    </p>
                </div>
            </div><hr>
        </div>
            <p>
                <a class="btn btn-primary" href="{{ route('home') }}">
                    <i class="fa fa-chevron-circle-left"></i> Volver
                </a>
            </p>
        </div>
        @stop