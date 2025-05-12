<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="#" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.superadmin') }}"
                        class="nav-link {{ request()->routeIs('dashboard.superadmin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>

                <!-- Sidebar Menu -->
                <li class="nav-item {{ request()->is('dashboard/superadmin/charts*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('dashboard/superadmin/charts*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Charts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="display: {{ request()->is('dashboard/superadmin/charts*') ? 'block' : 'none' }};">
                        <li class="nav-item">
                            <a href="{{ route('superadmin.charts.chartjs') }}"
                                class="nav-link {{ request()->routeIs('superadmin.charts.chartjs') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ChartJS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('superadmin.charts.flot') }}"
                                class="nav-link {{ request()->routeIs('superadmin.charts.flot') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('superadmin.charts.inline') }}"
                                class="nav-link {{ request()->routeIs('superadmin.charts.inline') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('superadmin.charts.uplot') }}"
                                class="nav-link {{ request()->routeIs('superadmin.charts.uplot') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>uPlot</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">PENGATURAN HALAMAN</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Blog
                        </p>
                    </a>
                </li>

                <!-- Sidebar Menu -->
                <li class="nav-item {{ request()->is('dashboard/superadmin/beranda*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('dashboard/superadmin/beranda*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"
                        style="display: {{ request()->is('dashboard/superadmin/beranda*') ? 'block' : 'none' }};">
                        <li class="nav-item">
                            <a href="{{ route('superadmin.home-sections.index') }}" 
                               class="nav-link {{ request()->routeIs('superadmin.home-sections.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home Sections</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('superadmin.heroes.index') }}"
                                class="nav-link {{ request()->routeIs('superadmin.heroes.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Heroes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('superadmin.tentang.index') }}"
                                class="nav-link {{ request()->routeIs('superadmin.tentang.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tentang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kegiatan Anak Panti</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Program Donasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Support By</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kontak</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                            Tentang Kami
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sejarah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visi dan Misi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Susunan Pengurus</p>
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
