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
                    <h3 class="text-dark mb-4">{{$message->first_name}}'s Message</h3>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">Message Details</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="fname">
                                                        <strong>First Name</strong>
                                                    </label>
                                                    <input class="form-control" readonly value="{{$message->first_name}}" type="text" id="fname">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="lname">
                                                        <strong>Last Name</strong>
                                                    </label>
                                                    <input class="form-control" readonly value="{{$message->last_name}}" type="text" id="lname">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="phone">
                                                        <strong>Phone Number</strong>
                                                    </label>
                                                    <input class="form-control" readonly value="{{$message->phone}}" type="text" id="phone">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">
                                                        <strong>Email Address</strong>
                                                    </label>
                                                    <input class="form-control" readonly value="{{$message->email}}" type="text" id="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="details">
                                                        <strong>Message</strong>
                                                    </label>
                                                    <textarea class="form-control" name="details" readonly id="details" style="height: 30vh;">{{$message->message}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @include('Admin.footer')
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
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
