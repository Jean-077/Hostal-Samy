@extends('adminlte::page')
@section('content')
<h1>Aquí va el reporte mi king</h1>
<table id="clientes" class="table table-striped table-bordered shadow-lg mt-4" style="width=100%">
    <thead class="bg-primary text-white">
        <tr>
            
            <th scope="col" class="text-center">Nombre</th>
            <th scope="col" class="text-center">Apellido</th>
            <th scope="col" class="text-center">DNI</th>
            <th scope="col" class="text-center">Correo</th>
            {{-- <th scope="col" colspan="3" class="text-center">Acciones</th> --}}
            
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellido}}</td>
            <td>{{$cliente->dni}}</td>  
            <td>{{$cliente->correo}}</td>
            
        </tr>
        
        @endforeach
    </tbody>
</table>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')


@stop