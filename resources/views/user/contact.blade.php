<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div id="page_header" class="page_header" style="background: url({{asset('assets/img/titlebar-1.jpg')}}) center / cover no-repeat;">
        <div class="cont text-center text-white" style="background: rgba(0,0,0,0.5);">
            <h1 class="text-capitalize">contact us</h1>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item">
                    <a href="home.html">
                    <span>Home</span>
                </a>
                </li>
                <li class="breadcrumb-item active">
                    <span class="text-capitalize">contact us</span>
                </li>
            </ol>
        </div>
    </div>
    <div class="row py-5 px-2 px-md-3 px-lg-5">
        <div class="col-md-6 py-3">
            <span>CONTACT DETAILS</span>
            <h1 class="fw-bold">Contact us</h1>
            <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
        </div>
        <div class="col-md-6 py-3">
            <form class="p-4" method="post" action="{{url('post_message')}}">
                @csrf
                @include('user.message_N_error')
                <h1 class="fw-bold">Send us a message below</h1>
                <p>Your email address will not be published. Required fields are marked *</p>
                <input class="form-control mb-4" type="text" name="fname" placeholder="Your First Name *" required="">
                <input class="form-control mb-4" type="text" name="lname" placeholder="Your Last Name *" required="">
                <input class="form-control mb-4" type="text" name="phone" placeholder="Your Phone *" required="">
                <input class="form-control mb-4" type="email" name="email" placeholder="Your Email *" required="">
                <textarea class="form-control mb-4" name="message" placeholder="Message" style="height: 40vh;"></textarea>
                <div class="p-2 text-center">
                    <button class="btn btn-primary text-uppercase" type="submit" style="background: var(--color-main);">send message</button>
                </div>
            </form>
        </div>
        <div class="col-12 py-5">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1919.5153798558165!2d35.03287903844589!3d-15.80233201536729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18d8458b6868efb1%3A0xb9e2e3443ac90553!2sChichiri%20Shopping%20Mall%2C%20Kamuzu%20Hwy%2C%20Blantyre!5e0!3m2!1sen!2smw!4v1682193231175!5m2!1sen!2smw" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                >
            </iframe>
        </div>
    </div>
    @include('user.footer')
</body>

</html>