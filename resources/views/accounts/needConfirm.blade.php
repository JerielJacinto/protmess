@extends('layout.master-layout-1')

@section('page-title')
Email Confirmation
@endsection

@section('additional-meta')
<meta name="robots" content="noindex" />

<meta name="description" content="Protect your message by encrypting it before sending via email or chat, and have the privilege to burn it anytime like it’s never existed. Add a secret code to increase the protection, however, only you and the receiver will have the code.">

<meta name="keywords" content="Protected Message, Encrypted Message">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://protectedmessage.com">
<meta property="og:type" content="website">
<meta property="og:title" content="Share your sensitive information via email and chat with encryption.">
<meta property="og:description" content="Protect your message by encrypting it before sending via email or chat, and have the privilege to burn it anytime like it’s never existed. Add a secret code to increase the protection, however, only you and the receiver will have the code.">
<meta property="og:image" content="https://protectedmessage.com/images/ProtectedMessage_logo_sm.png">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Share your sensitive information via email and chat with encryption.">
<meta name="twitter:description" content="Protect your message by encrypting it before sending via email or chat, and have the privilege to burn it anytime like it’s never existed. Add a secret code to increase the protection, however, only you and the receiver will have the code.">
<meta name="twitter:image" content="https://protectedmessage.com/images/ProtectedMessage_logo_sm.png">
@endsection

@section('body-content')
<!-- Hero Start -->
<section class="bg-half-105 bg-light d-table w-100 border-bottom full-height" id="home">

	<div class="container">
        <div class="row">
          
            <div class="col-lg-12 col-md-12 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
            	<div class="p-4 rounded feature-form border ml-lg-5" style="background-color:#ffffff;">
                    <div class="content">
                        <h5>Please  <span class="text-primary">verify your email address</span> to complete the registration and to use the additional features. <a href="/verifyResend">Resend?</a></h5>
                    </div>
                </div>
            </div><!--end col-->

        </div><!--end row-->
    </div><!--end container-->
</section>




@endsection


@section('additional-footer-link')

@endsection