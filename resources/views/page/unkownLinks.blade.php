@extends('layout.master-layout-1')

@section('page-title')
Unkown Message
@endsection

@section('additional-meta')
<meta name="robots" content="noindex" />

<!-- fb image -->
<meta property="og:image" content="https://protectedmessage.com/images/ProtectedMessage_logo_sm.png">

<!-- Twitter image -->
<meta name="twitter:image" content="https://protectedmessage.com/images/ProtectedMessage_logo_sm.png">
@endsection

@section('body-content')        
<!-- How It Work Start -->
<section class="section bg-light border-bottom top-sm single-section">
    
    <div class="container">
        <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-5 mt-sm-0 pt-sm-0 justify-content-center">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h4 class="title mb-4">Unkown Message</h4>
                    <p class="text-muted para-desc mx-auto">Either it never happened, or it has already been shown.</p>
                    <a href="/" class="btn btn-primary mt-4">Send and Share a message</a>
                </div>
            </div><!--end col-->

        </div><!--end row-->

    </div><!--end container-->
</section><!--end section-->
<!-- How It Work End -->

@endsection


@section('additional-footer-link')

@endsection