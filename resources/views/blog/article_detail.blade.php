@extends('layout.blog-layout')

<?php
foreach($articles as $article){
    $title = $article->title;
    $content = $article->content;
    $image_post = $article->image_post;
    $slug = $article->slug;
    $seo_title = $article->seo_title;
    $seo_description = $article->seo_description;
    $seo_tags = $article->seo_tags;
}
?>

@section('page-title')
{{$title}}
@endsection

@section('additional-meta')

<!—- ShareThis BEGIN -—>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f2ecf54f8f5b100120ea4f1&product=sticky-share-buttons" async="async"></script>
<!—- ShareThis END -—>

<meta name="robots" content="index" />

<meta name="description" content="{{$seo_description}}">

<meta name="keywords" content="{{$seo_tags}}">

 <!-- Facebook Meta Tags -->
<meta property="og:url" content="https://protectedmessage.com/blog/{{$slug}}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{$seo_title}}">
<meta property="og:description" content="{{$seo_description}}">
<meta property="og:image" content="https://protectedmessage.com/{{$image_post}}">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{$seo_title}}">
<meta name="twitter:description" content="{{$seo_description}}">
<meta name="twitter:image" content="https://protectedmessage.com/{{$image_post}}">

<meta itemprop="name" content="{{$seo_title}}">
<meta itemprop="description" content="{{$seo_description}}">
<meta itemprop="image" content="https://protectedmessage.com/{{$image_post}}">
@endsection


@section('body-content')
<section class="section">
    <div class="container">
        <div class="row">
            <!-- BLog Start -->
            <div class="col-lg-12 col-md-12">
                <div class="card blog blog-detail border-0 shadow rounded">
                    <img src="/{{$image_post}}" class="img-fluid rounded-top" alt="">
                    <div class="card-body content">
                        <h6><i class="mdi mdi-tag text-primary mr-1"></i><a href="javscript:void(0)" class="text-primary">Software</a>, <a href="javscript:void(0)" class="text-primary">Application</a></h6>
                       
                        <div class="title"><h1>{{$title}}</h1></div>

                        
                        {!! $content !!}


                        <div class="post-meta mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>0</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>0</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

           
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Blog End -->


@endsection


@section('additional-footer-link')

@endsection