@if(Auth::user())
@extends('layouts.app')

@section('content')
    
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel-title">
            <h1>Declaraciones</h1>
        </div>
        
        <div class="panel-body">


            <form action="{{ url('declaracion') }}" method="POST">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="periodicity" class="control-label">Periodicidad</label>
                    <input type="text" name="periodicity" class="form-control">
                </div>

                <div class="form-group">
                    <label for="period" class="control-label">Periodo</label>
                    <input type="text" name="period" class="form-control">
                </div>

                <div class="form-group">
                    <label for="date" class="control-label">Fecha</label>
                    <input type="text" name="date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="operation" class="control-label">No. de operacion</label>
                    <input type="text" name="operation" class="form-control">
                </div>

                <div class="form-group">
                    <label for="declaration_type" class="control-label">Tipo de Declaracion</label>
                    <input type="text" name="declaration_type" class="form-control">
                </div>

                <div class="form-group">
                    <label for="capture" class="control-label">Captura</label>
                    <input type="text" name="capture" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-default">
                        <i class="fa fa-plus"></i>Registrar declaracion
                    </button>
                </div>
            </form>
        </div>
    </div>
    
@endsection
@endif
