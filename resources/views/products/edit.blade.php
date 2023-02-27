@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar producto</div>

                <div class="card-body">

		    @if($errors->any())
		    <div class="alert alert-danger">
		        @foreach($errors->all() as $error)
		        - {{ $error }} <br>
		        @endforeach
		    </div>
		    @endif

		    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form
                        action="{{ route('products.update', $product) }}"
                        method="POST"
                    >
                        <div class="form-group">
                            <label>Nombre *</label>
                            <input type="text" name="product_name" class="form-control" required value="{{ old('product_name', $product->product_name) }}">
                        </div>
                        <div class="form-group">
                            <label for="size">Talla *</label>
				<select name="size" id="size" required value="{{ old('size', $product->size) }}">
				    <option value="S">S</option>
				    <option value="M">M</option>
				    <option value="L">L</option>
				</select>
                        </div>
                        <div class="form-group">
                            <label>Observaciones *</label>
                            <input type="text" name="remarks" class="form-control" required value="{{ old('remarks', $product->remarks) }}">
                        </div>
                        <div class="form-group">
                            <label>Cantidad en inventario *</label>
                            <input type="number" name="stock" class="form-control" required value="{{ old('stock', $product->stock) }}">
                        </div>
                        <div class="form-group">
                            <label for="brand">Marca *</label>
				<select name="brand_id" id="brand" required value="{{ old('brand', $product->brand->brand_name) }}">
				    @foreach($brands as $brand)
					<option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
				    @endforeach
				</select>
                        </div>
                        <div class="form-group">
                            <label>Fecha de embargo *</label>
                            <input type="date" name="date_of_shipment" class="form-control" required value="{{ old('date_of_shipment', $product->date_of_shipment) }}">
                        </div>
                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
