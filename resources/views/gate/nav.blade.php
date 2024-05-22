<nav>
    <div class="py-2 row text-center">
        <div class="col-4">
            <a href="{{url('gate/dashboard')}}">
                <h1>Gate Man Dashboard</h1>
            </a>
            
        </div>
        <div class="col-4 d-flex justify-content-center align-items-center">
            
            <form class="d-inline-flex" method="get" action="{{url('gate/search_cars')}}">
                <input class="form-control" type="search" name="search" placeholder="Search for Car" required="">
                <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            
        </div>
        <div class="col-4">
            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" hidden="" method="POST" action="{{route('logout')}}">
                @csrf
            </form>
        </div>
    </div>
    <div class="row text-center py-1">
        <div class="col-3 p-3">
            <a class="btn btn-light" role="button" href="{{url('gate/parking_space')}}">View Parking Space Status</a>
        </div>
        <div class="col-3 p-3">
            <a class="btn btn-light" role="button" href="{{url('gate/bookings')}}">View Bookings</a>
        </div>
        <div class="col-3 p-3">
            <a class="btn btn-light" role="button" href="{{url('gate/car_park_map')}}">View Car Park Map</a>
        </div>
        <div class="col-3 p-3">
            <a class="btn btn-danger" role="button" href="{{url('gate/emergency_numbers')}}">Emegency Numbers</a>
        </div>
    </div>
</nav>