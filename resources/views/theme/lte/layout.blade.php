<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo', "Inicio") | SISARM-GNB</title>
        <link rel="icon" href="{{asset('favicon.png')}}" type="image/png"/>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
        <!-- IonIcons -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/ionicons.min.css")}}">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">
        <!-- Toastr -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/toastr/toastr.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/lte/plugins/select2/css/select2.css")}}">
        @yield('styles')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
        <div class="wrapper">
                {{--  Header  --}}
                @include("theme/$theme/header")
                {{--  Fin Header  --}}
                {{--  Aside  --}}
                @include("theme/$theme/aside")
                {{--  Fin Aside  --}}
            {{--  Contenido  --}}
            <div class="content-wrapper bg-white">
                {{--  Contenido  --}}
                <section class="content mr-5 ml-5">
                    @if ($message = Session::get('success'))
                    <div id="toastsContainerTopRight" class="alert toasts-top-right fixed mt-2 mr-2">
                        <div class="toast bg-info fade show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <strong class="mr-auto">Completado</strong>
                                <small></small>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">{{ $message }}</div>
                        </div>
                    </div>
                    @endif
                    @if ($message = Session::get('info'))
                    <div id="toastsContainerTopRight" class="alert toasts-top-right fixed mt-2 mr-2">
                        <div class="toast bg-info fade show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <strong class="mr-auto">Alerta</strong>
                                <small></small>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">{{ $message }}</div>
                        </div>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div id="toastsContainerTopRight" class="alert toasts-top-right fixed mt-2 mr-2">
                        <div class="toast bg-danger fade show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <strong class="mr-auto">Error</strong>
                                <small></small>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">{{ $message }}</div>
                        </div>
                    </div>
                    @endif
                    @yield('contenido')
                </section>
                {{--  Fin Contenido  --}}
            </div>
            {{--  Fin Contenido  --}}
        </div>
            {{--  Footer  --}}
             @include("theme/$theme/footer") 
            {{--  Fin Footer  --}}
        {{-- jQuery  --}}
        <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
        <!-- SweetAlert2 -->
        <script src="{{asset("assets/$theme/plugins/sweetalert2/sweetalert2.min.js")}}"></script>
        <!-- Toastr -->
        <script src="{{asset("assets/$theme/plugins/toastr/toastr.min.js")}}"></script>
        <script src="{{asset("assets/lte/plugins/select2/js/select2.min.js")}}"></script>
        @yield('scripts')
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        <script>
            function logout() {
        if(!confirm("¿Está usted seguro de querer salir del sistema?"))
        event.preventDefault();
    }
        </script>
    </body>
</html>