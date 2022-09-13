@extends('layouts.app')

@section('template_title')
    {{ $solicitude->name ?? 'Show Solicitude' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle Solicitud</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitudes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente</strong>
                            {{$client}}
                          
                        </div>
                        <div class="form-group">
                            <strong>Servicio Id:</strong>
                            
                        </div>
                        <div class="form-group">
                            <strong>Ejecutivo Id:</strong>
                          
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
