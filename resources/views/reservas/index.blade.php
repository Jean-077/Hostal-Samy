@extends('adminlte::page')

@section('title', 'Pisos')

@section('content_header')
    
@stop

@section('content')
<div class="container">
    @foreach($habitaciones as $habitacion)
        
        @if($habitacion->estado == 'Disponible')
            <div class="row  shadow card text-white bg-success mb-3" >
                <div class="card-header">
                        <h4>Numero: {{$habitacion->numero}}</h3>
                </div>
                <div class="card-body">
                  <h5 class="card-title">
                    Categoria:
                    @foreach ($categorias as $categoria)
                    @if($habitacion->idCategoria == $categoria->id)
                        
                        {{$categoria->nomcategoria}}
                    
                    @endif 
                    @endforeach
                  </h5>
                  
                </div>
                <div class="card-footer">
                    <h5 class="card-title">
                    <a class= "text-white" href="{{route('reservas.create',$habitacion)}}">{{$habitacion->estado}}</a>  
                    </h5> 
                </div>
            </div>
        @elseif($habitacion->estado == 'Ocupado')
            <div class="col p-2 shadow card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">{{$habitacion->estado}}</div>
                <div class="card-body">
                    <h5 class="card-title">
                        @foreach ($categorias as $categoria)
                        @if($habitacion->idCategoria == $categoria->id)
                            {{$categoria->nomcategoria}}
                        
                        @endif 
                        @endforeach
                      </h5>
                  
                </div>
              </div>
        @elseif($habitacion->estado == 'Limpieza')
            <div class="col p-2 shadow card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">{{$habitacion->estado}}</div>
                <div class="card-body">
                    <h5 class="card-title">
                        @foreach ($categorias as $categoria)
                        @if($habitacion->idCategoria == $categoria->id)
                            {{$categoria->nomcategoria}}
                        
                        @endif 
                        @endforeach
                      </h5>
                  
                </div>
              </div>
        
        @endif
   
    @endforeach
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop







