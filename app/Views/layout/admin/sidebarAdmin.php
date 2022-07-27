  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->

      <a href="/dashboardAdmin" class="brand-link">
          <img src="assets/img/Aminah1.png" alt="Aminah Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Aminah</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <?php foreach ($admin as $ad) : ?>
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                      <img src="assets/img/<?= $ad['foto_admin']; ?>" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                      <a href="#" class="d-block"><?= $ad['nama_admin']; ?></a>
                  </div>
              </div>
          <?php endforeach; ?>
          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="/dashboardAdmin" class="nav-link" class="<?php echo (isset($active) && $active == 'dashboardAdmin') ? 'active' : '' ?>">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="/dataPengajuan" class="nav-link" class="<?php echo (isset($active) && $active == 'dataPengajuan') ? 'active' : '' ?>">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Data Pengajuan Pendanaan
                              <span class="badge badge-info right">100</span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-chart-pie"></i>
                          <p>
                              Data Rincian Pendanaan

                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Data Borrower

                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Data Keuangan Aminah

                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              Logout

                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>