@extends('layout.master-layout-1')

@section('page-title')
Recover Account - Protected Message
@endsection

@section('body-content')
<!-- Hero Start -->
<section class="cover-user bg-white">
    <div class="container-fluid">
        <div class="row position-relative">
            <div class="col-lg-4 cover-my-30 order-2">
                <div class="cover-user-img d-flex align-items-center">
                    <div class="row">
                        <div class="col-12">
                            <div class="login_page position-relative" style="z-index: 1">
                                <div class="text-center">
                                    <h4 class="mb-4">Recover Account</h4>  
                                </div>
                                <form class="login-form" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="text-muted">Please enter your email address. You will receive a link to create a new password via email.</p>
                                            <div class="form-group position-relative">
                                                <label>Email address <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-account ml-3 icons"></i>
                                                <input  id="email" type="email" class="form-control pl-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocusrequired="" placeholder="example@domain.com">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary w-100">Send</button>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div> <!-- end about detail -->
            </div> <!-- end col -->    

            <div class="col-lg-8 offset-lg-4 padding-less img order-1"  data-jarallax='{"speed": 0.5}'>
                <div class="mr-lg-5">   
                    <img src="{{URL::TO('/')}}/images/recover_password_bg.jpg" class="img-fluid d-block mx-auto" alt="">
                </div>
            </div><!-- end col -->    
        </div><!--end row-->
    </div><!--end container fluid-->
</section><!--end section-->
<!-- Hero End -->




@endsection


@section('additional-footer-link')

@endsection