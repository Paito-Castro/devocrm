@extends('layouts.app')

@section('template_title')
    Create Solicitude
@endsection

@section('content')

<div class="col-12 text-center mt-4">
<h3 style="color:#ffffff; font-family: 'Orbitron', sans-serif;">Crear Solicitud</h3>
</div>

<div class="container card p-4 mb-5 mt-3" style="background-color:transparent; width:80%; border:1px solid #F8F9F9;">

<div class="card-body">

    <form class="row g-3 needs-validation" method="POST" action="{{ route('solicitudes.store') }}"  role="form" enctype="multipart/form-data">
        @csrf

        @include('solicitude.form')

        @includeif('partials.errors')

    </div>
    </div>
    </form>
  
@endsection
