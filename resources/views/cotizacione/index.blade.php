@extends('layouts.app')

@section('template_title')
    Cotizacione
@endsection

@section('content')

@if(Session::has('mensaje'))
<div class="alert alert-success d-flex align-items-center alert-dismissible fade show mt-3" role="alert" style="margin-left:30px; margin-right:30px;">
<i class="fa-solid fa-thumbs-up" style="margin-right:7px;"></i> {{ Session::get('mensaje') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container mt-5">
<div class="col-12 text-center">
    <h3 style="color:#ffffff; font-size:20px; font-weight:bold;">Administración de Cotizaciones</h3>
</div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <div class="card" style="background-color:transparent; color:#ffffff;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless table-hover text-center text-white">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
										<th>Fecha</th>
										<th>Descripcion</th>
										<th>Cliente</th>
										<th>Servicio</th>
                                        <th>Solicitud</th>
                                        <th>Solicitud Mensaje</th>
										<th>Ejecutivo</th>
										<th>Estado</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cotizaciones as $cotizacion)
                                        <tr>
                                            <td>{{ $cotizacion->id }}</td>
                                            
											<td>{{ $cotizacion->fechacotiz }}</td>
											<td>{{ $cotizacion->descripcion }}</td>
											<td>{{ $cotizacion->cliente->empresa }}</td>
											<td>{{ $cotizacion->servicio->nombreservicio }}</td>
                                            <td>{{ $cotizacion->solicitud->id }}</td>
                                            <td>{{ $cotizacion->solicitud->message }}</td>
											<td>{{ $cotizacion->empleado->Nombre }}</td>
											<td>{{ $cotizacion->estadosolicitud->nombreestado }}</td>

                                            <td>
                                                <form action="{{ route('cotizaciones.destroy',$cotizacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-dark boton" href="{{ route('cotizaciones.edit',$cotizacion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm boton"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cotizaciones->links() !!}
                <div class="col-12 text-center">
                    <a href="{{ route('cotizaciones.create') }}" class="btn btn-secondary btn-sm boton"  data-placement="left">
                        Crear Cotizacion
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
