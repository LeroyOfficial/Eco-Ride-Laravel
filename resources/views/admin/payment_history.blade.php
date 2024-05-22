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
                    <h3 class="text-dark mb-4">Payment Transactions</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Payment Info</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="data_table table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Reason for Payment</th>
                                            <th>Method used</th>
                                            <th>Amount</th>
                                            <th>TransID</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($payments as $payment)
                                            <tr>
                                                <td>
                                                    <a href="{{url('admin/client/'.$client->where('email',$user->where('id',$payment->user_id)->value('email'))->value('id'))}}">
                                                        {{$client->where('email',$user->where('id',$payment->user_id)->value('email'))->value('first_name')}} 
                                                        {{$client->where('email',$user->where('id',$payment->user_id)->value('email'))->value('last_name')}}
                                                    </a>
                                                </td>
                                                <td>{{$payment->name}}</td>
                                                <td>{{$payment->method}}</td>
                                                <td>K{{$payment->amount}}</td>
                                                <td>{{$payment->trans_id}}</td>
                                            </tr>
                                        @endforeach
                                        
                                       
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.footer')
    </body>

</html>