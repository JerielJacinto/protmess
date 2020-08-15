
<?php
use App\Http\Controllers\blogController;
?>
@extends('layout.blog-layout')

@section('page-title')
Share your sensitive information via email and chat with encryption.
@endsection


@section('additional-meta')
<meta name="robots" content="index" />

<meta name="description" content="Protect your message by encrypting it before sending via email or chat, and have the privilege to burn it anytime like it’s never existed. Add a secret code to increase the protection, however, only you and the receiver will have the code.">

<meta name="keywords" content="Protected Message, Encrypted Message, password, message sharing, safe, sending information, secured sharing, Free online tool site">

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

<!-- Blog Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <!-- BLog Start -->
                    <div class="col-lg-12 col-md-12">
                        <div class="row">

                            @foreach ($articles as $article)
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 pb-2">
                                    <div class="card blog rounded border-0 shadow">
                                        <div class="position-relative">
                                            <img src="{{ $article->image_thumbnail }}" class="card-img-top rounded-top" alt="...">
                                        <div class="overlay rounded-top bg-dark"></div>
                                        </div>
                                        <div class="card-body content">
                                            <a href="javascript:void(0)" class="badge badge-success">{{ucwords(blogController::get_category($article->categories))}}</a>
                                            <h5><a href="/blog/{{ $article->slug }}" class="card-title title text-dark">{{ $article->title }}</a></h5>
                                            <div class="excerpt">{{ $article->excerpt }}</div>
                                            <div class="post-meta d-flex justify-content-between mt-3">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>0</a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>0</a></li>
                                                </ul>
                                                <a href="/blog/{{ $article->slug }}" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <!-- <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small> -->
                                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i>{{date_format($article->updated_at,"jS F Y")}}</small>
                                        </div>
                                    </div>
                                </div><!--end col-->

                            @endforeach                                                  
                           
        
                            <!-- PAGINATION START -->
                            <!-- <div class="col-12">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                                </ul>
                            </div> --><!--end col-->
                            <!-- PAGINATION END -->

                        </div><!--end row-->
                    </div><!--end col-->
                    <!-- BLog End -->

                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->


@endsection


@section('additional-footer-link')

@endsection