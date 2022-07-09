@extends('adminlte::page')

@section('title', 'Categoiras')

@section('content_header')
    
@stop

@section('content')

<h1>Pisos</h1>

<a href="{{route('pisos.create')}}" class="btn btn-primary">Crear piso</a>

<table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width=100%">
    <thead class="bg-primary text-white">
        <tr>
           
            <th scope="col">Numero de piso</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($pisos as $piso)
        <tr>
            
            <td>{{$piso->numpiso}}</td>
            <td><a href="{{route('pisos.edit', $piso)}}" class="btn btn-info">Editar</a></td>
            <form action="{{route('pisos.destroy', $piso)}}" method="post">
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



