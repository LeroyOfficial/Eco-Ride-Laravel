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
                    <h3 class="text-dark mb-4">Clients</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Client Info</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="data_table table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Plan Type</th>
                                            <th>Subscription Exp Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                            <tr>
                                                <td><a href="{{url('/admin/client/'.$client->id)}}">{{$client->first_name}} {{$client->last_name}}</a></td>
                                                <td><a href="tel:{{$client->phone}}">{{$client->phone}}</a></td>
                                                <td><a href="mailto:{{$client->email}}">{{$client->email}}</a></td>
                                                <td>{{$client->plan_type}}</td>
                                                <td>{{$client->sub_exp_day}}</td>
                                                <td>{{$client->status}}</td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.footer')
        </body>
</html>