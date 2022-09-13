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
    <h3 style="color:#ffffff; font-size:20px; font-weight:bold;">Administración Ejecutivos</h3>
</div>

<div class="table-responsive-sm table-responsive-md">
<table class="table table-borderless table-hover text-center mt-3" style="color:#ffffff;">
    <thead class="table-dark text-center">
        <tr>
            <th>Id</th>
            <th>Foto</th>
            <th>Identificación</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td><img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="80" alt=""></td>
            <td>{{ $empleado->Identificacion }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->ApellidoPaterno }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>

            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-dark btn-sm boton"><i class="fa fa-fw fa-edit"></i>Editar</a>
             
            
            <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <button class="btn btn-danger btn-sm boton" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar"><i class="fa fa-fw fa-trash"></i>Borrar</button>
            
            </form>

            </td>
        </tr>   
        @endforeach
       
    </tbody>
    
</table>
</div>
{!! $empleados->links() !!}
<div class="col-12 text-center">
<a href="{{ url('/empleado/create') }}" class="btn btn-secondary boton" style="color:#ffffff;">Registrar Ejecutivo </a>
</div>
</div>
@endsection