@extends('adminlte::page')

@section('title', 'Categoiras')

@section('content_header')
    <h1>Reportes</h1>
@stop

@section('content')


    
    <div class="row mb-3">
        <div class="col mb-3">
            <label for=""class="form-label">Reporte de Clientes</label>
        </div>
        <div class="col mb-3">
            <a href="{{route('reportes.clientepdf')}}" class="btn btn-primary">{{__('PDF')}}</a>
            
        </div>                                                                                                                                                                                                  
    </div> 


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop





