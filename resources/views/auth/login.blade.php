<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')

    <div class="cont row justify-content-center">
        <div class="col-md-8 col-lg-6 p-4 shadow">
            <h1 class="text-center mb-5">Login</h1>

            <x-validation-errors class="mb-4" />
            
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label class="form-label text-capitalize" for="email">Your Email</label>
                <input class="form-control mb-3" type="text" id="email" name="email" placeholder="enter your email address" required="" required autofocus>
                <label class="form-label text-capitalize" for="password">Password</label>
                <input class="form-control mb-3" type="password" id="password" name="password" placeholder="enter your password" required="">
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <div class="text-center">
                    <button class="btn btn-primary text-capitalize" style="backgroundcolor: var(--color-main);" type="submit">login</button>
                </div>
            </form>

        </div>
    </div>
    
    @include('user.footer')
</body>

</html>