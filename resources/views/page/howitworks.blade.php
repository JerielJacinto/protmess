@extends('layout.master-layout-1')

@section('page-title')
How it works - 
@endsection


@section('additional-meta')
<meta name="robots" content="index" />

<!-- fb image -->
<meta property="og:image" content="https://protectedmessage.com/images/how-it-works-fb.png">

<!-- Twitter image -->
<meta name="twitter:image" content="https://protectedmessage.com/images/how-it-works-fb.png">
@endsection

@section('body-content')
<section class="bg-half-title bg-image-abstract d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> How it works </h4>
                    
                </div>
            </div>  <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->

<section class="section bg-light border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 order-md-1" style="text-align:center">
                <img src="images/hiw-step-1.png" class="img-fluid resposive" style="width:400px" alt="">
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-md-2">
                <div class="section-title ml-lg-5">
                    <h1 class="title mb-4">Encrypt your message with options</h1>
                    <p class="text-muted">Protect your message by encrypting it before sending via email or chat, and have the privilege to <strong>burn it anytime</strong> like it’s never existed. Add a secret code to increase the protection, however, only you and the receiver will have the code.<br>Here are the options:</p>
                    <ul class="list-unstyled feature-list text-muted">
                        <li><i data-feather="check-circle" class="mdi mdi-checkbox-marked-circle text-success mdi-18px h5 mr-2"></i>Message lifespan from 1 hour up to 14 days, if you are registered</li>
                        <li><i data-feather="check-circle" class="mdi mdi-checkbox-marked-circle text-success mdi-18px h5 mr-2"></i>Secret code for additional protection</li>
                        <li><i data-feather="check-circle" class="mdi mdi-checkbox-marked-circle text-success mdi-18px h5 mr-2"></i>send it directly via email</li>
                    </ul>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                <div class="section-title ml-lg-5">
                    <h1 class="title mb-4">Copy the link</h1>
                    <p class="text-muted">Get the <strong>one-time</strong> link and share it only to the right person confidentially.</p>
                    <button class="btn btn-primary" onclick="window.location='/'">Try it now</button>
                </div>
            </div><!--end col-->


            <div class="col-lg-6 col-md-6 order-1 order-md-2" style="text-align:center">
                <img src="images/hiw-step-2.png" class="img-fluid resposive" style="width:400px" alt="">
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->



    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 order-md-1" style="text-align:center">
                <img src="images/hiw-step-3.png" class="img-fluid resposive" style="width:400px" alt="">
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-md-2">
                <div class="section-title ml-lg-5">
                    <h1 class="title mb-4">Send to anyone, anywhere, <strong>with protection</strong></h1>
                    <p class="text-muted">It’s now safe to send your confidential and important message/s via email or chat without the worries.</p>
                    <button class="btn btn-primary" onclick="window.location='/'">Try it now</button>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

</section><!--end section-->

@endsection
