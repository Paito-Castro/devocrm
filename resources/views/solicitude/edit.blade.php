@extends('layouts.app')

@section('template_title')
    Update Solicitude
@endsection

@section('content')


<div class="col-12 text-center" style="margin-top:30px;">
    <h3 style="color:#ffffff; font-size:20px; font-weight:bold; font-family: 'Nunito', sans-serif">Editar Solicitud</h3>
</div>

<div class="container card p-4 mb-5 mt-3" style="background-color:transparent; width:80%; border:1px solid #F8F9F9; color:#ffffff;">
        <div class="card body" style="background-color:transparent; width:100%; color:#ffffff;">
           
        <form class="row g-3" method="POST" action="{{ route('solicitudes.update', $solicitude->id) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf

            @include('solicitude.form')

            @includeif('partials.errors')

            </div>
        </div>


        </form>

@endsection
