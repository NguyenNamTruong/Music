<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">My Music<sup>2</sup></div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('Userdashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Home</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('usersongs') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Song</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="/userprofile">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Profile</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    {{-- <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('createusersongs') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Create New Song</span></a>
      </li> --}}
  
  </ul>
  