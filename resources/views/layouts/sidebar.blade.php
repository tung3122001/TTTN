
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #343a40">
      <!-- Brand Logo -->
      {{-- <a href="#" class="brand-link">
        <img src="{{asset('dist/img/BSP.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .7">
        <span class="brand-text font-weight-light">BSP Software Services Corp</span>
      </a> --}}
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('dist/img/123.jpg')}}" class="img-circle elevation-3" alt="User Image">
          </div>
          <div class="info" style="color: aliceblue">
            Thanh Tùng
          </div>
        </div>
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
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Danh Mục 
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('welcome')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Trang Chủ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('Infindex')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Thông tin thiết bị</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('Empindex')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Nhân viên</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('getListMuon')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Mượn thiết bị</p>
              </a>
            </li>
            {{-- <ul class="nav nav-pills nav-sidebar flex-column text-center">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('logout')}}"> Đăng Xuất<i class="bi bi-box-arrow-left m-3"></i></a>
              </li>
            </ul> --}}
          </ul>
          
        </li>
      </ul>
      {{-- <ul class="nav nav-pills nav-sidebar flex-column text-center">
        <li class="nav-item" style="" >
          <a class="nav-link active" href="{{route('logout')}}"> Đăng Xuất<i class="bi bi-box-arrow-left m-3"></i></a>
        </li>
        </ul> --}}
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <ul class="nav nav-pills nav-sidebar flex-column text-center">
    <li class="nav-item" style="" >
      <a class="nav-link active" href="{{route('logout')}}"> Đăng Xuất<i class="bi bi-box-arrow-left m-3"></i></a>
    </li>
    </ul>
    <!-- /.sidebar -->
    </aside>
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>
    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->






