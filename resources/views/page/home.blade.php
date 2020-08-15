@extends('layout.master-layout-1')

@section('page-title')
Share your sensitive information via email and chat with encryption.
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
        <section class="bg-half-105 bg-light d-table w-100 border-bottom" id="home">
        	<div class="container">
                <div class="row">
                    @if (Auth::user()['verified'] == 'no')
                    <div class="alert alert-outline-info alert-dismissible fade show col-md-6" role="alert" id="passcodeerr" style=" margin: 20px AUTO; padding-bottom:5px">
                    Please verify your email address to complete the registration and to use the additional features.
                    <a href="/verifyResend">Resend?</a></div>
                    @endif
                    <div class="col-lg-12 col-md-12 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    	<div class="p-4 rounded feature-form border ml-lg-5" style="background-color:#ffffff;">
                            <div class="content">
                                <form id="createProtectMessageForm">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group position-relative">
                                                <label>Your Message starts here<span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="message" name="message" rows="50" cols="50" style="height:225px !important;" required></textarea>
                                                </div>
                                        </div><!--end col-->
                                        <div class="col-lg-5">
                                    		<div class="form-group position-relative">

                                        		<label>Lifespan<span class="text-danger">*</span></label>
                                                <select class="form-control" name="lifespan" id="lifespan">
                                                    @guest
                                                    @else
                                                        @if (Auth::user()['verified'] == 'no')
                                                        @else
                                                    	<option value="14d">14 Days</option>
                                                        <option value="10d">10 Days</option>
                                                        @endif
                                                        @endguest
                                                	<option value="7d" selected="selected">7 Days</option>
                                                	<option value="3d">3 Days</option>
                                                	<option value="1d">1 Days</option>
                                                	<option value="12h">12 Hours</option>
                                                	<option value="5h">5 Hours</option>
                                                	<option value="2h">2 Hours</option>
                                                	<option value="1h">1 Hours</option>
                                                </select>
                                            </div>

                                    		<div class="form-group position-relative">
                                                <label>Secret Code :</label>
                                                <input type="text" class="form-control" placeholder="Protect more with Passphrase (Optional)" name="secret-code" id="secret-code">
                                            </div>
                                            @guest
                                    		<div class="form-group position-relative" data-toggle="tooltip" data-placement="top" title="" data-original-title="login to use this feature">
                                                <label>Recipient Address : </label>
                                                <input type="email" class="form-control" placeholder="Email (Optional)" name="email-recipient" id="email-recipient" readonly="readonly">
                                            </div>
                                            @else
                                            @if (Auth::user()['verified'] == 'no')
                                            <div class="form-group position-relative" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verify your email to use this feature">
                                                <label>Recipient Address : </label>
                                                <input type="email" class="form-control" placeholder="Email (Optional)" name="email-recipient" id="email-recipient" readonly="readonly">
                                            </div>
                                            @else
                                            <div class="form-group position-relative">
                                                <label>Recipient Address : </label>
                                                <input type="email" class="form-control" placeholder="Email (Optional)" name="email-recipient" id="email-recipient">
                                            </div>
                                            @endif
                                            @endguest
                                        </div><!--end col-->
                                        <div class="col-lg-12 mt-2 mb-0" >
                                            <button class="btn btn-primary w-100" onclick="createProtectMessage()">Create a protected link</button>
                                        </div><!--end col-->

                                    </div>


                                </form>                                    
                            </div>
                        </div>
                    </div><!--end col-->

                </div><!--end row-->
            </div><!--end container-->
        </section>


<!-- Feature Start -->
        <section class="section border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="features mt-5">
                            <div class="image position-relative d-inline-block">
                                <img src="images/encrypted.png" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4 col-md-12">
                                <h4 class="title-2">Protected with Encryption</h4>
                                <p class="text-muted mb-0">We ensured your message will be completely protected by encryption inside our network before your message was displayed or burned. </p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="images/easy-to-use.png" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4 col-md-12">
                                <h4 class="title-2">Easy To Use</h4>
                                <p class="text-muted mb-0">Send and receive a secret messages, and monitor them when you're signed.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="images/platform-support.png" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4 col-md-12">
                                <h4 class="title-2">All Platform Supported</h4>
                                <p class="text-muted mb-0">Protected Message is browser-based and works for all platforms. It doesn’t matter if you use Mac, Windows or Linux.</p>
                            </div>
                        </div>
                    </div><!--end col-->


                </div><!--end row-->
            </div><!--end container-->

        </section><!--end section-->

<!-- counter -->
        <section class="section-two border-bottom">
            <div class="container">
                <div class="row" id="counter">
                    <div class="col-md-4 col-sm-12">
                        <div class="counter-box text-center">
                            <img src="{{URL::TO('/')}}/images/mail.png" style="width:100px">
                            <h2 class="mb-0 mt-3"><span class="counter-value" data-count="45000">1000</span>+</h2>
                            <h5 class="counter-head text-muted">Active Encrypted Message</h5>
                        </div><!--end counter box-->
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="counter-box text-center">
                            <img src="{{URL::TO('/')}}/images/account.png" style="width:100px">
                            <h2 class="mb-0 mt-3"><span class="counter-value" data-count="99">1</span>+</h2>
                            <h5 class="counter-head text-muted">Happy Members</h5>
                        </div><!--end counter box-->
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <div class="counter-box text-center">
                        <img src="{{URL::TO('/')}}/images/fire.png" style="width:100px">
                            <h2 class="mb-0 mt-3"><span class="counter-value" data-count="48000">12050</span>+</h2>
                            <h5 class="counter-head text-muted">Burned Messages</h5>
                        </div><!--end counter box-->
                    </div>
                </div><!--end row-->
            </div><!--end container-->

        </section><!--end section-->


        <!-- FAQ n Contact Start -->
        <section class="section bg-light border-bottom">
            <div class="container">
                

                <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-5 mt-sm-0 pt-sm-0 justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title mb-4">Have Question ? Get in touch!</h4>
                            <p class="text-muted para-desc mx-auto">If you have any questions or simply want to get in touch, please don't hesitate to send us a message.</p>
                            <a href="/contactus" class="btn btn-primary mt-4"><i class="mdi mdi-phone"></i> Contact us</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <!-- FAQ n Contact End -->

<div id="sendingModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

<img src="{{URL::TO('/')}}/images/email-sending.png"><br><br>
<p style="
    line-height: 20px;
    text-align: center;
    font-size: 23px;
    color: #ffffff;
">Sending message...</p>
  </div>
</div>

@endsection


@section('additional-footer-link')

@endsection