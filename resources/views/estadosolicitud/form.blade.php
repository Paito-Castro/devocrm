
        
    <div class="col-md-12" style="color:#ffffff;">
    <label for="validationCustom01" class="form-label">Estado</label>
    <input class="form-control"  name="nombreestado" id="nombreestado" value="{{ isset($estadosolicitud->nombreestado)?$estadosolicitud->nombreestado:''}}" required>
    <div class="valid-feedback">
      Correcto!
    </div>
    </div>

    <div class="col-12 text-center" style="margin-top:30px;">
        <button type="submit" class="btn btn-secondary boton">Enviar</button>
    </div>