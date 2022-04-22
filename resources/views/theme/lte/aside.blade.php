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
              <i class="fas fa-sitemap"></i>
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
              <i class="fas fa-air-freshener"></i>
                <p>Municiones</p>
              </a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a href="/administracion/explosivos" class="nav-link">
              <i class="fas fa-bomb"></i>
                <p>Explosivos</p>
              </a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a href="{{ route('OrdenPublico') }}" class="nav-link">
              <i class="fas fa-shuttle-van"></i>
                <p>Orden Público</p>
              </a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a href="{{ route('optronicos') }}" class="nav-link">
              <i class="fas fa-dumpster-fire"></i>
                <p>Equipos Ópticos y Optrónicos</p>
              </a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-parachute-box"></i>
                <p>Artillerías Aereas</p>
              </a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a href="{{ route('parametros') }}" class="nav-link">
              <i class="fas fa-list-ol"></i>
                <p>Parámetros</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('accesorios') }}" class="nav-link">
              <i class="fas fa-diagnoses"></i>
                <p>Accesorios</p>
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
              Estadísticas
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('inv-armamento') }}" class="nav-link">
              <i class="fab fa-gripfire nav-icon"></i>
                <p>Armas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('inv-municiones') }}" class="nav-link">
              <i class="fas fa-air-freshener"></i>
                <p>Municiones</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('inv-explosivos') }}" class="nav-link">
              <i class="fas fa-bomb"></i>
                <p>Explosivos</p>
              </a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-shuttle-van"></i>
                <p>Orden Público</p>
              </a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-dumpster-fire"></i>
                <p>Equipos Ópticos y Optrónicos</p>
              </a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-parachute-box"></i>
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
              <a href="#" class="nav-link">
              <i class="fab fa-gripfire nav-icon"></i>
                <p>Armas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
              <i class="fas fa-air-freshener"></i>
                <p>Municiones</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
              <i class="fas fa-bomb"></i>
                <p>Explosivos</p>
              </a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-shuttle-van"></i>
                <p>Orden Público</p>
              </a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-dumpster-fire"></i>
                <p>Equipos Ópticos y Optrónicos</p>
              </a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-parachute-box"></i>
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
              <i class="fas fa-id-card"></i>
              <!-- <i class="fas fa-user-plus"></i> -->
                <p>Asignación de Materiales al Personal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dependencias') }}" class="nav-link">
              <i class="fas fa-sitemap"></i>
                <p>Asignación de Dependencia</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('visualizar') }}" class="nav-link">
                <i class="fas fa-eye nav-icon"></i>
                <p>Vizualizar</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>