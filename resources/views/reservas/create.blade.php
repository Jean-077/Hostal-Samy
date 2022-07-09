@extends('adminlte::page')

@section('title', 'Categoiras')

@section('content_header')
    
@stop

@section('content')
<form action="{{route('reservas.store')}}" method="post">
    <div class="container " style="">
        <h3>Habitacion</h3>
        <div class="row">
            <div class="col">
                Numero:
            </div>
            <div class="col">
               <p name="numero">{{$habitacion->numero}}</p> 
            </div>
            <div class="col">
                Categoria:
            </div>
            <div class="col">
                @foreach ($categorias as $categoria)
                    @if($habitacion->idCategoria == $categoria->id)
                        
                    <p name="nomcategoria">{{$categoria->nomcategoria}}</p>    
                    
                    @endif 
                    @endforeach   
            </div>
        </div>
        <div class="row">
            <div class="col">
                Detalle:
            </div>
            <div class="col">
                <p name="descripcion">{{$habitacion->descripcion}}  </p>   
            </div>
            <div class="col">
                Piso:
            </div>
            <div class="col">
                @foreach ($pisos as $piso)
                    @if($habitacion->idPiso == $piso->id)
                        {{$piso->numpiso}}
                    
                    @endif 
                @endforeach 
            </div>
        </div>
    </div>
    <div class="container ">
        
        <div class="row">
            <div class="col form-group">
                <h3>Cliente</h3>
                <div class="mb-3">
                    <label for=""class="form-label">Nombre</label>
                    <input id="nombre"name="nombre"type="text"class="form-control"tabindex="1">
                </div>
                <div class="mb-3">
                    <label for=""class="form-label">Apellido</label>
                    <input id="apellido"name="apellido"type="text"class="form-control"tabindex="2">
                </div>
                <div class="mb-3">
                    <label for=""class="form-label">DNI</label>
                    <input id="dni"name="dni"type="text"class="form-control"tabindex="3">
                </div>
                <div class="mb-3">
                    <label for=""class="form-label">Correo</label>
                    <input id="correo"name="correo"type="email"class="form-control"tabindex="4">
                </div>
            </div>
            <div class="col form-group">
                <h3>Detalle Reserva</h3>
                <div class="mb-3">
                    <label for=""class="form-label">Fecha Entrada:</label>
                    <input id="nombre"name="nombre"type="text"class="form-control"tabindex="1">
                </div>
                <div class="mb-3">
                    <label for=""class="form-label">Fecha Salida:</label>
                    <input id="apellido"name="apellido"type="text"class="form-control"tabindex="2">
                </div>
                <div class="mb-3">
                    <label for=""class="form-label">Precio</label>
                    <input id="dni"name="dni"type="text"class="form-control"tabindex="3">
                </div>
                <div class="mb-3">
                    <label for=""class="form-label">Descuento:</label>
                    <input id="correo"name="correo"type="email"class="form-control"tabindex="4">
                </div>
                <div class="mb-3">
                    <label for=""class="form-label">Total:</label>
                    <input id="correo"name="correo"type="email"class="form-control"tabindex="4">
                </div>
                <button type="submit" class="btn btn-primary ml-auto">Reservar</button>
            </div>
        </div>
    </div>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
