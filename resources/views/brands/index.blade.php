@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

	<div class="col-md-8">
	    <div class="card">
		<div class="card-header">
		Marcas
		<a href="{{ route('brands.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>

<table class="table">

    <thead>
	<tr>
    	    <th>Marca</th>
    	    <th>Referencia</th>
    	    <th colspan="2">&nbsp;</th>
    	</tr>
    </thead>

    <tbody>
    @foreach($brands as $brand)
    <tr>
        <td>{{ $brand->brand_name }}</td>
        <td>{{ $brand->reference }}</td>
	<td>
	    <a href="{{ route('brands.edit', $brand) }}" class="btn btn-primary btn-sm">Editar</a>
	</td>
	<td>
	    <form action="{{ route('brands.destroy', $brand) }}" method="POST">
		@csrf
		@method('DELETE')
		<input
		    type="submit"
		    value="Eliminar"
		    class="btn btn-sm btn-danger"
		    onclick="return confirm('¿Desea elimar la marca?')"
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
