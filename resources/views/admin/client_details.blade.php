<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body id="page-top">
    <div id="wrapper">
        @include('admin.nav')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                @include('admin.nav2')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">{{$client->first_name}} {{$client->last_name}}</h3>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">User Details</p>
                                </div>
                                <div class="card-body">
                                    <form>                  
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="first_name">
                                                    <strong>First Name</strong>
                                                </label>
                                                    <input class="form-control" type="text" id="first_name" value="{{$client->first_name}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="last_name">
                                                    <strong>Last Name</strong>
                                                </label>
                                                    <input class="form-control" type="text" id="last_name" value="{{$client->last_name}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="phone">
                                                    <strong>Phone Number</strong>
                                                </label>
                                                    <input class="form-control" type="text" id="phone" value="{{$client->phone}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">
                                                    <strong>Email Address</strong>
                                                </label>
                                                    <input class="form-control" type="email" id="email" value="{{$client->email}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="plan_type">
                                                    <strong>Plan Type</strong>
                                                </label>
                                                    <input class="form-control" type="text" id="plan_type" value="{{$client->plan_type}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="seb_exp_day">
                                                    <strong>Susbscription Expiry Date</strong>
                                                </label>
                                                    <input class="form-control" type="text" id="seb_exp_day" value="{{$client->sub_exp_day}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">{{$client->first_name .' '. $client->last_name}} Cars</p>
                        </div>
                        <div class="card-body">
                            <div class="row">                                
                                @if($carcount > 0)
                                    @foreach ($cars as $car)
                                        <div class="col-md-6 col-lg-4 col-xl-3 p-3">
                                            <div class="p-3 shadow">
                                                <div>
                                                    <a href="{{asset('Car_Pics/'.$car->image)}}"><img src="{{asset('Car_Pics/'.$car->image)}}" style="max-width:100%; "></a>
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
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                <div class="col-12 p-3">
                                    <div class="p-3 shadow text-center">
                                        <h4>This client hasnt added any cars yet</h4>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">{{$client->first_name .' '. $client->last_name}} Park History</p>
                        </div>
                        <div class="card-body">
                            <div class="p-2 d-flex justify-content-end">
                                <a href="{{url('/admin/generate_client_park_report/'.$client->email)}}" class="btn btn-primary btn-sm" type="button">generate report</a>
                            </div>
                            <table class="data_table table my-0" id="dataTable">
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
            </div>
            @include('admin.footer')
    </body>
</html>