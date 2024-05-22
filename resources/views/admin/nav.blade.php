<nav class="navbar navbar-dark bg-danger align-items-start sidebar sidebar-dark accordion p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a href="{{url('/admin/dashboard')}}" class="navbar-brand d-flex flex-column justify-content-center align-items-center sidebar-brand m-0">
            <div class="sidebar-brand-icon">
                <img src="{{asset('assets/img/logo.png')}}" style="height: 50px; width:50px;">
            </div>
            <div class="sidebar-brand-text mx-3">
                <span>{{config('app.name')}}</span>
            </div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/dashboard')}}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/clients')}}">
                    <i class="fas fa-user"></i>
                    <span>Clients</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/employees')}}">
                    <i class="fas fa-user"></i>
                    <span>Employees</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/payments')}}">
                    <i class="fas fa-table"></i>
                    <span>Payment History</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/messages')}}">
                    <i class="fas fa-table"></i>
                    <span>Contact Us Messages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-users-circle"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" hidden="" method="POST" action="{{route('logout')}}">
                    @csrf
                </form>
            </li>
        </ul>
        <div class="text-center d-none d-md-inline">
            <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
        </div>
    </div>
</nav>