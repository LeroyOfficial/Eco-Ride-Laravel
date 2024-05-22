<!DOCTYPE html>
<html>

<head>
    @include('Admin.css')
</head>

<body id="page-top">
    <div id="wrapper">
        @include('Admin.nav')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                @include('Admin.nav2')

                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Add A New Employee</h3>
                    <form method="POST" action="{{url('admin/post_employee')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">Add New Employee Details</p>
                                    </div>
                                    <div class="card-body" >
                                        @include('admin.message_N_error')
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="firstname">
                                                            <strong>First Name</strong>
                                                        </label>
                                                        <input class="form-control" type="text" id="firstname" placeholder="first name" name="fname" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="lastname">
                                                            <strong>Last Name</strong>
                                                        </label>
                                                        <input class="form-control" type="text" id="lastname" placeholder="last name" name="lname" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="email">
                                                            <strong>Email Address</strong>
                                                        </label>
                                                        <input class="form-control" type="email" id="email" placeholder="" name="email" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="password">
                                                            <strong>His Login Password</strong>
                                                        </label>
                                                        <input class="form-control" type="text" id="password" placeholder="" name="password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary btn-sm" type="submit">Add Employee</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            @include('Admin.footer')
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>

    <script>
        $(document).ready(function() {
            $('#img_btn').click(function(){
                $('#img_input').trigger('click');
            });

            $('#img_input').change(function(){
                var input = this;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#img_input').hide();
                        $('#img_preview').show();
                        $('#img_preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });
    </script>
</body>

</html>
