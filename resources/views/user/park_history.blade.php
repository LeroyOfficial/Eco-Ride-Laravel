<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div class="py-5 px-2 px-md-3 px-lg-5">
        <div class="p-2 d-flex justify-content-between">
            <span class="fs-4 fw-bold">View your Parking History</span>
            <a href="{{url('/client/generate_park_report')}}" class="btn rounded-pill text-capitalize" role="button" style="color: var(--color-main);border-width: 1px;border-style: solid;">generate report</a>
        </div>
        <div>
            <div class="table-responsive">
                <table class="data_table table">
                    <thead>
                        <tr>
                            <th>Car</th>
                            <th>Park Space</th>
                            <th>Entry Time</th>
                            <th>Exit Time</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($park_history_count > 0)
                            @foreach ($park_history as $park)
                                <tr>
                                    <td>{{$car->where('id',$park->vehicle_id)->value('brand'). ' ' . $car->where('id',$park->vehicle_id)->value('model')}}</td>
                                    <td>park space #{{$park->parking_spot_id}}</td>
                                    <td>{{$park->entry_time}}</td>
                                    <td>{{$park->exit_time}}</td>
                                    <td>{{$park->date}}</td>
                                </tr>
                            @endforeach
                        @else
                            
                        @endif
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('user.footer')
</body>

</html>