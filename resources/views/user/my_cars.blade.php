<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div id="page_header" class="page_header" style="background: url({{asset('assets/img/titlebar-1.jpg')}}) center / cover no-repeat;">
        <div class="cont text-center text-white" style="background: rgba(0,0,0,0.5);">
            <h1>My Cars</h1>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item">
                    <a href="{{url('/client/home')}}">
                        <span>Home</span>
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    <span>My Cars</span>
                </li>
            </ol>
        </div>
    </div>
    <div class="py-5">
        <div class="p-2 d-flex justify-content-between">
            <span class="fs-4 fw-bold">Here is your List of Cars</span>
            <a class="btn btn-primary rounded-pill text-capitalize" role="button" style="background: var(--color-main);" href="{{url('/client/new_car')}}">add a new car</a>
        </div>
        <div class="row py-5 px-2 px-md-3 px-lg-5">

            @if($carcount > 0)
                @foreach ($cars as $car)
                    <div class="col-md-6 col-lg-4 col-xl-3 p-3">
                        <div class="p-3 shadow">
                            <div>
                                <a href="{{asset('Car_Pics/'.$car->image)}}"><img src="{{asset('Car_Pics/'.$car->image)}}"></a>
                                
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
                            <div class="d-flex justify-content-between p-2">
                                <a href="{{url('client/edit_car/{id}')}}" class="btn rounded-pill" role="button" style="color: var(--color-main);border-width: 1px;border-style: solid;font-size: 14px;">Edit</a>
                                <a href="{{url('client/delete_car/{id}')}}" class="btn rounded-pill" role="button" style="color: var(--color-second);border: 1px solid var(--color-second);font-size: 14px;" onclick="return confirm(&#39;Are you sure that you want to delete this car?&#39;)">Delete</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="col-12 p-3">
                <div class="p-3 shadow text-center">
                    <h4>You havent added any cars yet, please use the add new car button to add a new car to your collection</h4>
                </div>
            </div>
            @endif
            

        </div>
    </div>
    @include('user.footer')
</body>

</html>