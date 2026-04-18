@extends('layouts.main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-med-12">
                <div class="card">
                    <div class="card-header">
                        Listado de Locales
                        <a href="{{route('places.create')}}" class="btn btn-success btn-sm float-end">Nuevo Local</a>
                    </div>
                    <div class="card-body">
                        @if(session('info'))
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        @endif
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Dirección</th>
                                <th>Barrio</th>
                                <th>Descripción</th>
                                <th>Fecha creación</th>
                                <th>Acción</th>
                            </thead>
                            <tbody>
                                @foreach ($places as $place)
                                <tr>
                                    <td>
                                        {{ $place->name }}
                                    </td>
                                    <td>
                                        {{ $place->category }}
                                    </td>
                                    <td>
                                        {{ $place->address }}
                                    </td>
                                    <td>
                                        {{ $place->neighborhood }}
                                    </td>
                                    <td>
                                        {{ $place->description }}
                                    </td>
                                    <td>
                                        {{ $place->created_at->format('d/m/Y H:i') }}
                                    </td>
                                    <td>
                                        <a href="{{ route('places.edit', $place->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <a href="javascript: document.getElementById('delete-{{ $place->id }}').submit()" class="btn btn-danger btn-sm">Eliminar</a>
                                        <form id="delete-{{ $place->id }}" action="{{ route('places.delete', $place->id ) }}" method="POST">
                                            @method('delete')
                                            @csrf
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
    