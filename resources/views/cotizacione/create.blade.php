@extends('layouts.app')

@section('template_title')
    Create Cotizacione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Cotizacione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cotizaciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cotizacione.form')
                            @includeif('partials.errors')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
