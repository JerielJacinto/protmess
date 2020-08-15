@extends('layout.master-layout-1')

@section('page-title')
Message Sent - Protected Message
@endsection

@section('additional-meta')
<meta name="robots" content="noindex" />

<!-- fb image -->
<meta property="og:image" content="https://protectedmessage.com/images/how-it-works-fb.png">

<!-- Twitter image -->
<meta name="twitter:image" content="https://protectedmessage.com/images/how-it-works-fb.png">
@endsection

@section('body-content')        
<!-- How It Work Start -->
<section class="section bg-light border-bottom top-sm">
<!-- ads -->

    <div class="container">
        <div class="row">
        @foreach($data as $detail)
            <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">

                <div class="section-title">
                    <h4 class="title mb-4">The message was sent successfully to <br> <span class="text-primary">{{$detail->recipient}}.</span></h4>
                    <p class="text-muted">Stop the worry because someone is spying on your mail and burn it if you believe someone is looking for you.</p>
                    <ul class="list-unstyled feature-list text-muted">
                        <li><i class="mdi mdi-checkbox-marked-circle text-success mdi-18px h5 mr-2"></i>Bank Accounts</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success mdi-18px h5 mr-2"></i>Login Details</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success mdi-18px h5 mr-2"></i>Money involve </li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success mdi-18px h5 mr-2"></i>Places and address nd more...</li>
                        
                    </ul>
                    <!-- <a href="javascript:void(0)" class="mt-3 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a> -->
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 order-1">
                <div class="p-4 rounded bg-white feature-form border ml-lg-5">

                    <div class="content mt-4 pt-2">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                            <label>ID Code :</label>
                                           <input type="text" class="form-control" value="{{ $detail->name_code }}" name="idCode" readonly="readonly">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Expires in : </label>
                                        <input type="email" class="form-control"  value="{{ $detail->expire_date }}" name="expireDate" readonly="readonly">
                                    </div>
                                </div><!--end col-->
                                @if ($detail->pass_code != "")

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <p class="center">*This message requires a pass code</p>
                                    </div>
                                </div><!--end col-->

                                @endif

                                <div class="col-lg-12 mt-2 mb-0">
                                    <a href="{{URL::TO('/')}}/burn/{{ $detail->message_code }}" class="btn btn-danger w-100"><i class="mdi mdi-fire"></i> Burn this message <i class="mdi mdi-fire"></i></a>
                                </div><!--end col-->

                                <div class="col-lg-12 mt-2 mb-0">
                                    <a href="/" class="btn btn-primary w-100">Create another Encrypted Message</a>
                                </div><!--end col-->
                            </div>
                        </form>                                    
                    </div>
                </div>
            </div><!--end col-->
        @endforeach
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- How It Work End -->

@endsection


@section('additional-footer-link')

@endsection