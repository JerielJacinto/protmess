
@extends('layout.master-layout-1')

@section('page-title')
Contact Us - 
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
                    <h4 class="title"> Contact Us </h4>
                    
                </div>
            </div>  <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->

        
        <!-- Hero Start -->
<section class="bg-light d-table w-100"  id="home">
	<div class="container mt-100 mt-60 bg-light">
	    <div class="row align-items-center">
	        <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
	            <div class="card shadow rounded border-0">
	                <div class="card-body py-5">
	                    <h4 class="card-title">Get In Touch !</h4>

	                    @if(Session::has('success'))
						   <div class="alert alert-success">
						     {{ Session::get('success') }}
						   </div>
						@endif

	                    <div class="custom-form mt-4">
	                        <div id="message">
	                        </div>
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group position-relative">
	                                        <label>Your Name <span class="text-danger">*</span></label>
	                                        <i data-feather="user" class="fea icon-sm icons"></i>
	                                        <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
	                                    </div>
	                                </div><!--end col-->
	                                <div class="col-md-6">
	                                    <div class="form-group position-relative">
	                                        <label>Your Email <span class="text-danger">*</span></label>
	                                        <i data-feather="mail" class="fea icon-sm icons"></i>
	                                        <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
	                                    </div> 
	                                </div><!--end col-->
	                                <div class="col-md-12">
	                                    <div class="form-group position-relative">
	                                        <label>Subject</label>
	                                        <i data-feather="book" class="fea icon-sm icons"></i>
	                                        <input name="subject" id="subject" type="text" class="form-control pl-5" placeholder="Subject">
	                                    </div>                                                                               
	                                </div><!--end col-->
	                                <div class="col-md-12">
	                                    <div class="form-group position-relative">
	                                        <label>Comments</label>
	                                        <i data-feather="message-circle" class="fea icon-sm icons"></i>
	                                        <textarea name="message" id="message" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
	                                    </div>
	                                </div>
	                            </div><!--end row-->

	                            <div class="alert alert-success" id="notif" style="display:none">
								     {{ Session::get('success') }}
								   </div>

	                            <div class="row">
	                                <div class="col-sm-12 text-center">
	                                    <button onclick="contactformsend()" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="">Send Message</button>
	                                    <div id="simple-msg"></div>
	                                </div><!--end col-->
	                            </div><!--end row-->
	                    </div><!--end custom-form-->
	                </div>
	            </div>
	        </div><!--end col-->

	        <div class="col-lg-7 col-md-6 order-1 order-md-2">
	            <div class="card border-0">
	                <div class="card-body p-0">
	                    <img src="images/contact.png" class="img-fluid" alt="">
	                </div>
	            </div>
	        </div><!--end col-->

	    </div><!--end row-->
	</div><!--end container-->
</section><!--end setion-->

@endsection


@section('additional-footer-link')

@endsection