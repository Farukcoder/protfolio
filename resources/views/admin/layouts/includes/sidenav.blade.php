<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{asset('admin/assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group mt-2" data-widget="sidebar-search">
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
                    <a href="{{ route('dashboard') }}" class="nav-link @if($page == 'Dashboard') active @endif">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item @if($page == 'Information Add' || $page == 'Information List') menu-open @endif">
                    <a href="#" class="nav-link @if($page == 'Information Add' || $page == 'Information List') active @endif">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Information
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('informations.create') }}" class="nav-link @if($page == 'Information Add') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('informations.index') }}" class="nav-link @if($page == 'Information List') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('skills.index') }}" class="nav-link @if($page == 'Skills') active @endif">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Skills
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('educations.index') }}" class="nav-link @if($page == 'Educations') active @endif">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Educations
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('experiences.index') }}" class="nav-link @if($page == 'Experiences') active @endif">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Experiences
                        </p>
                    </a>
                </li>

                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Charts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/charts/chartjs.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ChartJS</p>
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
