<!DOCTYPE html>
<html lang="en">
@yield('admin.css')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>


        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <form  action="{{ route('logout') }}" method="POST" class="nav-item d-none d-sm-inline-block">
                    @csrf
                    <button type="submit" class="nav-link">   <i class="fas fa-window-close"></i></button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('admin.index') }}" class="d-block">WebLabs</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('admin.index') }}" class="nav-link {{ (request()->is('index*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('users.index') }}" class="nav-link {{ (request()->is('users*')) ? 'active' : '' }}">--}}
{{--                            <i class="nav-icon fas fa-users"></i>--}}
{{--                            <p>--}}
{{--                                Users--}}
{{--                                <i class="right fas fa-angle-left"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('translations.index') }}" class="nav-link {{ (request()->is('translations*')) ? 'active' : '' }}">--}}
{{--                            <i class="nav-icon fas fa-globe-europe"></i>--}}
{{--                            <p>--}}
{{--                                Languages--}}
{{--                                <i class="right fas fa-angle-left"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a href="{{ route('abouts.index') }}" class="nav-link {{ (request()->is('abouts*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                About Us
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('services.index') }}" class="nav-link {{ (request()->is('services*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-server"></i>
                            <p>
                                Services
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('projects.index') }}" class="nav-link {{ (request()->is('projects*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-project-diagram"></i>
                            <p>
                                Projects
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categories.index') }}" class="nav-link {{ (request()->is('categories*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-procedures"></i>
                            <p>
                                Categories
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.contact') }}" class="nav-link {{ (request()->is('contacts*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-comment"></i>
                            <p>
                                Contacts
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('category.index') }}" class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}">--}}
{{--                            <i class="nav-icon fas fa-align-justify"></i>--}}
{{--                            <p>--}}
{{--                                Category--}}
{{--                                <i class="right fas fa-angle-left"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('portfolios.index') }}" class="nav-link {{ (request()->is('portfolios*')) ? 'active' : '' }}">--}}
{{--                            <i class="nav-icon fas fa-project-diagram"></i>--}}
{{--                            <p>--}}
{{--                                Portfolios--}}
{{--                                <i class="right fas fa-angle-left"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('contact') }}" class="nav-link {{ (request()->is('contact*')) ? 'active' : '' }}">--}}
{{--                            <i class="nav-icon fas fa-mail-bulk"></i>--}}
{{--                            <p>--}}
{{--                                Contacts--}}
{{--                                <span>{{$contacts->count()}}</span>--}}
{{--                                <i class="right fas fa-angle-left"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
@yield('admin.body')
<!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://tech-wa.com">Wa-Tech</a>.</strong>
        All rights reserved.

    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@yield('admin.js')
</body>
</html>



