<nav class="main-header navbar navbar-expand navbar-dark navbar-dark" style="background: #6A0304 !important">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <div class="row w-100">
    <div class="text-white text-center mx-auto">
    GUARDIA NACIONAL BOLIVARIANA<br>
    DIRECCIÓN DE LOGÍSTICA<br>
    SERVICIO DE ARMAMENTO<br>
    </div>
  </div>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto text-white">
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
      <a class="btn btn-transparent text-white" onclick="this.closest('form').submit();return logout();"style="color:rgb(116, 19, 19)">
        <i class="fas fa-sign-out-alt"></i>
        Salir
      </a>
    </form>
    {{-- <ul  class="dropdown-menu  text-center" role="menu">
      <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" style="color:rgb(116, 19, 19)" >Salir</a></li>
    </ul> --}}
  </ul>
</nav>