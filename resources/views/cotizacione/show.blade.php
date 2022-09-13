@extends('layouts.app')

@section('template_title')
    {{ $cotizacione->name ?? 'Show Cotizacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cotizacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cotizaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fechacotiz:</strong>
                            {{ $cotizacione->fechacotiz }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $cotizacione->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $cotizacione->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Servicio Id:</strong>
                            {{ $cotizacione->servicio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ejecutivo Id:</strong>
                            {{ $cotizacione->ejecutivo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estadosolicitud Id:</strong>
                            {{ $cotizacione->estadosolicitud_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
