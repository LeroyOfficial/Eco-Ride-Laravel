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
                    <h3 class="text-dark mb-4">Employees</h3>
                    <div class="card shadow">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <p class="text-primary m-0 fw-bold">Employee Info</p>
                            <div class="col-md-4 text-end">
                                <a href="{{url('admin/new_employee')}}" class="btn btn-primary">Add a New Employee</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="data_table table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                            <tr>
                                                <td><a href="">{{$employee->first_name}} {{$employee->last_name}}</a></td>
                                                <td>{{$employee->email}}</td>
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