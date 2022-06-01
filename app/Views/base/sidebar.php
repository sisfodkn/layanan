<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?php if (!in_array($activeMenu, ['dashboard'])) echo "collapsed" ?>" href="<?php echo base_url('/') ?>">
        <i class="bi bi-grid"></i>
        <span>Dasbor</span>
      </a>
    </li><!-- End Dasbor Nav -->

    <li class="nav-heading">Master</li>

    <li class="nav-item">
      <a class="nav-link <?php if (!in_array($activeMenu, ['masterdata-pegawai'])) echo "collapsed" ?>" data-bs-target="#masterdata-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-clipboard-data"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="masterdata-nav" class="nav-content collapse <?php if (in_array($activeMenu, ['masterdata-pegawai'])) echo "show" ?>" data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?php echo base_url('/masterdata/pegawai') ?>" class="<?php if ($activeMenu == 'masterdata-pegawai') echo "active" ?>">
            <i class="bi bi-circle"></i><span>Data Pegawai</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Data Ruangan</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Data BMN</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Data ...</span>
          </a>
        </li>
      </ul>
    </li><!-- End Master Data Nav -->

    <li class="nav-heading">Transaksi</li>

    <li class="nav-item">
      <a class="nav-link <?php if (!in_array($activeMenu, ['pinjam-kendaraan'])) echo "collapsed" ?>" data-bs-target="#peminjaman-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Peminjaman</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="peminjaman-nav" class="nav-content collapse <?php if (in_array($activeMenu, ['pinjam-kendaraan'])) echo "show" ?>" data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?php echo base_url('/peminjaman/kendaraan') ?>" class="<?php if ($activeMenu == 'pinjam-kendaraan') echo "active" ?>">
            <i class="bi bi-circle"></i><span>Pinjam Kendaraan</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Pinjam Elektronik</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Pinjam Ruang Rapat</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Pinjam ...</span>
          </a>
        </li>
      </ul>
    </li><!-- End Peminjaman Nav -->

    <li class="nav-item">
      <a class="nav-link <?php if (!in_array($activeMenu, ['pengajuan-pemeliharaan'])) echo "collapsed" ?>" data-bs-target="#pengajuan-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="pengajuan-nav" class="nav-content collapse <?php if (in_array($activeMenu, ['pengajuan-pemeliharaan'])) echo "show" ?>" data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?php echo base_url('/pengajuan/pemeliharaan') ?>" class="<?php if ($activeMenu == 'pengajuan-pemeliharaan') echo "active" ?>">
            <i class="bi bi-circle"></i><span>Pemeliharaan</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Perbaikan Barang</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Pengajuan ...</span>
          </a>
        </li>
      </ul>
    </li><!-- End Pengajuan Nav -->

    <li class="nav-item">
      <a class="nav-link <?php if (!in_array($activeMenu, ['permintaan-atk'])) echo "collapsed" ?>" data-bs-target="#permintaan-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Permintaan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="permintaan-nav" class="nav-content collapse <?php if (in_array($activeMenu, ['permintaan-atk'])) echo "show" ?>" data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?php echo base_url('/permintaan/atk') ?>" class="<?php if ($activeMenu == 'permintaan-atk') echo "active" ?>">
            <i class="bi bi-circle"></i><span>Alat Tulis Kantor</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Permintaan ...</span>
          </a>
        </li>
      </ul>
    </li><!-- End Permintaan Nav -->

    <li class="nav-heading">Laporan</li>

    <li class="nav-item">
      <a class="nav-link <?php if (!in_array($activeMenu, ['laporan-peminjaman'])) echo "collapsed" ?>" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="laporan-nav" class="nav-content collapse <?php if (in_array($activeMenu, ['laporan-peminjaman'])) echo "show" ?>" data-bs-parent="#sidebar-nav">
        <li>
          <a href="#" class="<?php if ($activeMenu == 'laporan-peminjaman') echo "active" ?>">
            <i class="bi bi-circle"></i><span>Lap Peminjaman</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Lap Pengajuan</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Lap Permintaan</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Lap ...</span>
          </a>
        </li>
      </ul>
    </li><!-- End Laporan Nav -->

    <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href="components-list-group.html">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href="components-tabs.html">
              <i class="bi bi-circle"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href="components-pagination.html">
              <i class="bi bi-circle"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="components-spinners.html">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
    <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
    <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
    <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->
    <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->
    <!-- 
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
    <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
    <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
    <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->
    <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->
    <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->
    <!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

  </ul>

</aside><!-- End Sidebar-->