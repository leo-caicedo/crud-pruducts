@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear marca</div>

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
                        action="{{ route('brands.store') }}"
                        method="POST"
                    >
                        <div class="form-group">
                            <label>Nombre *</label>
                            <input type="text" name="brand_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Referencia *</label>
                            <input type="text" name="reference" class="form-control" required>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Guardar" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
