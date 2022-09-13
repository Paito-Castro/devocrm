@extends('layouts.app')

@section('template_title')
    Estado Solicitud
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
    <h3 style="color:#ffffff; font-size:20px; font-weight:bold;">Administración Estados</h3>
</div>

<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-center" style="background-color:transparent; color:#ffffff;">
                    <div class="card-body">
 
                <div class="table-responsive">
                    <table class="table table-borderless table-hover" style="color:#ffffff; text-center">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>No</th>
                                
                                <th>Nombre Estado</th>

                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($estadosolicitud as $estadosolicituds)
                                <tr>
                                    <td>{{ $estadosolicituds->id }}</td>
                                    
                                    <td>{{ $estadosolicituds->nombreestado}}</td>

                                    <td>
                                    
                                        <form action="{{ route('estadosolicitud.destroy',$estadosolicituds->id) }}" method="POST">
                                            
                                            <a class="btn btn-sm btn-dark boton" href="{{ route('estadosolicitud.edit',$estadosolicituds->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm boton"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
                
      
        {!! $estadosolicitud->links() !!}
        <div class="col-12 text-center">
            <a href="{{ route('estadosolicitud.create') }}" class="btn btn-secondary btn-sm float-right boton"  data-placement="left">
                Crear Estado
            </a>
        </div>
        </div>
        </div>
        </div>
    

@endsection
