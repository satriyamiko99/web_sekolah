<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="<?php echo base_url('assets/admin'); ?>/img/Logo_SMA.png">
    </div>
    <div class="sidebar-brand-text mx-2">SMA.CENGKARENG1</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <div class="sidebar-heading mt-4">
    Data Homepage
  </div>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('Admin/banner'); ?>">
      <i class="fas fa-fw fa-images"></i>
      <span>Data banner</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('Admin/gallery'); ?>">
      <i class="fas fa-fw fa-images"></i>
      <span>gallery</span>
    </a>
  </li>

  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Data Siswa
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true"
      aria-controls="collapseBootstrap">
      <i class="fas fa-users"></i>
      <span>Data Siswa</span>
    </a>
    <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo base_url('Admin/Siswa'); ?>">siswa</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('Admin/Guru'); ?>">
      <i class="fas fa-fw fa-users"></i>
      <span>Data Guru</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
      aria-controls="collapseTable">
      <i class="fas fa-fw fa-table"></i>
      <span>Pembayaran</span>
    </a>
    <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Pembayaran</h6>
        <a class="collapse-item" href="<?php echo base_url('Admin/Pembayaran'); ?>">Invoice</a>

      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('Admin/Berita'); ?>">
      <i class="fas fa-fw fa-palette"></i>
      <span>Berita</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('Admin/Ekstrakulikuler'); ?>">
      <i class="fas fa-fw fa-palette"></i>
      <span>Ekstrakulikuler</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('Admin/formulir'); ?>">
      <i class="fas fa-fw fa-palette"></i>
      <span>formulir</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('Admin/User'); ?>">
      <i class="fas fa-fw fa-users"></i>
      <span>Data User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>logout</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="version" id="version-ruangadmin"></div>
</ul>