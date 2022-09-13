@if(count($errors)>0) 
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif

    
    <div class="col-md-12 text-white">
    <label class="form-label text-left" for="Identificacion">Identificación:</label>
    <input class="form-control" name="Identificacion" value="{{ isset ($empleado->Identificacion)?$empleado->Identificacion:old('Identificacion') }}" id="Identificacion">
    </div>

    <div class="col-md-6 text-white">
    <label class="form-label text-left" for="Nombre">Nombres:</label>
    <input class="form-control" type="text" name="Nombre" value="{{ isset ($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
    </div>
    
    <div class="col-md-6 text-white">
    <label class="form-label text-left" for="ApellidoPaterno">Apellidos:</label>
    <input class="form-control" type="text" name="ApellidoPaterno" value="{{ isset ($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
    </div>

    <div class="col-md-12 text-white">
    <label for="Correo">Correo:</label>
    <input class="form-control" type="email" name="Correo" value="{{ isset ($empleado->Correo)?$empleado->Correo:old('correo') }}" id="Correo">
    </div>

    <div class="col-md-6 text-white">
    <label for="Seleccionar">Seleccionar:</label>
    <input class="form-control" type="file" name="Foto" value="" id="Foto">
    </div>

    <div class="col-md-6 text-white text-center">
    <label for="Foto">Foto:</label>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid"src="{{ asset('storage').'/'.$empleado->Foto }}" width="80" alt="">
    @endif
</div>
    
    <div class="col-12 text-center">
    <input class="btn btn-secondary boton" type="submit" Value="{{ $modo }} datos">
    <a class="btn btn-secondary boton" href="{{ url('empleado/') }}">Regresar</a>
</div>