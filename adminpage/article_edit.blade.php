@extends('layout.master-layout-1')

<?php
foreach($articles as $detail){
    $title = $detail->title;
    $content = $detail->content;
    $image_post = $detail->image_post;
    $slug = $detail->slug;
    $seo_title = $detail->seo_title;
    $seo_description = $detail->seo_description;
    $seo_tags = $detail->seo_tags;
    $categories = $detail->categories;
}
?>

@section('page-title')
admin page
@endsection





@section('additional-meta')
<meta name="robots" content="no-index" />
@endsection


@section('body-content')
<section style="padding:50px">
<div style="padding-top: 100px"></div>
<h2>{{$title}}</h2>
<form>
    <div>
        Title: <input name="title" id="title" type="text" class="form-control" placeholder="Title">
    </div>

    <div>
        slug: <input name="slug" id="slug" type="text" class="form-control" placeholder="slug">
    </div>

    <div>
        categories: <input name="categories" id="categories" type="text" class="form-control" placeholder="categories">
    </div>

    <div>
        image_thumbnail: <input name="image_thumbnail" id="image_thumbnail" type="text" class="form-control" placeholder="image_thumbnail">
    </div>

    <div>
        image_post: <input name="image_post" id="image_post" type="text" class="form-control" placeholder="image_post">
    </div>

    <div>
        seo_title: <input name="seo_title" id="seo_title" type="text" class="form-control" placeholder="seo_title">
    </div>

    <div>
        seo_tags: <input name="seo_tags" id="seo_tags" type="text" class="form-control" placeholder="seo_tags">
    </div>

    <div>
        seo_description: <input name="seo_description" id="seo_description" type="text" class="form-control" placeholder="seo_description">
    </div>

    <div>
        excerpt: <input name="excerpt" id="excerpt" type="text" class="form-control" placeholder="excerpt">
    </div>

    <div>
        featured_article: <input name="featured_article" id="featured_article" type="text" class="form-control" placeholder="featured_article">
    </div>

    <div>
    isactive: <input name="isactive" id="isactive" type="text" class="form-control " placeholder="isactive">
    </div>

    <div>
    content: <textarea name="content" id="content" rows="4" class="form-control" placeholder="content" spellcheck="true"></textarea>
    </div>


</form>
</section>


@endsection


@section('additional-footer-link')

@endsection