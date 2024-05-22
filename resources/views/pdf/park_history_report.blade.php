<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>{{Auth::user()->name}} Parking History Report</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>

</head>

<body>
    <div style="text-align: center">
       {{-- <img style="height: 20vh; width:20px;" src="{{asset('assets/img/logo.png')}}">  --}}
    </div>
    
    <div style="text-align: center">
        <h1>{{Auth::user()->name}} Parking History Report</h1>
    </div>

        <table style="width: 100%;">
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
                @foreach ($park_history as $park)
                    <tr>
                        <td>{{$car->where('id',$park->vehicle_id)->value('brand'). ' ' . $car->where('id',$park->vehicle_id)->value('model') . ' ' . $car->where('id',$park->vehicle_id)->value('number_plate')}}</td>
                        <td>park space #{{$park->parking_spot_id}}</td>
                        <td>{{$park->entry_time}}</td>
                        <td>{{$park->exit_time}}</td>
                        <td>{{$park->date}}</td>
                    </tr>
                @endforeach            
        </tbody>
    </table>
    </div>
    
</body>
</html>