<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>EcoRide Gate</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav>
        <div class="py-2 row text-center">
            <div class="col-4">
                <h1>Gate Man Dashboard</h1>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <form class="d-inline-flex" method="get"><input class="form-control" type="search" name="search" placeholder="Search for Car" required=""><button class="btn" type="submit"><i class="fas fa-search"></i></button></form>
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row text-center py-1">
            <div class="col-3 p-3"><a class="btn btn-light" role="button" href="park_space_stats.html">View Parking Space Status</a></div>
            <div class="col-3 p-3"><a class="btn btn-light" role="button" href="booking.html">View Bookings</a></div>
            <div class="col-3 p-3"><a class="btn btn-light" role="button" href="ariel_view.html">View Car Park Map</a></div>
            <div class="col-3 p-3"><a class="btn btn-light" role="button" href="emergency_numbers.html">Emegency Numbers</a></div>
        </div>
    </nav>
    <div>
        <div class="text-center">
            <h2>Manage Booking</h2>
        </div>
        <div class="py-2">
            <div class="row p-2 justify-content-center">
                <div class="col-3" img=""><img src="assets/img/Leroy%20Namarika%27s%20Toyota%20Axio%20car%20photo%20-%201682336148.jpg"></div>
                <div class="col-2">
                    <div class="py-1"><span>Car Brand</span>
                        <h4>Toyota</h4>
                    </div>
                    <div class="py-1"><span>Model</span>
                        <h4>Axio</h4>
                    </div>
                    <div class="py-1"><span>Number Plate</span>
                        <h4>BU 1234</h4>
                    </div>
                </div>
                <div class="col-3">
                    <div class="py-1"><span>Owner Name</span>
                        <h4>Leroy Namarika</h4>
                    </div>
                    <div class="py-1"><span>Phone Number</span>
                        <h4>099123432</h4>
                    </div>
                    <div class="py-1"><span>Email</span>
                        <h4>leroy@gmail.com</h4>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center"><a class="btn btn-success" role="button">It is Entering</a><a class="btn btn-warning" role="button">It is Exiting</a></div>
            </div>
        </div>
    </div>
    <footer></footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/table.js"></script>
</body>

</html>