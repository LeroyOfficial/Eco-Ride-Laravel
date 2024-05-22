<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div id="page_header" class="page_header" style="background: url({{asset('assets/img/titlebar-1.jpg')}}) center / cover no-repeat;">
        <div class="cont text-center text-white" style="background: rgba(0,0,0,0.5);">
            <h1>Add A New Car</h1>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item">
                    <a href="{{url('/client/home')}}">
                        <span>Home</span>
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    <span>Add A New Car</span>
                </li>
            </ol>
        </div>
    </div>
    <div class="py-5 px-2 px-md-3 px-lg-5">
        <div class="p-2 d-flex justify-content-between">
            <span class="fs-4 fw-bold">Add the new car details below</span>
            <a class="btn rounded-pill text-capitalize" role="button" style="color: var(--color-second);border-width: 1px;border-style: solid;" href="{{url('/client/my_cars')}}">go back</a>
        </div>
        <div>
            <form class="row" method="post" action="{{url('/client/post_car')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 col-lg-4 py-2">
                    <div class="py-2">
                        <span class="text-capitalize fw-bold">Add car image</span>
                    </div>
                    <div class="py-2">
                        <img id="preview">
                    </div>
                    <div class="py-2">
                        <input class="form-control"  name="image" type="file" required="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 py-2">
                    <div class="py-2">
                    <span class="text-capitalize fw-bold">Add car details</span>
                    </div>
                    <div class="py-2">
                    <label class="form-label">Brand</label>
                    <input class="form-control" type="text" required="" name="brand" placeholder="eg Toyota">
                    </div>
                    <div class="py-2">
                    <label class="form-label">Model</label>
                    <input class="form-control" type="text" required="" name="model" placeholder="eg Axio">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 py-2">
                    <div class="py-2">
                    <span class="text-capitalize fw-bold">Add car Number Plate</span>
                    </div>
                    <div class="py-2">
                    <label class="form-label">Number Plate</label>
                    <input class="form-control" type="text" required="" name="number_plate" placeholder="eg BS 1234">
                    </div>
                </div>
                <div class="col-12 p-2 text-end">
                <button class="btn rounded-pill text-capitalize" type="submit" style="background: var(--color-main);color: var(--color-white);">Submit</button>
                </div>
            </form>
        </div>
    </div>
    @include('user.footer')
</body>

</html>