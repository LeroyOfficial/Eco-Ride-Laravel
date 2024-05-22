<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div class="py-5 px-2 px-md-3 px-lg-5 d-flex flex-column justify-content-center align-items-center text-center" div="" style="min-height: 80vh;">
        <div id="start">
            <h1 class="text-capitalize mb-4">It seems that you havent finished setting up your account</h1>
            <button class="btn btn-primary rounded-pill" id="set_up_btn" type="button" style="background: var(--color-main);">Click Here To finish setting up your account</button>
        </div>
        <div id="details" class="py-4" style="display: none;">
            <form method="get" action="{{url('post_set_account')}}">
                @csrf
                <div style="display: none;">
                    <input class="form-control visually-hidden" type="text" id="plan_type" name="plan_type" required="">
                    <input class="form-control visually-hidden" type="text" id="payment_option" name="payment_option" required="">
                    <input class="form-control visually-hidden" type="text" id="payment_amount" name="payment_amount" required="">
                </div>
                <div class="py-2">
                    <h4>all you have to do is to choose a plan and pay.. and your account is ready</h4>
                </div>
                <div id="plan_list" class="py-3 row">
                    <div id="weekly" class="col-lg-3 col-sm-6 py-4">
                        <div class="shadow p-2">
                            <div class="py-1">
                                <h3>Weekly Plan</h3>
                                <h4>
                                    <span>K</span>
                                    <span class="amount">7000</span>
                                </h4>
                            </div>
                            <div class="text-center py-1">
                                <button class="btn rounded-pill border border-success" type="button">Select</button>
                            </div>
                        </div>
                    </div>
                    <div id="monthly" class="col-lg-3 col-sm-6 py-4">
                        <div class="shadow p-2">
                            <div class="py-1">
                                <h3>Monthly Plan</h3>
                                <h4>
                                    <span>K</span>
                                    <span class="amount">20000</span>
                                </h4>
                            </div>
                            <div class="text-center py-1">
                                <button class="btn rounded-pill border border-success" type="button">Select</button>
                            </div>
                        </div>
                    </div>
                    <div id="six_months" class="col-lg-3 col-sm-6 py-4">
                        <div class="shadow p-2">
                            <div class="py-1">
                                <h3>6 Months Plan</h3>
                                <h4>
                                    <span>K</span>
                                    <span class="amount">120000</span>
                                </h4>
                            </div>
                            <div class="text-center py-1">
                                <button class="btn rounded-pill border border-success" type="button">Select</button>
                            </div>
                        </div>
                    </div>
                    <div id="annual" class="col-lg-3 col-sm-6 py-4">
                        <div class="shadow p-2">
                            <div class="py-1">
                                <h3>Annual Plan</h3>
                                <h4>
                                    <span>K</span>
                                    <span class="amount">240000</span>
                                </h4>
                            </div>
                            <div class="text-center py-1">
                                <button class="btn rounded-pill border border-success" type="button">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <h4>now select a payment method you want to pay with</h4>
                    <div id="payments" class="row py-3 justify-content-center">
                        <div id="airtel_money" class="col-lg-3 col-md-6 p-3">
                            <div class="p-3 shadow" style="cursor: pointer;">
                                <div>
                                    <img src="{{asset('assets/img/Money-Logo_001.jpg')}}" style="height: 200px;width: 100%;">
                                </div>
                                <div class="py-2 pay_details" style="display: none;">
                                    <p>send <span class="amount">##</span>&nbsp;to 0991252123 then enter your transID below</p>
                                    <input class="form-control" type="text" placeholder="Enter TransID">
                                </div>
                            </div>
                        </div>
                        <div id="tnm_mpamba" class="col-lg-3 col-md-6 p-3">
                            <div class="p-3 shadow" style="cursor: pointer;">
                                <div>
                                    <img class="p-1" src="{{asset('assets/img/Mpamba-Logo-2.22297a9f.svg')}}" style="background: var(--color-main);height: 200px;width: 100%;">
                                </div>
                                <div class="py-2 pay_details" style="display: none;">
                                    <p>send <span class="amount">##</span>&nbsp;to 0881492617 then enter your transID below</p>
                                    <input class="form-control" type="text" placeholder="Enter TransID">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-1">
                        <button class="btn btn-primary rounded-pill" type="submit" style="background: var(--color-main);">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('user.footer')
    <script src="{{asset('assets/js/set_up_profile.js')}}">
    </script>
</body>

</html>