@php
    $items = $parking_spots;
    $groups = collect($items)->chunk(6);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    @include('gate.css')
</head>

<body>
    @include('gate.nav')
    <div>
        <div class="text-center">
            <h2>Car Park Map</h2>
        </div>
        <div class="py-2">
            <div id="choose_parking_space" class="p-0 p-md-2 m-4 m-md-0 py-4" style="width: auto;height: auto;">
                <div class="park_list p-2 p-md-4" style="background: url({{asset('assets/img/asphalt.jpg')}}) round;">
                    <div class="row">
                        @foreach ($groups[0] as $spot)
                            <div class="col-2 p-3 border-bottom border-start border-end border-white border-2">
                                <div class="parking-spot @if(!$spot->status == 'occupied') available @endif">
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
                                <div class="parking-spot @if(!$spot->status == 'occupied') available @endif">
                                <span class="d-none park_id">{{$spot->id}}</span>
                                    @if($spot->status == 'occupied')
                                        <img style= src="{{asset('assets/img/car_green.png')}}">  
                                    @else
                                        <span>{{$spot->id}}</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('gate.footer')
</body>

</html>