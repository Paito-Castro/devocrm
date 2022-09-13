@extends('layouts.app')

@section('template_title')
    Solicitude
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
    <h3 style="color:#ffffff; font-size:20px; font-weight:bold;">Administración Solicitudes</h3>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:transparent; color:#ffffff;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless table-hover text-center" style="background-color:transparent; color:#ffffff;">
                                <thead class="table-dark text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
										<th>Cliente</th>
										<th>Servicio</th>
										<th>Ejecutivo</th>
                                        <th>Mensaje</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicitudes as $solicitude)
                                        <tr>
                                            <td>{{ $solicitude->id }}</td>
                                            <td>{{ $solicitude->datepicker }}</td>
                                            <td>{{ $solicitude->estado->nombreestado }}</td>
											<td>{{ $solicitude->cliente->empresa }}</td>
											<td>{{ $solicitude->servicio->nombreservicio }}</td>
											<td>{{ $solicitude->empleado->Nombre }}</td>
                                            <td>{{ $solicitude->message }}</td>

                                            <td>
                                                <form action="{{ route('solicitudes.destroy',$solicitude->id) }}" method="POST">
                            
                                                    <a class="btn btn-sm btn-dark boton" href="{{ route('solicitudes.edit',$solicitude->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger boton btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                  
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
                {!! $solicitudes->links() !!}
                <div class="col-12 text-center">
                    <a href="{{ route('solicitudes.create') }}" class="btn btn-secondary boton btn-sm float-right"  data-placement="left">
                        Crear Nueva Solicitud
                    </a>
                    <a href="{{ route('solicitudes.pdf')}}" class="btn btn-success boton btn-sm"><i class="fa-sharp fa-solid fa-file-pdf"></i> Ver PDF</a>
                </div>
            </div>
        </div>
    </div>
@endsection
