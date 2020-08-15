@extends('layout.master-layout-1')

@section('page-title')
Register - Protected Message
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
                                <h4 class="mb-4">Register</h4>  
                            </div>
                            <form method="POST" action="{{ route('register') }}" class="login-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">                                               
                                            <label>Full name <span class="text-danger">*</span></label>
                                            <i class="mdi mdi-account ml-3 icons"></i>
                                            <input id="name" type="text" placeholder="Full name" class="form-control pl-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <i class="mdi mdi-account ml-3 icons"></i>
                                            <input id="email" type="email" placeholder="Email" class="form-control pl-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Confirm Password <span class="text-danger">*</span></label>
                                            <i class="mdi mdi-key ml-3 icons"></i>
                                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control pl-5" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary w-100">Register</button>
                                    </div>
                                    
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="\login" class="text-dark font-weight-bold">Sign in</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!--end col-->


                    <div class="col-lg-7 col-md-6">
                        <div class="mr-lg-5">   
                            <img src="{{URL::TO('/')}}/images/signup.png" class="img-fluid d-block mx-auto" alt="">
                        </div>
                    </div>


                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

@endsection


@section('additional-footer-link')

@endsection