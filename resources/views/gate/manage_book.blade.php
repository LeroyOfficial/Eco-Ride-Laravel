<!DOCTYPE html>
<html lang="en">

<head>
   @include('gate.css')
</head>

<body>
    @include('gate.nav')
    <div>
        <div class="text-center">
            <h2>Manage Booking</h2>
        </div>
        <div class="py-2">
            <div class="row p-2 justify-content-center">
                <div class="col-3" img="">
                    <img src="{{asset('Car_Pics/'.$car->image)}}">
                </div>
                <div class="col-2">
                    <div class="py-1">
                        <span>Car Brand</span>
                        <h4>{{$car->brand}}</h4>
                    </div>
                    <div class="py-1">
                        <span>Model</span>
                        <h4>{{$car->model}}</h4>
                    </div>
                    <div class="py-1">
                        <span>Number Plate</span>
                        <h4>{{$car->number_plate}}</h4>
                    </div>
                </div>
                <div class="col-3">
                    <div class="py-1">
                        <span>Owner Name</span>
                        <h4>
                            {{$client->first_name}} 
                            {{$client->last_name}}</h4>
                    </div>
                    <div class="py-1">
                        <span>Phone Number</span>
                        <h4>{{$client->phone}}</h4>
                    </div>
                    <div class="py-1">
                        <span>Email</span>
                        <h4>{{$client->email}}</h4>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                    @if ($booking->status == 'pending')
                        <a href="{{url('gate/car_is_entering/'.$booking->id)}}" class="btn btn-success" role="button">Is it Entering?</a>
                    @elseif ($booking->status == 'active')
                        <a href="{{url('gate/car_is_exiting/'.$booking->id)}}" class="btn btn-warning" role="button">Is it Exiting?</a>
                    @else
                    <a class="btn btn-light" role="button">Done</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('gate.footer')
</body>

</html>