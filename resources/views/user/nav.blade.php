<nav class="bg-white fixed-top py-1">
    <div class="row">
        <div class="col-11 col-lg-4 d-flex justify-content-start justify-content-lg-center align-items-center">
            <a class="d-flex align-items-center" @auth href="{{url('/client/home')}} @else href="{{url('/')}}@endauth">
            <img src="{{asset('assets/img/logo.png')}}" style="height: 80px;">
            <span class="fs-1 fw-bold">
            <span style="color: var(--color-main);">Eco</span>
            <span style="color: var(--color-second);">Ride</span>
        </span>
        </a>
        </div>
        <div class="col-lg-8 d-none d-lg-flex align-items-center justify-content-between px-4">
            <ul class="list-inline fs-6 fw-bold text-dark text-capitalize">
                <li class="list-inline-item px-2">
                    <a @auth href="{{url('/client/home')}} @else href="{{url('/')}}@endauth">home</a>
                </li>
                <li class="list-inline-item px-2">
                    <a href="{{url('/about')}}">about</a>
                </li>
                @auth
                    <li class="list-inline-item px-2">
                        <a href="{{url('/client/parking')}}">book a parking space</a>
                    </li>
                    <li class="list-inline-item px-2">
                        <a href="{{url('/client/my_cars')}}">my cars</a>
                    </li>
                    <li class="list-inline-item px-2">
                        <a href="{{url('/client/park_history')}}">park history</a>
                    </li>
                @endauth
                @guest
                    <li class="list-inline-item px-2">
                        <a href="{{url('/pricing')}}">pricing</a>
                    </li>
                @endguest
                
                <li class="list-inline-item px-2">
                    <a href="{{url('/contact')}}">contact</a>
                </li>
                @guest
                    <li class="list-inline-item px-2">
                        <a class="border border-danger py-2 px-4 rounded-pill" href="{{url('/register')}}" style="color: var(--color-second);">sign up here</a>
                    </li>
                    <li class="list-inline-item px-2">
                        <a class="text-white py-2 px-4 rounded-pill" href="{{url('/login')}}" style="background: var(--color-main);">Login Here</a>
                    </li>
                @endguest 
            </ul>
            @auth
                <div class="dropdown">
                    <button class="btn dropdown-toggle" aria-expanded="true" data-bs-toggle="dropdown" type="button">{{Auth::user()->name}}</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('user/profile')}}">Edit Profile</a>
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" hidden="" method="POST" action="{{route('logout')}}">
                            @csrf
                        </form>
                    </div>
                </div>
            @endauth
        </div>
        <div class="col-1 d-lg-none d-flex justify-content-center align-items-center text-center">
            <div class="dropdown">
                <button class="btn dropdown-toggle p-1" aria-expanded="false" data-bs-toggle="dropdown" ic="button">
                <i class="fas fa-list-ul fs-4"></i>
            </button>
                <div class="dropdown-menu text-capitalize">
                    <a class="dropdown-item" @auth href="{{url('/client/home')}} @else href="{{url('/')}}@endauth">Home</a>
                    <a class="dropdown-item" href="{{url('/about')}}">About</a>
                    <a class="dropdown-item" href="{{url('/pricing')}}">pricing</a>
                    <a class="dropdown-item" href="{{url('/contact')}}">contact</a>
                    @guest
                        <a class="dropdown-item" href="{{url('/register')}}">sign up</a>
                        <a class="dropdown-item" href="{{url('/login')}}">login</a>
                    @endguest
                    
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="spacer">

</div>