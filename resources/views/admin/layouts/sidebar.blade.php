    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Vehicle Management</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{asset('/storage/images/'.Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ Auth::user()->last_name }}</a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ route('manage-user') }}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage User
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('manage-category') }}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage Category
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('manage-service') }}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage Service Request
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
              </li>
             
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
</aside>