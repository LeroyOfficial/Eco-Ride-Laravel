<!DOCTYPE html>
<html lang="en">

<head>
    @include('gate.css')
</head>

<body>
    @include('gate.nav')
    <div>
        <div class="text-center">
            <h2>{{$search}} Search Results</h2>
        </div>

        <div class="py-2">

            @foreach ($cars as $car)
                <div class="row p-2 justify-content-center">
                    <div class="col-3">
                        <img src="{{asset('Car_Pics/'.$car->image)}}">
                    </div>
                    <div class="col-2">
                        <div class="py-1"><span>Car Brand</span>
                            <h4>{{$car->brand}}</h4>
                        </div>
                        <div class="py-1"><span>Model</span>
                            <h4>{{$car->model}}</h4>
                        </div>
                        <div class="py-1"><span>Number Plate</span>
                            <h4>{{$car->number_plate}}</h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="py-1"><span>Owner Name</span>
                            <h4>{{$client->where('email',$user->where('id',$car->owner_id)->value('email'))->value('first_name')}} {{$client->where('email',$user->where('id',$car->owner_id)->value('email'))->value('last_name')}}</h4>
                        </div>
                        <div class="py-1"><span>Phone Number</span>
                            <h4>{{$client->where('email',$user->where('id',$car->owner_id)->value('email'))->value('phone')}}</h4>
                        </div>
                        <div class="py-1"><span>Email</span>
                            <h4>{{$client->where('email',$user->where('id',$car->owner_id)->value('email'))->value('email')}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <footer></footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/table.js"></script>
</body>

</html>