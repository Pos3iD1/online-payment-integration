@extends('layouts.default')

@section('title', 'Login :: Lukas - Car Parts Store eCommerce HTML Template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login-wrap">
                    <h2>Login</h2>
                    <div class="login-form-wrap">
                        <form action="{{ route('login') }}" method="post" novalidate>
                            @csrf
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

                            <div class="checkbox-item">
                                <input type="checkbox" class="{{ $errors->has('remember') ? 'wrong-input' : '' }}" id="remember" name="remember" required />
                                <label for="remember" class="required">Remember Me</label>
                                @error('password')
                                <p class="wrong-input-text">{{ $message }}</p>
                                @enderror
                                <a href="#" class="float-right">Forgot password?</a>
                            </div>

                            <div class="input-item">
                                <button type="submit" class="btn btn-brand d-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
