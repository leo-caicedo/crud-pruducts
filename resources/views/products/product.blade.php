@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

<div class="card mb-4">
    <div>
	<h1 class="card-title ml-3 mt-2">{{ $product->product_name }}</h1>
	<p class="card-text ml-3"><strong>Marca</strong>: {{ $product->brand->brand_name }}
	<p class="card-text ml-3"><strong>Talla</strong>: {{ $product->size }}
	<p class="card-text ml-3"><strong>Cantidad en inventario</strong>: {{ $product->stock }}
	</p>
	<p class="card-text ml-3">
	   <strong>Fecha de embarque</strong>: {{ $product->date_of_shipment->format('d M Y') }}
	</p>
	<p class="card-text ml-3 mr-3 mb-3"><strong>Observaciones</strong>: {{ $product->remarks }}
    </div>
</div>

    </div>
</div>
@endsection
