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
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Basic Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="#">Buttons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Typography</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#productos" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-archive"></i>
        <span class="menu-title">Pro</span>
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
      <a class="nav-link" href="{{route ('info')}}">
        <i class="menu-icon mdi mdi-information-outline"></i>
        <span class="menu-title">Informacion</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route ('contacto')}}">
        <i class="menu-icon mdi mdi-send"></i>
        <span class="menu-title">Contacto</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon mdi mdi-restart"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="#"> Blank Page </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Register </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> 404 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> 500 </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
