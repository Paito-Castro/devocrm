@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4" style="border:2px solid #ffffff; background-color:transparent;">
                <div class="card-header" style="border:1px solid transparent; background-color:transparent;"><h4 style="color:#ffffff; font-size:20px; font-weight:bold; text-shadow: 2px 2px #050000;">{{ __('Dashboard') }} CRM</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
    <iframe width="auto" height="auto" src="https://datastudio.google.com/embed/reporting/b6e8978d-39bc-4c3c-8ead-921b87ad7e56/page/RFguC" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="card-body">
        <h5 class="card-title" style="font-size:15px;">Total Clientes</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <iframe width="auto" height="auto" src="https://datastudio.google.com/embed/reporting/b6e8978d-39bc-4c3c-8ead-921b87ad7e56/page/RFguC" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="card-body">
        <h5 class="card-title" style="font-size:15px;">Total Monto Cotizaciones</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <iframe width="auto" height="auto" src="https://datastudio.google.com/embed/reporting/b6e8978d-39bc-4c3c-8ead-921b87ad7e56/page/RFguC" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="card-body">
        <h5 class="card-title" style="font-size:15px;">Cotizaciones Aprobadas</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <iframe width="auto" height="auto" src="https://datastudio.google.com/embed/reporting/b6e8978d-39bc-4c3c-8ead-921b87ad7e56/page/RFguC" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="card-body">
        <h5 class="card-title" style="font-size:15px;">Servicios Solicitados</h5>
      </div>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
