

<div class="col-md-12">
<label for="validationCustom01" class="form-label">Identificacion</label>
<input class="form-control"  name="identificacion" id="identificacion" value="{{ isset($clientes->identificacion)?$clientes->identificacion:''}}" required>
<div class="valid-feedback">
      Correcto!
</div>
</div>


<div class="col-md-6">
<label for="validationCustom02" class="form-label">Nombres</label>
<input class="form-control" type="text" name="nombres" id="nombres" value="{{ isset($clientes->nombres)?$clientes->nombres:''}}" required>
<div class="valid-feedback">
      Correcto!
</div>
</div>

<div class="col-md-6">
<label for="validationCustom03" class="form-label">Apellidos</label>
<input class="form-control" type="text" name="apellidos" id="apellidos" value="{{ isset($clientes->apellidos)?$clientes->apellidos:''}}" required>
<div class="valid-feedback">
      Correcto!
</div>
</div>

<div class="col-md-6">
<label for="validationCustom04" class="form-label">Teléfono</label>
<input class="form-control" type="tel" name="telefono" id="telefono" value="{{ isset($clientes->telefono)?$clientes->telefono:''}}"required>
<div class="valid-feedback">
      Correcto!
</div>
</div>

<div class="col-md-6">
<label for="validationCustom05" class="form-label">Correo</label>
<input class="form-control" type="email" name="correo" id="correo" value="{{ isset($clientes->correo)?$clientes->correo:''}}" required>
<div class="valid-feedback">
      Correcto!
</div>
</div>

<div class="col-md-6">
<label for="validationCustom06" class="form-label">Ciudad</label>
<input class="form-control" type="text" name="ciudad" id="ciudad" value="{{ isset($clientes->ciudad)?$clientes->ciudad:''}}" required>
<div class="valid-feedback">
      Correcto!
</div>
</div>

<div class="col-md-6">
<label for="validationCustom07" class="form-label">Empresa</label>
<input class="form-control" type="text" name="empresa" id="empresa" value="{{ isset($clientes->empresa)?$clientes->empresa:''}}" required>
<div class="valid-feedback">
      Correcto!
</div>
</div>

<div class="col-12 text-center">
<input class="btn btn-secondary boton" type="submit" value="{{ $modo }} Cliente">
<a class="btn btn-secondary boton" href="{{ url('clientes/') }}">Regresar</a>
</div>

