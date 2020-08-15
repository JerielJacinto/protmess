@extends('layout.master-layout-1')

@section('page-title')
Login - Protected Message
@endsection

@section('additional-meta')
<meta name="robots" content="index" />

<!-- fb image -->
<meta property="og:image" content="https://protectedmessage.com/images/how-it-works-fb.png">

<!-- Twitter image -->
<meta name="twitter:image" content="https://protectedmessage.com/images/how-it-works-fb.png">
@endsection

@section('body-content')

<!-- Hero Start -->
        <section class="d-flex section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="login_page bg-light shadow rounded p-4">
                            <div class="text-center">
                                <h4 class="mb-4">Sign In</h4>  
                            </div>
                            <form method="POST" action="{{ route('login') }}" class="login-form">
                                @csrf
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <i class="mdi mdi-account ml-3 icons"></i>
                                            <input id="email" type="email" placeholder="email" class="form-control pl-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                            <input id="password" type="password" placeholder="Password" class="form-control pl-5 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <p class="float-right forgot-pass"><a href="{{ route('password.request') }}" style class="text-dark font-weight-bold">Forgot password ?</a></p>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox" style="position:absolute">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary w-100">Sign In</button>
                                    </div>
                                    
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="/register" class="text-dark font-weight-bold">Register</a></p>
                                    </div>
                                    <div class="fb-login-button col-md-12" data-size="large" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false" data-width="100%"></div>
                                    
                                </div>
                            </form>
                        </div>
                    </div> <!--end col-->


                    <div class="col-lg-7 col-md-6">
                        <div class="mr-lg-5">   
                            <img src="{{URL::TO('/')}}/images/login.png" class="img-fluid d-block mx-auto" alt="">
                        </div>
                    </div>


                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

@endsection


@section('additional-footer-link')

@endsection