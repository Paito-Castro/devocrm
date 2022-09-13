
    <div class="col-md-12">
        <label class="form-label text-left" style="color:#ffffff;">Fecha</label>
        <input type="date" class="form-control" id="fechacotiz" name="fechacotiz" value="{{ isset($cotizacione->fechacotiz)?$cotizacione->fechacotiz:''}}" placeholder="{{ $cotizacione->fechacotiz }}">
    </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::textarea('descripcion', $cotizacione->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
          
        <div class="form-group">
            {{ Form::label('solicitud id') }}
            {{ Form::select('', $solicitudes, $cotizacione->solicitud_id, ['class' => 'form-control' . ($errors->has('solicitud_id') ? ' is-invalid' : ''), 'placeholder' => 'Solicitud Id']) }}
            {!! $errors->first('ejecutivo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('mensaje') }}
            {{ Form::select('solicitud_id', $solicitudes, $cotizacione->message, ['class' => 'form-control' . ($errors->has('solicitud_id') ? ' is-invalid' : ''), 'placeholder' => 'Solicitud Id']) }}
            {!! $errors->first('ejecutivo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('Cliente') }}
            {{ Form::label('cliente_id', $client, $cotizacione->empresa, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        
      

     
    
        
       

    
    <div class="">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
