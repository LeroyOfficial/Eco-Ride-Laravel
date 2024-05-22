<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div class="py-5 px-2 px-md-3 px-lg-5">
        <div class="py-4 text-center">
            <h1>Welcome, {{Auth::user()->name}}!</h1>
            <h5>so how can we help you today?</h5>
        </div>
        <div id="list" class="row py-5">
            <div id="service-1" class="col-lg-4 col-md-6 py-3">
                <div class="p-4 border shadow">
                    <div>
                        <img class="mb-2" src="{{asset('assets/img/man-using-mobile-phone-while-driving_158595-4201.jpg')}}">
                    </div>
                    <div>
                        <p>you want to book a parking space?</p>
                        <a class="fw-bold text-capitalize" href="{{url('client/parking')}}" style="color: var(--color-main);">Book your parking space</a>
                    </div>
                </div>
            </div>
            <div id="service-2" class="col-lg-4 col-md-6 py-3">
                <div class="p-4 border shadow">
                    <div>
                        <img class="mb-2" src="{{asset('assets/img/man-using-mobile-phone-while-driving_158595-4201.jpg')}}">
                    </div>
                    <div>
                        <p>you want to add or edit your car list?</p>
                        <a class="fw-bold text-capitalize" href="{{url('client/my_cars')}}" style="color: var(--color-main);">Manage your Cars</a>
                    </div>
                </div>
            </div>
            <div id="service-3" class="col-lg-4 col-md-6 py-3">
                <div class="p-4 border shadow">
                    <div>
                        <img class="mb-2" src="{{asset('assets/img/man-using-mobile-phone-while-driving_158595-4201.jpg')}}">
                    </div>
                    <div>
                        <p>you want to view your parking history?</p>
                        <a class="fw-bold text-capitalize" href="{{url('client/park_history')}}" style="color: var(--color-main);">View your History</a>
                    </div>
                </div>
            </div>
            <div id="service-4" class="col-lg-4 col-md-6 py-3">
                <div class="p-4 border shadow">
                    <div>
                        <img class="mb-2" src="{{asset('assets/img/man-using-mobile-phone-while-driving_158595-4201.jpg')}}">
                    </div>
                    <div>
                        <p>you want to manage your payments?</p>
                        <a class="fw-bold text-capitalize" href="{{url('client/my_payments')}}" style="color: var(--color-main);">Manage Payments</a>
                    </div>
                </div>
            </div>
            <div id="service-5" class="col-lg-4 col-md-6 py-3">
                <div class="p-4 border shadow">
                    <div>
                        <img class="mb-2" src="{{asset('assets/img/man-using-mobile-phone-while-driving_158595-4201.jpg')}}">
                    </div>
                    <div>
                        <p>you want to send us feednack or file a complaint?</p>
                        <a class="fw-bold text-capitalize" href="{{url('/contact')}}" style="color: var(--color-main);">Send us Feedback</a>
                    </div>
                </div>
            </div>
            <div id="service-6" class="col-lg-4 col-md-6 py-3">
                <div class="p-4 border shadow">
                    <div>
                        <img class="mb-2" src="{{asset('assets/img/man-using-mobile-phone-while-driving_158595-4201.jpg')}}">
                    </div>
                    <div>
                        <p>you want to invite your friends and get rewards?</p>
                        <a class="fw-bold text-capitalize" href="{{url('coming_soon')}}" style="color: var(--color-main);">Invite Friends</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.footer')
</body>

</html>