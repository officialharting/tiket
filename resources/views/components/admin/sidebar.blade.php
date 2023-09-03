<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <div class="row g-0">
            <div class="col-0 d-flex justify-content-center">
                <a href="dashboard" class="navbar-brand mx-4 mb-3 ">
                    <h3 class="text-primary"><img alt="" height="40px"
                            src="{{ asset('client/images-dj/logo-junji-yellow.png') }}" /></h3>
                </a>
            </div>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="{{ asset('admin/img/admin.jpeg') }}" alt=""
                        style="width: 40px; height: 40px;">
                    <div
                        class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                    </div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">Nasdar</h6>
                    <span>Admin</span>
                </div>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="dashboard" class="nav-item nav-link {{ $menu == 'dashboard' ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Buttons</a>
                    <a href="typography.html" class="dropdown-item">Typography</a>
                    <a href="element.html" class="dropdown-item">Other Elements</a>
                </div>
            </div> --}}
            <a href="{{ url('customer') }}" class="nav-item nav-link {{ $menu == 'customer' ? 'active' : '' }}"><i class="fa fa-th me-2"></i>Customer</a>
            <a href="{{ url('event') }}" class="nav-item nav-link {{ $menu == 'event' ? 'active' : '' }}"><i class="fa fa-keyboard me-2"></i>Event</a>
            <a href="{{ url('user') }}" class="nav-item nav-link {{ $menu == 'user' ? 'active' : '' }}"><i class="fa fa-table me-2"></i>User</a>
            {{-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> --}}
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
        </div>
    </nav>
</div>
<!-- Sidebar End -->