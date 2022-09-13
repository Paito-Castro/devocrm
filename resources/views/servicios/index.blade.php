@extends('layouts.app')

@section('content')

@if(Session::has('mensaje'))
<div class="alert alert-success d-flex align-items-center alert-dismissible fade show mt-3" role="alert" style="margin-left:30px; margin-right:30px;">
<i class="fa-solid fa-thumbs-up" style="margin-right:7px;"></i> {{ Session::get('mensaje') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="container mt-5">
<div class="col-12 text-center">
    <h3 style="color:#ffffff; font-size:20px; font-weight:bold;">Administración Servicios</h3>
</div>

<div class="table-responsive-sm table-responsive-md">
<table class="table table-borderless table-hover text-center mt-3" style="color:#ffffff;">
    <thead class="table-dark text-center">
        <tr>
            <th>Id</th>
            <th>Servicio</th>
            <th>Descripción</th>
            <th>Duración</th>
            <th>Costo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $servicios as $servicio)
        <tr>
            <td>{{ $servicio->id }}</td>
            <td>{{ $servicio->nombreservicio }}</td>
            <td>{{ $servicio->descripcion }}</td>
            <td>{{ $servicio->duracion }}</td>
            <td>${{ number_format($servicio->costo, 0) }}</td>
            <td>

            <a href="{{ url('/servicios/'.$servicio->id.'/edit/') }}" class="btn btn-dark btn-sm boton"><i class="fa fa-fw fa-edit"></i> Editar</a>
             
            
            <form action="{{ route('servicios.destroy', $servicio->id) }}" class="d-inline" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm boton" type="submit" onclick="return confirm('¿ Deseas eliminar el servicio: {{$servicio->nombreservicio}} ?')"><i class="fa fa-fw fa-trash"></i> Borrar</button>
            
            </form>

            </td>
        </tr>   
        @endforeach
       
    </tbody>
    
</table>
</div>
{!! $servicios->links() !!}
<div class="col-12 text-center">
<a href="{{ url('/servicios/create/') }}" class="btn btn-secondary boton" style="color:#ffffff;">Registrar Servicio </a>
</div>
</div>
@endsection