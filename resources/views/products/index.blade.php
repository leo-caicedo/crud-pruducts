@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

	<div class="col-md-8">
	    <div class="card">
		<div class="card-header">
		Productos
		<a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>

<table class="table">

    <thead>
	<tr>
    	    <th>Producto</th>
    	    <th>Cantidad</th>
    	    <th>Marca</th>
    	    <th colspan="2">&nbsp;</th>
    	</tr>
    </thead>

    <tbody>
    @foreach($products as $product)
    <tr>
        <td><a href="{{ route('products.show', $product) }}">{{ $product->product_name }}</a></td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->brand->brand_name }}</td>
	<td>
	    <a href="{{ route('products.edit', $product) }}" class="btn btn-primary btn-sm">Editar</a>
	</td>
	<td>
	    <form action="{{ route('products.destroy', $product) }}" method="POST">
		@csrf
		@method('DELETE')
		<input 
		    type="submit"
		    value="Eliminar"
		    class="btn btn-sm btn-danger"
		    onclick="return confirm('¿Desea elimar el product?')"
		>
	    </form>
	</td>
    </tr>
    @endforeach
    </tbody>

</table>

		</div>
	    </div>
	</div>

    </div>
</div>
@endsection
