@extends('layouts.base')

@section('title', "Edit {$moto->marca}")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Editar {{$moto->marca}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('motos.index') }}" class="btn btn-danger">Anterior</a>
            </div>
        </div>
        <form class="row shadow m-3 p-3" method="post" action="{{route('motos.update', $moto)}}">
            @csrf
            @method('PUT')
            <div class="col-md-6 mt-2">
                <label for="marca_moto" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{$moto->marca}}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="modelo_moto" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" value="{{$moto->modelo}}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="cilindraje_moto" class="form-label">Cilindraje</label>
                <input type="number" class="form-control" id="cilindraje" name="cilindraje" value="{{$moto->cilindraje}}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="ano_moto" class="form-label">Año de Fabricación</label>
                <input type="date" class="form-control" id="ano" name="ano" placeholder="Año de la moto" value="{{$moto->ano}}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="precio" class="form-label" >Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" value="{{$moto->precio}}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="color" class="form-label">Color</label>
                <select class="form-select" aria-label="Default select example" name="color" id="color" value="{{$moto->color}}">
                    <option selected>Seleccionar</option>
                    <option value="blanco" {{$moto->color === 'blanco' ? 'selected' : ''}}>Blanco</option>
                    <option value="negro" {{$moto->color === 'negro' ? 'selected' : ''}}>Negro</option>
                    <option value="gris" {{$moto->color === 'gris' ? 'selected' : ''}}>Gris</option>
                    <option value="azul" {{$moto->color === 'azul' ? 'selected' : ''}}>Azul</option>
                    <option value="amarillo" {{$moto->color === 'amarillo' ? 'selected' : ''}}>Amarillo</option>
                    <option value="rojo" {{$moto->color === 'rojo' ? 'selected' : ''}}>Rojo</option>
                </select>
            </div>
            <div class="col-md-6 mt-2">
                <label for="categoria" class="form-label">Categoria</label>
                <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
                    <option selected>Seleccionar</option>
                    <option value="deportiva" {{$moto->categoria === 'deportiva' ? 'selected' : '' }}>Deportiva</option>
                    <option value="naked" {{$moto->categoria === 'naked' ? 'selected' : '' }}>Naked</option>
                    <option value="custom" {{$moto->categoria === 'custom' ? 'selected' : '' }}>Custom</option>
                    <option value="touring" {{$moto->categoria === 'touring' ? 'selected' : '' }}>Touring</option>
                    <option value="scooter" {{$moto->categoria === 'scooter' ? 'selected' : '' }}>Scooter</option>
                </select>
            </div>
            <div class="col-md-12 mt-2">
                <label for="descripcion" class="form-label">Descripcion</label>
                <textarea rows="4" class="form-control" id="descripcion" name="descripcion" required>{{$moto->descripcion}}</textarea>
            </div>

            @if($errors->any())
                <div class="col-12 mt-2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
                                
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>

        </form>
    </div>
@endsection
