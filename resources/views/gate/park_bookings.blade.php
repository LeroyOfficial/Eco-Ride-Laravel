<!DOCTYPE html>
<html lang="en">

<head>
    @include('gate.css')
</head>

<body>
    @include('gate.nav')
    <div>
        <div class="text-center">
            <h2>Pending Bookings</h2>
        </div>
        <div class="table-responsive">
            <table class="data_table table">
                <thead>
                    <tr class="text-center">
                        <th>Car Details</th>
                        <th>Park Space</th>
                        <th>Entry Time</th>
                        <th>Exit Time</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $book)
                        <tr class="text-center">
                            <td>
                                {{$car->where('id',$book->vehicle_id)->value('brand')}} 
                                {{$car->where('id',$book->vehicle_id)->value('model')}} 
                                ( {{$car->where('id',$book->vehicle_id)->value('number_plate')}} )
                            </td>
                            <td>{{$book->parking_spot_id}}</td>
                            <td>{{$book->entry_time}}</td>
                            <td>{{$book->exit_time}}</td>
                            <td>{{$book->date}}</td>
                            <td>
                                <a class="btn btn-warning" role="button" href="{{url('gate/booking/'.$book->id)}}">Manage</a>
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