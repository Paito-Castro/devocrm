      
        <div class="col-md-12">
        <label class="form-label text-left" style="color:#ffffff;">Fecha</label>
        <input type="date" class="form-control" id="datepicker" name="datepicker" value="{{ isset($solicitude->datepicker)?$solicitude->datepicker:''}}" placeholder="{{ $solicitude->message }}">
        </div>

        <div class="col-md-12">
        <label class="form-label text-left" style="color:#ffffff;">Mensaje</label>
        <textarea class="form-control" id="message" name="message" value="{{ isset($solicitude->message)?$solicitude->message:''}}">{{$solicitude->message}}</textarea>
        </div>

        <div class="col-md-6">
        <label class="form-label text-left" style="color:#ffffff;">Estado</label>
            {{ Form::select('estadosolicitud_id', $estadosolicitud, $solicitude->estadosolicitud_id, ['class' => 'form-control' . ($errors->has('estadosolicitud_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('estadosolicitud_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
  
        <div class="col-md-6">
        <label class="form-label text-left" style="color:#ffffff;">Cliente</label>
            {{ Form::select('cliente_id', $client, $solicitude->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="col-md-6">
        <label class="form-label text-left" style="color:#ffffff;">Servicio</label>
            {{ Form::select('servicio_id', $servicio, $solicitude->servicio_id, ['class' => 'form-control' . ($errors->has('servicio_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('servicio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="col-md-6">
        <label class="form-label text-left" style="color:#ffffff;">Ejecutivo</label>
            {{ Form::select('ejecutivo_id', $ejecutivo, $solicitude->ejecutivo_id, ['class' => 'form-control' . ($errors->has('ejecutivo_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ejecutivo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    
    <div class="col-12 text-center" style="margin-top:30px;">
        <button type="submit" class="btn btn-secondary boton">Enviar</button>
    </div>
