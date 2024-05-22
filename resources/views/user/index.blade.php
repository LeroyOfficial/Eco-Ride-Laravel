<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div id="hero" class="hero" min="">
        <div id="hero_top" style="background: url({{asset('assets/img/smiling-woman-opening-door-car-getting-ready-portrait-young-lady-standing-near-55062189_2.jpg')}}) center / cover no-repeat;">
            <div class="hero_top cont row justify-content-center align-items-center" style="background: rgba(0,0,0,0.5);">
                <div class="col-md-10 text-white">
                    <h1 class="fw-bold text-capitalize">find amazing parking space near you</h1>
                    <p>fhdhd fhd h f h hd hfd dh hfd h hfh h d hf hd fh</p><a class="btn btn-primary" role="button" style="background: var(--color-main);" href="{{url('client/parking')}}">Show Parking Spaces</a>
                </div>
            </div>
        </div>
    </div>
    <div id="why_choose_us" class="cont">
        <div class="text-capitalize text-center py-4"><span class="subheader">why choose us</span>
            <h1 class="header">parking made easy</h1>
        </div>
        <div class="row justify-content-center py-4">
            <div class="col-lg-4 col-md-6 py-3">
                <div class="p-4 border shadow">
                    <div><img class="mb-2" src="{{asset('assets/img/man-using-mobile-phone-while-driving_158595-4201.jpg')}}" style="min-height: 200px;width: 100%;"></div>
                    <div>
                        <h5 class="text-capitalize fw-bold">pre book your space</h5>
                        <p>Paragraph</p><a class="fw-bold text-capitalize" href="{{url('client/parking')}}" style="color: var(--color-main);">get started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 py-3">
                <div class="p-4 border shadow">
                    <div><img class="mb-2" src="{{asset('assets/img/outdoor-parking-lot-car-park-rows-autos-urban-landscape-aerial-top-view-outdoor-parking-lot-car-park-rows-129448044.jpg')}}" style="min-height: 200px;width: 100%;"></div>
                    <div>
                        <h5 class="text-capitalize fw-bold">quick & easy parking</h5>
                        <p>Paragraph</p><a class="fw-bold text-capitalize" href="{{url('client/parking')}}" style="color: var(--color-main);">get started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 py-3">
                <div class="p-4 border shadow">
                    <div><img class="mb-2" src="{{asset('assets/img/close-up-smiling-young-businesswoman-driving-car_23-2147943871.jpg')}}" style="min-height: 200px;width: 100%;"></div>
                    <div>
                        <h5 class="text-capitalize fw-bold">safe & secure</h5>
                        <p>Paragraph</p><a class="fw-bold text-capitalize" href="{{url('client/parking')}}" style="color: var(--color-main);">get started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5 px-5 px-md-0 justify-content-center justify-content-md-end" style="background: url({{asset('assets/img/horizontal-picture-car-parking-underground-garage-interior-with-neon-lights-autocars-parked-buildings-urban-constructions-space-transportation-vehicle-night-city-concept_343059-3077.jpg')}}) center / cover no-repeat;">
        <div class="col-lg-8 col-md-10 p-4 text-white" style="background: var(--color-main);">
            <h1 class="fw-bold text-capitalize">why choose ecoride</h1>
            <p>Paragraph</p>
            <div class="row justify-content-center p-4 ps-0">
                <div class="col-md-6 py-3" ico=""><i class="fas fa-home fs-2"></i>
                    <h5 class="fw-bold text-capitalize">stress free booking</h5>
                    <p>Paragraph</p>
                </div>
                <div class="col-md-6 py-3" ico=""><i class="far fa-clock fs-2"></i>
                    <h5 class="fw-bold text-capitalize">24 hr services</h5>
                    <p>Paragraph</p>
                </div>
                <div class="col-md-6 py-3" ico=""><i class="far fa-money-bill-alt fs-2"></i>
                    <h5 class="fw-bold text-capitalize">save money & time</h5>
                    <p>Paragraph</p>
                </div>
                <div class="col-md-6 py-3" ico=""><i class="fas fa-user-clock fs-2"></i>
                    <h5 class="fw-bold text-capitalize">best parking management</h5>
                    <p>Paragraph</p>
                </div>
            </div>
        </div>
    </div>
    <div class="cont">
        <div class="text-center"><span class="subheader">our Presence</span>
            <h1 class="header">area we serving</h1>
        </div>
        <div class="row justify-content-center py-4">
            <div class="col-lg-4 col-md-6 py-3">
                <div>
                    <div><img src="{{asset('assets/img/corporate-business-people-meeting-boardroom-african-manager-brainstorming-with-colleagues-discussing-strategy-sharing-problem-solving-ideas-collaborating-conference-room-company_482257-13747.jpg')}}" style="min-height: 200px;width: 100%;"></div>
                    <div class="p-3">
                        <h4 class="fw-bold text-capitalize mb-4">commercial property</h4><a class="text-capitalize py-2 px-3 rounded-pill fs-6" href="{{url('client/parking')}}" style="border-width: 2px;border-style: solid;color: var(--color-main);">get started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 py-3">
                <div>
                    <div><img src="{{asset('assets/img/team-business-people-collaborating-plan-financial-strategy-doing-teamwork-create-sales-report-laptop-office-employees-working-project-strategy-analyze-career-growth_482257-39530.jpg')}}" style="min-height: 200px;width: 100%;"></div>
                    <div class="p-3">
                        <h4 class="fw-bold text-capitalize mb-4">Hotels & Hospitality</h4><a class="text-capitalize py-2 px-3 rounded-pill fs-6" href="{{url('client/parking')}}" style="border-width: 2px;border-style: solid;color: var(--color-main);">get started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 py-3">
                <div>
                    <div><img src="{{asset('assets/img/businesswoman-with-smartphone-boardroom_232070-17920.jpg')}}" style="width: 100%;min-height: 200px;"></div>
                    <div class="p-3">
                        <h4 class="fw-bold text-capitalize mb-4">operators & enforcers</h4><a class="text-capitalize py-2 px-3 rounded-pill fs-6" href="{{url('client/parking')}}" style="border-width: 2px;border-style: solid;color: var(--color-main);">get started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-4 col-md-6 p-4"><i class="fas fa-laptop fs-1 mb-3" style="color: var(--color-main);"></i>
                <h4 class="text-capitalize fw-bold">search spaces</h4>
                <p>Paragraph</p><a class="btn btn-light border text-capitalize d-none" role="button" href="{{url('/client/parking')}}">get started</a>
            </div>
            <div class="col-lg-4 col-md-6 p-4"><i class="far fa-calendar-alt fs-1 mb-3" style="color: var(--color-second);"></i>
                <h4 class="text-capitalize fw-bold">book spaces</h4>
                <p>Paragraph</p><a class="btn btn-light border text-capitalize d-none" role="button" href="{{url('/client/parking')}}">get started</a>
            </div>
            <div class="col-lg-4 col-md-6 p-4"><i class="fas fa-warehouse fs-1 mb-3" style="color: var(--color-main);"></i>
                <h4 class="text-capitalize fw-bold">arrrive & park</h4>
                <p>Paragraph</p><a class="btn btn-light border text-capitalize d-none" role="button" href="{{url('/client/parking')}}">get started</a>
            </div>
        </div>
    </div>
    <div class="text-white" style="background: url({{asset('assets/img/young-african-american-friends-sitting-inside-car_627829-113.jpg')}}) center / cover no-repeat;">
        <div class="cont" style="background: rgba(0,0,0,0.7);">
            <div class="text-center p-4"><span class="subheader">Available parking space</span>
                <h1 class="header" style="color: var(--color-white);">we have over 100 parking spaces</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 p-4">
                    <div class="d-flex py-2 border-bottom"><i class="fas fa-plane fs-2 me-2" style="transform: rotate(-45deg);color: var(--color-main);"></i><span class="d-flex flex-column"><span class="text-capitalize fs-5">airport parking</span><span class="fs-6" style="color: var(--color-second);">safe and secure</span></span></div>
                    <div class="py-2">
                        <p>Paragraph</p><a class="text-capitalize py-2 px-3 rounded-pill fs-6" href="{{url('/pricing')}}" style="border-width: 2px;border-style: solid;">view pricing</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-4">
                    <div class="d-flex py-2 border-bottom"><i class="fas fa-weight fs-2 me-2" style="color: var(--color-main);"></i><span class="d-flex flex-column"><span class="text-capitalize fs-5">overnight parking</span><span class="fs-6" style="color: var(--color-second);">safe and secure</span></span></div>
                    <div class="py-2">
                        <p>Paragraph</p><a class="text-capitalize py-2 px-3 rounded-pill fs-6" href="{{url('/pricing')}}" style="border-width: 2px;border-style: solid;">view pricing</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-4">
                    <div class="d-flex py-2 border-bottom"><i class="fas fa-envelope-open-text fs-2 me-2" style="color: var(--color-main);"></i><span class="d-flex flex-column"><span class="text-capitalize fs-5">events parking</span><span class="fs-6" style="color: var(--color-second);">safe and secure</span></span></div>
                    <div class="py-2">
                        <p>Paragraph</p><a class="text-capitalize py-2 px-3 rounded-pill fs-6" href="{{url('/pricing')}}" style="border-width: 2px;border-style: solid;">view pricing</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.footer')
</body>

</html>