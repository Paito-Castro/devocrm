@extends('layouts.app')


@section('content')


      <div class="col-12" style="margin:0; overflow: hidden!important;">
        <video style="min-width: 100%; min-height: 100%; position:absolute; background-size:cover;" playsinline autoplay muted loop>
          <source
                  class="h-100"
                  src="https://drive.google.com/uc?export=download&id=1M6Md8vhLBciGj75YlC_YMulW31abjSMY"
                  type="video/mp4"
                  />
        </video>
    <div class="col-12 text-center" style="position:relative; padding-top:150px;">
        <h3 style="color:#ffffff; text-shadow: 2px 2px #050000; font-size:50px; font-family: 'Orbitron', sans-serif;">CRM DeVo</h3>
</div>
        <form method="POST" action="{{ route('login') }}" style="position:relative; margin-left:30px; margin-right:30px;">
    @csrf
        <div class="row mb-3">
            <label for="email" class="col-md-3 col-form-label text-md-end" style="color:#ffffff; text-shadow: 2px 2px #050000; font-family: 'Orbitron', sans-serif;">Correo</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-3 col-form-label text-md-end" style="color:#ffffff; text-shadow: 2px 2px #050000; font-family: 'Orbitron', sans-serif;">Contraseña</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember" style="color:#ffffff; text-shadow: 2px 2px #050000; font-family: 'Orbitron', sans-serif;">
                        Recuérdame
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0 text-center">
            <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-secondary boton" href="/home" style="font-family: 'Orbitron', sans-serif;">
                    Iniciar Sesión
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-secondary boton" href="{{ route('password.request') }}" style="font-family: 'Orbitron', sans-serif;">
                        ¿ Olvidaste tu password ?
                    </a>
                @endif
            </div>
        </div>
    </form>
       
         
          </div>
  



    
@endsection
