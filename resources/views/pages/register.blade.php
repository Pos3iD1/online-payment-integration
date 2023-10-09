@extends('layouts.default')

@section('title', 'Register :: Lukas - Car Parts Store eCommerce HTML Template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="register-wrap">
                    <h2>Register</h2>
                    <div class="register-form-wrap">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item mt-0">
                                        <label for="first_name" class="sr-only required">First Name</label>
                                        <input type="text" class="{{ $errors->has('first_name') ? 'wrong-input' : '' }}" id="first_name" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required />
                                        @error('first_name')
                                            <p class="wrong-input-text">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-item mt-md-0">
                                        <label for="last_name" class="sr-only required">Last Name</label>
                                        <input type="text" class="{{ $errors->has('last_name') ? 'wrong-input' : '' }}" id="last_name" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required />
                                        @error('last_name')
                                        <p class="wrong-input-text">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="input-item">
                                <label for="email" class="sr-only required">Email Address</label>
                                <input type="email" class="{{ $errors->has('email') ? 'wrong-input' : '' }}" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required />
                                @error('email')
                                <p class="wrong-input-text">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="input-item">
                                <label for="password" class="sr-only required">Account Password</label>
                                <input type="password" class="{{ $errors->has('password') ? 'wrong-input' : '' }}" id="password" name="password" placeholder="Password (At Least 8 characters)" required />
                                @error('password')
                                <p class="wrong-input-text">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="input-item">
                                <label for="password_confirmation" class="sr-only required">Confirm Account Password</label>
                                <input type="password" class="{{ $errors->has('password_confirmation') ? 'wrong-input' : '' }}" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required />
                            </div>
                            @error('password_confirmation')
                            <p class="wrong-input-text">{{ $message }}</p>
                            @enderror

                            <div class="input-item">
                                <button type="submit" class="btn btn-brand d-block">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
