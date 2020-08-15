@extends('layout.master-layout-1')

@section('page-title')
Thank you
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
<section class="section bg-light border-bottom top-sm single-section">
<!-- ads --> 

    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title">
                    <h4 class="title mb-4">Thank you for completing the registration</h4>
                    <p class="text-muted">You can now use the additional these features</p>
                    <ul class="list-unstyled feature-list text-muted">
                        <li><i class="mdi mdi-checkbox-marked-circle text-success mdi-18px h5 mr-2"></i>Up to 14 days secret duration</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success mdi-18px h5 mr-2"></i>send the link via email</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success mdi-18px h5 mr-2"></i>Track your messages </li>
                        
                    </ul>
                    <!-- <a href="javascript:void(0)" class="mt-3 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a> -->
                </div>


                <a href="/" class="btn btn-primary w-100" >Create a message</a> 
            </div><!--end col-->

            <div class="col-lg-5 col-md-6">
                <img src="{{URL::TO('/')}}/images/thank-you.png" alt="">
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- How It Work End -->

@endsection


@section('additional-footer-link')

@endsection