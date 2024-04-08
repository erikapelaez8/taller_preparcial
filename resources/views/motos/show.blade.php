@extends('layouts.base')
@section('title', 'Ver Moto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-info">Ver detalles de la moto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class=" table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Cilindraje</th>
                        <th scope="col">Año</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$moto->marca}}</td>
                            <td>{{$moto->modelo}}</td>
                            <td>{{$moto->cilindraje}}</td>
                            <td>{{$moto->ano}}</td>
                            <td>{{$moto->descripcion}}</td>
                            <td>{{$moto->precio}}</td>
                            <td>{{$moto->categoria}}</td>
                            <td>{{$moto->color}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('motos.index') }}" class="btn btn-danger">Anterior</a>
            </div>
        </div>
    </div>
@endsection
