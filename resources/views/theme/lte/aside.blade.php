<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #6A0304 !important">
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-2 d-flex">
      <div class="row-col-12 m-auto text-center">
        <img src="{{ asset("favicon.png") }}" class="w-50" alt="User Image">
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('inicio') }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Inicio</p>
          </a>
        </li>
        @can('general')
        <li class="nav-item">
          <a href="#" class="nav-link menu-is-opening menu-open">
            <i class="nav-icon fas fa-handshake"></i>
            <p>
              Administración
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            {{-- <li class="nav-item">
              <a href="" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Usuarios</p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{ route('personal') }}" class="nav-link">
                <i class="fas fa-user nav-icon"></i>
                <p>Personal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dependencias') }}" class="nav-link">
                <i class="fas fa-map nav-icon"></i>
                <p>Dependencias</p>
              </a>
            </li>
            <li class="nav-item">
              <li class="nav-item">
              <a href="{{ route('armamento') }}" class="nav-link">
                <i class="fab fa-gripfire nav-icon"></i>
                <p>Armamentos</p>
              </a>
            </li>
			<li class="nav-item">
              <li class="nav-item">
                <a href="{{ route('municiones') }}" class="nav-link">
                  <i class="fab fa-gripfire nav-icon"></i>
                <p>Municiones</p>
              </a>
            </li>
			<li class="nav-item">
              <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-cubes nav-icon"></i>
                <p>Explosivos</p>
              </a>
            </li>
			<li class="nav-item">
              <li class="nav-item">
                <a href="{{ route('OrdenPublico') }}" class="nav-link">
                  <i class="fas fa-cubes nav-icon"></i>
                <p>Orden Público</p>
              </a>
            </li>
			<li class="nav-item">
              <li class="nav-item">
                <a href="{{ route('optronicos') }}" class="nav-link">
                  <i class="fas fa-cubes nav-icon"></i>
                <p>Equipos Ópticos y Optrónicos</p>
              </a>
            </li>
			<li class="nav-item">
              <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-cubes nav-icon"></i>
                <p>Artillerías Aereas</p>
              </a>
            </li>
          </ul>
        </li>
        @endcan
        @role('root')
        <li class="nav-item">
          <a class="nav-link menu-is-opening menu-open">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Estadisticas
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('inv-armamento') }}" class="nav-link">
                <i class="fas fa-boxes nav-icon"></i>
                <p>Armas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('inv-municiones') }}" class="nav-link">
                <i class="fas fa-cubes nav-icon"></i>
                <p>Municiones</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('inv-explosivos') }}" class="nav-link">
                <i class="fas fa-box nav-icon"></i>
                <p>Explosivos</p>
              </a>
            </li>
			<li class="nav-item">
              <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-cubes nav-icon"></i>
                <p>Orden Público</p>
              </a>
            </li>
			<li class="nav-item">
              <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-cubes nav-icon"></i>
                <p>Equipos Ópticos y Optrónicos</p>
              </a>
            </li>
			<li class="nav-item">
              <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-cubes nav-icon"></i>
                <p>Artillerías Aereas</p>
              </a>
            </li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link menu-is-opening menu-open">
            <i class="nav-icon fas fa-warehouse"></i>
            <p>
              Inventario
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="fas fa-boxes nav-icon"></i>
                <p>Armas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="fas fa-cubes nav-icon"></i>
                <p>Municiones</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="fas fa-box nav-icon"></i>
                <p>Explosivos</p>
              </a>
            </li>
			<li class="nav-item">
              <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-cubes nav-icon"></i>
                <p>Orden Público</p>
              </a>
            </li>
			<li class="nav-item">
              <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-cubes nav-icon"></i>
                <p>Equipos Ópticos y Optrónicos</p>
              </a>
            </li>
			<li class="nav-item">
              <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-cubes nav-icon"></i>
                <p>Artillerías Aereas</p>
              </a>
            </li>
          </ul>
        </li>
        @endrole
        <li class="nav-item">
          <a href="/documentos/material_entregado" class="nav-link menu-is-opening menu-open">
            <i class="nav-icon fas fa-vote-yea"></i>
            <p>
              Trámites
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('material') }}" class="nav-link">
                <i class="fas fa-people-carry nav-icon"></i>
                <p>Asignación Personal</p>
              </a>
            </li>
			<li class="nav-item">
              <a href="{{ route('material') }}" class="nav-link">
                <i class="fas fa-people-carry nav-icon"></i>
                <p>Asignación Dependencia</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>