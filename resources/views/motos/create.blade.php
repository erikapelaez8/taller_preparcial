@extends('layouts.base')

@section('title', 'Crear nueva moto')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Crear nueva moto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('motos.index') }}" class="btn btn-danger">Anterior</a>
        </div>
    </div>
    <form class="row shadow m-3 p-3" method="post" action="{{route('motos.store')}}">
        @csrf
        <div class="col-md-6 mt-2">
            <label for="marca_moto" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" required value="{{old('marca')}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="modelo_moto" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" required value="{{old('modelo')}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="cilindraje_moto" class="form-label">Cilindraje</label>
            <input type="number" class="form-control" id="cilindraje" name="cilindraje" required value="{{old('cilindraje')}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="ano_moto" class="form-label">Año de Fabricación</label>
            <input type="date" class="form-control" id="ano" name="ano" placeholder="Año de la moto" required value="{{old('ano')}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="precio" class="form-label" >Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" required value="{{old('precio')}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="color" class="form-label">Color</label>
            <select class="form-select" aria-label="Default select example" name="color" id="color">
                <option selected>Seleccionar</option>
                <option value="blanco" {{old('color') == 'blanco' ? 'selected' : ''}}>Blanco</option>
                <option value="negro" {{old('color') == 'negro' ? 'selected' : ''}}>Negro</option>
                <option value="gris" {{old('color') == 'gris' ? 'selected' : ''}}>Gris</option>
                <option value="azul" {{old('color') == 'azul' ? 'selected' : ''}}>Azul</option>
                <option value="amarillo" {{old('color') == 'amarillo' ? 'selected' : ''}}>Amarillo</option>
                <option value="rojo" {{old('color') == 'rojo' ? 'selected' : ''}}>Rojo</option>
            </select>
        </div>
        <div class="col-md-6 mt-2">
            <label for="categoria" class="form-label">Categoria</label>
            <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
                <option selected>Seleccionar</option>
                <option value="deportiva" {{old('categoria') == 'deportiva' ? 'selected' : ''}}>Deportiva</option>
                <option value="naked" {{old('categoria') == 'naked' ? 'selected' : ''}}>Naked</option>
                <option value="custom" {{old('categoria') == 'custom' ? 'selected' : ''}}>Custom</option>
                <option value="touring" {{old('categoria') == 'touring' ? 'selected' : ''}}>Touring</option>
                <option value="scooter" {{old('categoria') == 'scooter' ? 'selected' : ''}}>Scooter</option>
            </select>
        </div>
        <div class="col-md-12 mt-2">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea rows="4" class="form-control" id="descripcion" name="descripcion" required>{{old('descripcion')}}</textarea>
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
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
@endsection
