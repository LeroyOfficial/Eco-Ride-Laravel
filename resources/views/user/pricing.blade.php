<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')
    <div id="page_header" class="page_header" style="background: url(&quot;assets/img/titlebar-1.jpg&quot;) center / cover no-repeat;">
        <div class="cont text-center text-white" style="background: rgba(0,0,0,0.5);">
            <h1 class="text-capitalize">pricing</h1>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="home.html"><span>Home</span></a></li>
                <li class="breadcrumb-item active"><span class="text-capitalize" pricing="">Parking</span></li>
            </ol>
        </div>
    </div>
    @include('user.footer')
</body>

</html>