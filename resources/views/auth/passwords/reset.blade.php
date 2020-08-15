@extends('layout.master-layout-1')

@section('page-title')
Reset Password - Protected Message
@endsection

@section('body-content')

<!-- Hero Start -->
        <section class="d-flex section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0" style="margin: 0 auto;">
                        <div class="login_page bg-light shadow rounded p-4">
                            <div class="text-center">
                                <h4 class="mb-4">Reset Password</h4>  
                            </div>
                            <form method="POST" action="{{ route('password.update') }}" class="login-form">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <i class="mdi mdi-account ml-3 icons"></i>
                                            <input id="email" type="email" class="form-control pl-5 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <i class="mdi mdi-key ml-3 icons"></i>
                                            <input id="password" type="password" class="form-control pl-5  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Confirm Password <span class="text-danger">*</span></label>
                                            <i class="mdi mdi-key ml-3 icons"></i>   
                                            <input id="password-confirm" type="password" class="form-control pl-5" name="password_confirmation" required autocomplete="new-password">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary  w-100">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                    
                                    
                                </div>
                            </form>
                        </div>
                    </div> <!--end col-->




                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

@endsection


@section('additional-footer-link')

@endsection