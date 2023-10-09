  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 slimScrollBar" style="overflow-y: scroll;">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
    
      <span class="brand-text font-weight-light">Employee</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://thumbs.dreamstime.com/b/vector-illustration-avatar-dummy-logo-collection-image-icon-stock-isolated-object-set-symbol-web-137160339.jpg" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="{{url('/')}}" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
    
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Employee Record
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('department.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department List</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('employee.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Employee List</p>
                  </a>
                </li>
              </ul>
          </li>
         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>