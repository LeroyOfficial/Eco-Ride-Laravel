<!DOCTYPE html>
<html lang="en">

<head>
    @include('gate.css')
</head>

<body>
    @include('gate.nav')
    <div>
        <div class="text-center">
            <h2>Manage Booking</h2>
        </div>
        <div class="py-2">
            <div class="row p-2 justify-content-center">
                <div class="col-4">
                    <div class="py-1"><span>Manager Name</span>
                        <h4>Taurai Taurai</h4>
                    </div>
                    <div class="py-1"><span>Phone Number</span>
                        <h4>099123432</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div class="py-1"><span>Service Name</span>
                        <h4>Police</h4>
                    </div>
                    <div class="py-1"><span>Phone Number</span>
                        <h4>997</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div class="py-1"><span>Service Name</span>
                        <h4>Fire Department</h4>
                    </div>
                    <div class="py-1"><span>Phone Number</span>
                        <h4>991</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('gate.footer')
</body>

</html>