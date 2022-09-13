@if(count($errors)>0) 
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif


<div class="col-md-12">
<label for="validationCustom01" class="form-label text-left" style="color:#ffffff;">Nombre del Servicio</label>
<input class="form-control"  name="nombreservicio" id="nombreservicio" value="{{ isset($servicios->nombreservicio)?$servicios->nombreservicio:''}}" required>
<div class="valid-feedback">
      Correcto!
</div>
</div>


<div class="col-md-12">
<label for="validationCustom02" class="form-label text-left" style="color:#ffffff;">Descripción</label>
<input class="form-control" type="text" name="descripcion" id="descripcion" value="{{ isset($servicios->descripcion)?$servicios->descripcion:''}}" required>
<div class="valid-feedback">
      Correcto!
</div>
</div>

<div class="col-md-6">
<label for="validationCustom03" class="form-label text-left" style="color:#ffffff;">Duración</label>
<input class="form-control" name="duracion" id="duracion" value="{{ isset($servicios->duracion)?$servicios->duracion:''}}" required>
<div class="valid-feedback">
      Correcto!
</div>
</div>

<div class="col-md-6">
<label for="validationCustom04" class="form-label text-left" style="color:#ffffff;">Costo</label>  
<input class="form-control"  name="costo" id="costo" value="{{ number_format($servicios->costo, 0) }}"required>
<div class="valid-feedback">
      Correcto!
</div>
</div>



<div class="col-12 text-center">
<input class="btn btn-secondary boton" type="submit" value="{{ $modo }} Servicios" style="">
<a class="btn btn-secondary boton" href="{{ url('servicios/') }}">Regresar</a>
</div>
