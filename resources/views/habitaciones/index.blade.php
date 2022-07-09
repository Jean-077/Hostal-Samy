@extends('adminlte::page')

@section('title', 'Habitaciones')

@section('content_header')
    
@stop

@section('content')
    <h1>Lista de Habitaciones</h1>

    <a href="{{route('habitaciones.create')}}" class="btn btn-primary">Crear Habitacion</a>
    
    


    <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width=100%">
        <thead class="bg-primary text-white">
            <tr>

                <th scope="col">Numero</th>
                <th scope="col">Piso</th>
                <th scope="col">Categoria</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Estado</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach($habitaciones as $habitacion)
            <tr>
                <td>{{$habitacion->numero}}</td>
                @foreach ($pisos as $piso)
                    @if($habitacion->idPiso == $piso->id)
                        <td>{{$piso->numpiso}}</td>
                    
                    @endif 
                @endforeach
                
                @foreach ($categorias as $categoria)
                    @if($habitacion->idCategoria == $categoria->id)
                        <td>{{$categoria->nomcategoria}}</td>
                    
                    @endif 
                @endforeach
                <td>{{$habitacion->descripcion}}</td>
                <td>{{$habitacion->precio}}</td>
                <td>{{$habitacion->estado}}</td>
                <td><a href="{{route('habitaciones.show', $habitacion->id)}}" class="btn btn-info">Ver habitacion</a></td>
                <td><a href="{{route('habitaciones.edit', $habitacion)}}" class="btn btn-info">Editar</a></td>
                <form action="{{route('habitaciones.destroy', $habitacion)}}" method="post">
                    @csrf
                    @method('delete')
                <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                    
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop







