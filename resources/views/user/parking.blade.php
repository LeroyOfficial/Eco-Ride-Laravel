@php
    $items = $parking_spots;
    $groups = collect($items)->chunk(6);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    @include('user.nav')
    <div id="page_header" class="page_header" style="background: url({{asset('assets/img/titlebar-1.jpg')}}) center / cover no-repeat;">
        <div class="cont text-center text-white" style="background: rgba(0,0,0,0.5);">
            <h1>Parking</h1>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item">
                    <a href="{{url('/client/home')}}">
                        <span>Home</span>
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    <span>Parking</span>
                </li>
            </ol>
        </div>
    </div>
    <div class="py-5 px-2 px-md-3 px-lg-5">
        <form method="post" action="{{url('/client/post_park')}}">
            @csrf
            <div style="display:none;">
                <input class="form-control" type="text" id="car" name="car" required="">
                <input class="form-control" type="text" id="park_spot" name="park_spot" required="">
            </div>
            <div id="set" class="p-2">
                <div>

                </div>
                <div id="set_time_and_date" class="row py-4">
                    <div id="entry_time_and_date" class="col-12 py-3">
                        <div class="row">
                            <div class="col-12 fs-5 text-center">
                                <span class="fw-bold" style="color: var(--color-main);">Date & Time</span>
                            </div>
                            <div class="col-12 p-2">
                                <label class="form-label text-uppercase" for="entry_date">Date</label>
                                <input class="form-control" id="date" type="date" required="" name="date">
                            </div>
                            <div class="col-sm-6 p-2">
                                <label class="form-label text-uppercase" for="entry_time">Entry time</label>
                                <input class="form-control" id="entry" type="time" required="" name="entry_time">
                            </div>
                            <div class="col-sm-6 p-2">
                                <label class="form-label text-uppercase" for="exit_time">Exit time</label>
                                <input class="form-control" id="exit" type="time" required="" name="exit_time">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="select_vehicle" class="row py-4">
                    <div class="text-center py-2 mb-4 mb-md-0">
                    <span class="fs-4 fw-bold text-capitalize">choose the vehicle you want to park</span>
                    </div>
                    <div id="car_list" class="row py-2">
                        @if($carcount > 0)
                            @foreach ($cars as $car)
                                <div class="car col-md-6 col-lg-4 col-xl-3 p-3">
                                    <div class="p-3 shadow">
                                        <div>
                                            <img src="{{asset('Car_Pics/'.$car->image)}}">
                                        </div>
                                        <div class="py-2">
                                            <span class="d-flex justify-content-between py-2">
                                            <span>Brand :</span>
                                            <span class="fw-bold">{{$car->brand}}</span>
                                        </span>
                                            <span class="d-flex justify-content-between py-2">
                                            <span>Model :</span>
                                            <span class="fw-bold">{{$car->model}}</span>
                                        </span>
                                            <span class="d-flex justify-content-between py-2">
                                            <span>Number Plate :</span>
                                            <span class="fw-bold">{{$car->number_plate}}</span>
                                        </span>
                                        </div>
                                        <div class="text-center p-2">
                                            <span class="car_id" style="display:none;">{{$car->id}}</span>
                                            <button class="car_btn btn rounded-pill" type="button" role="button" style="border-width: 1px;border-style: solid;font-size: 14px;">Select</>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 p-3">
                                <div class="p-3 shadow text-center">
                                    <h4>You havent added any cars yet</h4>
                                    <a class="btn btn-primary rounded-pill text-capitalize" role="button" style="background: var(--color-main);" href="{{url('/client/new_car')}}">add a new car</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div id="choose_parking_space" class="p-0 p-md-2 m-4 m-md-0 py-4" style="width: auto;height: auto;">
                    <div class="text-center py-2 mb-4 mb-md-0">
                    <span class="fs-4 fw-bold text-capitalize">Choose a Parking Space</span>
                    <div>
                        <span id="booking-status" class="fs-5 fw-bold text-danger text-capitalize"></span>
                    </div>
                    </div>
                    <div class="park_list p-2 p-md-4" style="background: url({{asset('assets/img/asphalt.jpg')}}) round;">
                        <div class="row">
                            @foreach ($groups[0] as $spot)
                                <div class="col-2 p-3 border-bottom border-start border-end border-white border-2">
                                    <div class="parking-spot @if($spot->status == 'available') available @endif">
                                    <span class="d-none park_id">{{$spot->id}}</span>
                                        @if($spot->status == 'occupied')
                                            <img style="transform: rotate(180deg);" src="{{asset('assets/img/car_green.png')}}">  
                                        @else
                                            <span>{{$spot->id}}</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="row">
                            @foreach ($groups[1] as $spot)
                                <div class="col-2 p-3 border-top border-start border-end border-white border-2">
                                    <div class="parking-spot @if($spot->status == 'available') available @endif>
                                    <span class="d-none park_id">{{$spot->id}}</span>
                                        @if($spot->status == 'occupied')
                                            <img src="{{asset('assets/img/car_green.png')}}">  
                                        @else
                                            <span>{{$spot->id}}</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="py-4 px-2 text-center">
                    <button class="btn btn-primary rounded-pill" type="submit" style="background: var(--color-main);">Done</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @include('user.footer')
    <script src="{{asset('assets/js/book_parking_space.js')}}"></script>
    <script src="{{asset('assets/js/AjaxFunction.js')}}"></script>
</body>

</html>