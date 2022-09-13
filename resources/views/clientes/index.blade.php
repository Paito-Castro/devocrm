@extends('layouts.app')

@section('content')



@if(Session::has('mensaje'))
<div class="alert alert-success d-flex align-items-center alert-dismissible fade show mt-3" role="alert" style="margin-left:30px; margin-right:30px;">
<i class="fa-solid fa-thumbs-up" style="margin-right:7px;"></i> {{ Session::get('mensaje') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="container text-center card p-4 mb-5" style="background-color:transparent; border-color:transparent; margin-top:10px; margin-left:auto; margin-right:auto;">

<div class="card-header text-center" style="background-color:transparent; border:1px solid transparent;"><h3 style="color:#ffffff; font-size:20px; font-weight:bold;">Administración Clientes</h3></div>

  <div class="card-body table-responsive-sm table-responsive-md">

<table class="table table-borderless table-hover" style="color:#ffffff;">

<thead class="table-dark text-center">
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Identificacion</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Empresa</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $clientes as $cliente )
    <tr>
      <td>{{ $cliente->id}}</td>
      <td>{{ $cliente->identificacion}}</td>
      <td>{{ $cliente->nombres}}</td>
      <td>{{ $cliente->apellidos}}</td>
      <td>{{ $cliente->telefono}}</td>
      <td>{{ $cliente->correo}}</td>
      <td>{{ $cliente->ciudad}}</td>
      <td>{{ $cliente->empresa}}</td>
      <td>

        <a class="btn btn-dark btn-sm boton" href="{{ url('/clientes/'.$cliente->id.'/edit/') }}" style="font-size:12px;"><i class="fa fa-fw fa-edit"></i> Editar</a>
        

        <form action="{{ url('/clientes/'.$cliente->id) }}" method="post" class="d-inline">
            @csrf
            {{ method_field('DELETE') }}
            <button class="btn btn-danger btn-sm boton" type="submit" style="font-size:12px;" onclick="return confirm('¿ Deseas eliminar este cliente {{$cliente->empresa}} ?')" value="Borrar"><i class="fa fa-fw fa-trash"></i> Borrar</button>
        </form>
        </td>
    </tr>
   @endforeach
  </tbody>
</table>

<a class="btn btn-secondary boton" href="{{ url('clientes/create')}}">Registrar Cliente</a>
</div>
</div>

@endsection