<!DOCTYPE html>
<html lang="en">
<head>
    @include('gate.css')
</head>
<body>
    @include('gate.nav')
    <div>
        <div class="row py-2">
            <div class="col-4 p-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Available Parking Spots</h5>
                        <p class="card-text">{{$available_park_space}}</p>
                    </div>
                </div>
            </div>
            <div class="col-4 p-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Occupied Parking Spots</h5>
                        <p class="card-text">{{$occupied_park_space}}</p>
                    </div>
                </div>
            </div>
            <div class="col-4 p-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Reserved Parking Spots</h5>
                        <p class="card-text">9</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="d-flex justify-content-between">
            <a href="{{url('gate/manage_bookings')}}" class="btn" role="button">Manage Bookings</a>
            <h2>Parking Spot Status</h2>
            <a href="{{url('gate/car_park_map')}}" class="btn btn-success" role="button">View in Graphical Form</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Parking Spot</th>
                        <th>Status</th>
                        <th>Entry Time</th>
                        <th>Exit Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($parking_spots as $park)
                        <tr class="text-center">
                            <td>{{$park->id}}</td>
                            <td>{{$park->status}}</td>
                            <td>
                                @if($park->status == 'occupied') 
                                    {{$book->where('status','active')->where('parking_spot_id',$park->id)->value('entry_time')}} 
                                @else 
                                    <span>--</span>
                                @endif
                            </td>
                            <td>
                                @if($park->status == 'occupied') 
                                    {{$book->where('status','active')->where('parking_spot_id',$park->id)->value('exit_time')}} 
                                @else 
                                    <span>--</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    @include('gate.footer')
</body>
</html>