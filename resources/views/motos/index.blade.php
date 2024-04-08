@extends('layouts.base')
@section('title', 'Motos lista')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Motos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Cilindraje</th>
                            <th scope="col">Año Fabricación</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Color</th>
                            <th scope="col">Ver</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($motos as $moto)
                            <tr>
                                <th scope="row">{{$moto->id_moto}}</th>
                                <td>{{$moto->marca}}</td>
                                <td>{{$moto->modelo}}</td>
                                <td>{{$moto->cilindraje}}</td>
                                <td>{{$moto->ano}}</td>
                                <td>{{$moto->descripcion}}</td>
                                <td>{{$moto->precio}}</td>
                                <td>{{$moto->categoria}}</td>
                                <td>{{$moto->color}}</td>

                                <td>
                                  <a
                                    href="{{route('motos.show', $moto)}}"
                                    class="btn btn-info"
                                  >Ver</a>
                                </td>
            
                                <td>
                                  <a
                                    href="{{route('motos.edit', $moto)}}"
                                    class="btn btn-success"
                                  >Editar</a>
                                </td>

                                <td>
                                  <form
                                      method="post"
                                      action="{{route('motos.destroy', $moto)}}"
                                  >
                                      @csrf
                                      @method('DELETE')
                                      <button
                                        type="submit"
                                        class="btn btn-danger"
                                        onclick="return confirm('Estas seguro de que deseas eliminar esta tarea?')"
                                      >Eliminar</button>
                                  </form>
                                </td>
                            </tr>
                          @endforeach   
                        </tbody>
                    </table>
            </div>
            <a 
              href="{{route('motos.create')}}"
              class="btn btn-primary">
              Crear nueva moto
            </a> 
        </div>
    </div>
  @endsection