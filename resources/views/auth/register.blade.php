@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow">
            <div class="card-header text-center">
                <h4>Register</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mt-4" class="form-group">
                        <x-input-label for="username" :value="__('Username')" />
                        <x-text-input id="username" class="block mt-1 w-full form-control"
                            type="text"
                            name="username"
                            :value="old('username')"
                            required />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>


                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="timezone" :value="__('Timezone')" />
                        <select name="timezone" class="form-control block mt-1 w-full border-gray-300 rounded-md">
                            <option value="Asia/Kolkata">Asia/Kolkata</option>
                            <option value="UTC">UTC</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="currency" :value="__('Currency')" />
                        <select name="currency" class="form-control block mt-1 w-full border-gray-300 rounded-md">
                            <option value="INR">INR</option>
                            <option value="USD">USD</option>
                        </select>
                    </div>


                    <div class="mt-4">
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        <x-input-error :messages="$errors->get('g-recaptcha-response')" class="mt-2" />
                    </div>

                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

                    

                    <button class="btn btn-success btn-block">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
