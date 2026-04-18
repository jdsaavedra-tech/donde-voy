@extends('layouts.main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-med-12">
                <div class="card">
                    <div class="card-header">
                        Editar local
                    </div>
                    <div class="card-body">
                        <form action="{{ route('places.update', $place->id) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name" value="{{ $place->name}}">
                            </div>
                            <div class="form-group">
                                <label for="">Categoría</label>
                                <input type="text" class="form-control" name="category" value="{{ $place->category}}">
                            </div> 
                            <div class="form-group">
                                <label for="">Dirección</label>
                                <input type="text" class="form-control" name="address" value="{{ $place->address}}">
                            </div> 
                            <div class="form-group">
                                <label for="">Barrio</label>
                                <input type="text" class="form-control" name="neighborhood" value="{{ $place->neighborhood}}">
                            </div> 
                            <div class="form-group">
                                <label for="">Descripción</label>
                                <input type="text" class="form-control" name="description" value="{{ $place->description}}">
                            </div>  
                            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                            <a href="{{ route('places.index') }}" class="btn btn-danger mt-2">Cancelar</a>                                                     
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection