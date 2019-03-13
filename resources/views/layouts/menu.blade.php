<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ asset ('images/faces/face1.jpg')}}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           {{ Auth::user()->nombre }}  <span class="caret"></span>
            </a></p>
            <div>
              <small class="designation text-muted">Manager</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
        <button class="btn btn-success btn-block">New Project
          <i class="mdi mdi-plus"></i>
        </button>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route ('equipo')}}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Equipo</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Basic UI Elements</span>
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
      <a class="nav-link" href="{{route ('info')}}">
        <i class="menu-icon mdi mdi-backup-restore"></i>
        <span class="menu-title">Informacion</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route ('contacto')}}">
        <i class="menu-icon mdi mdi-chart-line"></i>
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
