@extends('layouts.login')

@section('content')

<section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <form method="POST" action="{{ route('login') }}" class="md-float-material form-material">

                        <div class="text-center">
                         </div>

                        @csrf

                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">

                                    <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required=""  autocomplete="email"  value="{{ old('email') }}" autofocus>
                                    <span class="form-bar"></span>
                                    <label class="float-label">{{ __('Email Address') }}</label>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group form-primary">
                                    <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required="" autocomplete="current-password">
                                    <span class="form-bar"></span>
                                    <label class="float-label">{{ __('Password') }}</label>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox"  class="form-check-input" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">{{ __('Remember Me') }}</span>
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                        <div class="forgot-phone text-right f-right">
                                            <a href="{{ route('password.request') }}" class="text-right f-w-600"> {{ __('Forgot Your Password?') }}</a>
                                        </div>
                                        @endif
                                    </div>
                                </div> -->
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">{{ __('Login') }}</button>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
@endsection
