@extends('layouts.app')

@section('content')

<div class="col-12 text-center mt-4">
<h3 style="color:#ffffff; font-family: 'Orbitron', sans-serif;">Crear Cliente</h3>
</div>

<div class="container card p-4 mb-5 mt-3" style="background-color:transparent; width:80%; border:1px solid #F8F9F9; color:#ffffff;">

  <div class="card-body">
 

<form class="row g-3 needs-validation" novalidate action="{{ url('/clientes' )}}" method="post" enctype="multipart/form-data">
@csrf

@include('clientes.form', ['modo'=>'Crear'])

</div>
</div>

</form>

@endsection