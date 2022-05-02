@extends('layouts.master')

@section('content')
    <div class="row">       
        <div class="col-sm-4">
            <img src="{{ $pelicula->poster }}" style="height:200px"/>
        </div>      
        <div class="col-sm-8">
            <div>
                <h1>{{ $pelicula->title }}</h1>
                <h4>Año: {{ $pelicula->year }}</h4>
                <h4>Director: {{ $pelicula->director }}</h4>
                <br>
                <strong>Resumen:</strong>
                {{ $pelicula->synopsis }}
                <br>
                <br>
                @if ( $pelicula->rented )
                    <strong>Estado: </strong> Película actualmente alquilada
                    <br>
                    <br>
                    <button type="button" class="btn btn-danger">Devolver pelicula</button>
                @else 
                    <strong>Estado: </strong> Pelicula Disponible
                    <br>
                    <br>
                    <button type="button" class="btn btn-success">Alquilar Pelicula</button>
                @endif
                <div class="d-inline">
                    <a href="{{ url('catalog/edit/' . $id) }}" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                        Editar Pelicula
                    </a>       
                    <a href="{{ url('catalog') }}" class="btn btn-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                        </svg>   
                        Regresar a catalogo
                    </a>
                </div>                
            </div>
        </div> 
    </div>
@stop