@extends('store.template')
@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-shopping-bag"></i>Cotización</h1>
    </div>

    <div class="table-cart">
        @if(count($cart))
        <p>
            <a href="{{ route('cart-trash') }}" class="btn btn-danger">
                <i class="fa fa-trash"></i>
                Vaciar cotización
            </a>
        </p>
        
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Quitar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $item)
                    <tr>
                        <td><img src="{{ $item->image }}"></td>
                        <td>{{ $item->name }}</td>
                        <td>${{ number_format($item->price,2) }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>${{ number_format($item->price * $item->quantity,2) }}</td>
                        <td>
                            <a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-danger">
                                <i class="fa fa-remove"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <h3><span class="label label-warning">No hay productos en la cotización</span></h3>
        @endif
    </div>
</div>
@stop