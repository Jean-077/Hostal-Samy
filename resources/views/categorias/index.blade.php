@extends('adminlte::page')

@section('title', 'Categoiras')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')


<a href="{{route('categorias.create')}}"  class="btn btn-primary">Crear Categoria</a>

<table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width=100%">
    <thead class="bg-primary text-white">
        <tr>
            
            <th scope="col">Categoria</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            
            <td>{{$categoria->nomcategoria}}</td>
            
            <td><a href="{{route('categorias.show', $categoria->id)}}" class="btn btn-info">Ver Categoria</a></td>
            <td><a href="{{route('categorias.edit', $categoria)}}" class="btn btn-info">Editar</a></td>
            <form action="{{route('categorias.destroy', $categoria)}}" method="post">
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





