@extends("theme.$theme.login")
@section('titulo')
    Login
@stop
@section('contenido')
<div class="h-100 m-4 p-2">
    <div class="row">
        <div class="col-md-2 pl-4">
            <img src="{{ asset('favicon.png') }}" style="width: 90%">
        </div>
        <div class="col-md-8">
            <div style="color: #ffff" class="mb-5 mt-5">
                <div  class="m-auto text-center">
                    <p style="font-size:140% ; line-height: 30%">REPÚBLICA BOLIVARIANA DE VENEZUELA</p>
                    <p style="font-size:140% ; line-height: 30%">MINISTERIO DEL PODER POPULAR PARA LA DEFENSA</p>
                    <p style="font-size:140% ; line-height: 30%">FUERZA ARMADA NACIONAL BOLIVARIANA</p>
                    <p style="font-size:140% ; line-height: 30%">GUARDIA NACIONAL BOLIVARIANA</p>
                    <p style="font-size:140% ; line-height: 30%">DIRECCIÓN DE LOGÍSTICA</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-2 pr-5">
            <img src="{{ asset('assets/img/honor.png') }}" style="width: 98%">
        </div>
    </div>
    <div class="row mt-4">
        <div style="background:#5b0302" class="card w-75 m-auto">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            
            <form style="background: #5b0302 "class="px-4 pt-4 m-2" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-7 pt-2 icheck-primary">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>    
                        <label for="remember">
                            <span class="text-white">Recordar</span>
                        </label>
                    </div>
                </div>
                <div class="form-group text-center col-auto">
                    <button type="submit" style="background: #3d0b0c; color:#ffff!important" class="btn btn-dark ">Ingresar</button>
                  </div>
            </form>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col">
            <div style="color: #ffff01" class="mb-0">
                <div class="mt-5 text-center">
                    <p style="font-size:4rem"  class="p-0 mb-0">SISARM-GNB</p>
                    <p style="color: #ffff01; font-size:1rem" class="mb-5 text-center"> Sistema de Armamento de la Guardia Nacional Bolivariana </p>
                </div>
            </div>
        </div>
    </div>
    <footer style="color: #fff; background: #fff01; line-height: 10%" class="footer h-100 mt-2 w-100  pt-1 text-center">
        <p>Desarrollado por la Dirección de Sistemas y Desarrollos de la Oficina de Tecnologías de la Información y la Comunicación MPPAA</p>
        <p > tecnologia@minaguas.gob.ve / Teléfono: +58 212-561-64-05 / 536-27-02 </p>
        <p>Copyright ©2021</p>
    </footer>
</div>
@endsection