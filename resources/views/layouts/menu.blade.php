<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route ('equipo')}}">
        <i class="menu-icon mdi mdi-code-array"></i>
        <span class="menu-title">Equipo</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ventas" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-clock-fast"></i>
        <span class="menu-title">Ventas</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ventas">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route ('ventas.create')}}">Agregar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('ventas.index')}}">Ver</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#clientes" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-account-multiple-outline"></i>
        <span class="menu-title">Clientes</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="clientes">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route ('clientes.create')}}">Agregar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('clientes.index')}}">Ver</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#productos" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-archive"></i>
        <span class="menu-title">Productos</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="productos">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route ('productos.create')}}">Agregar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('productos.index')}}">Ver</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#proovedors" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-bike"></i>
        <span class="menu-title">Proveedores</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="proovedors">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route ('proovedors.create')}}">Agregar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('proovedors.index')}}">Ver</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#compras" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-shopping"></i>
        <span class="menu-title">Compras</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="compras">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route ('compras.create')}}">Agregar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('compras.index')}}">Ver</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route ('info')}}">
        <i class="menu-icon mdi mdi-information-outline"></i>
        <span class="menu-title">Informacion</span>
      </a>
    </li>
    @can('create', Auth::user())
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi-login"></i>
        <span class="menu-title">Usuarios</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="users">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route ('users.index')}}">Ver listado</a>
          </li>

              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
        </ul>
      </div>
    </li>
  @endcan
  @can('create', Auth::user())
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#restore" aria-expanded="false" aria-controls="ui-basic">
      <i class="menu-icon mdi mdi-keyboard-return"></i>
      <span class="menu-title">Restaurar</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="restore">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{route ('clientes.trashed')}}">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('proovedors.trashed')}}">Proveedores</a>
        </li>
      </ul>
    </div>
  </li>
@endcan
  </ul>
</nav>
