<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-text mx-3">WeFly</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tableau de bord</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#administrator" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-desktop"></i>
      <span>Administration</span>
    </a>
    <div id="administrator" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Menu:</h6>
        <a class="collapse-item" href="{{ url('compagnie') }}">Compagnie</a>
        <a class="collapse-item" href="{{ url('airport') }}">Aeroports</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ url('vol') }}" >
      <i class="fas fa-fw fa-desktop"></i>
      <span>Vols disponibles</span>
    </a>
    
  </li>
  
 
  
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->
  