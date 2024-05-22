<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    @include('user.nav')

    <div class="cont row justify-content-center">
        <div class="col-lg-8 p-4">
            <h1 class="text-center mb-3">Create An Account</h1>
            <x-validation-errors class="mb-4" />
            <form class="row" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="col-lg-6 py-2">
                    <label class="form-label text-capitalize" for="fname">first name *</label>
                    <input class="form-control" type="text" id="fname" name="fname" placeholder="enter your first name" required="">
                </div>
                <div class="col-lg-6 py-2">
                    <label class="form-label text-capitalize" for="lname">Last name *</label>
                    <input class="form-control" type="text" id="lname" name="lname" placeholder="enter your first name" required="">
                </div>
                <div class="col-lg-6 py-2">
                    <label class="form-label text-capitalize" for="phone">Phone Number *</label>
                    <input class="form-control" type="text" id="phone" name="phone" placeholder="enter your phone number" required="">
                </div>
                <div class="col-lg-6 py-2">
                    <label class="form-label text-capitalize" for="email">email *</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="enter your email" required="">
                </div>
                <div class="col-lg-6 py-2">
                    <label class="form-label text-capitalize" for="password">Password *</label>
                    <input class="form-control mb-3" type="password" id="password" name="password" placeholder="enter your password" required="">
                </div>
                <div class="col-lg-6 py-2">
                    <label class="form-label text-capitalize" for="password">Re Enter Password *</label>
                    <input class="form-control mb-3" type="password" id="password-1" name="password_confirmation" placeholder="renter enter your password" required="">
                </div>
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif
                <div class="col-12 text-center p-2">
                    <button class="btn btn-primary text-capitalize" type="submit" style="background: var(--color-main);">Create Account</button>
                </div>
            </form>
            
        </div>
    </div>

    @include('user.footer')
</body>

</html>
