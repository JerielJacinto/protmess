<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogModel;
use App\settingsModel;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = blogModel::select(
            'title',
            'author',
            'categories',
            'tags',
            'image_thumbnail',
            'excerpt',
            'updated_at',
            'slug'
            )
        ->where([
            ['isactive', '=', 'yes'],
            // ['limit_view', '=', 'actual_view'],
        ])
        ->get();
        return view('blog.blog-home')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $articles = blogModel::select(
            'title',
            'author',
            'content',
            'categories',
            'tags',
            'slug',
            'image_post',
            'updated_at',
            'seo_title',
            'seo_description',
            'seo_tags'
            )
        ->where([
            ['isactive', '=', 'yes'],
            ['slug', '=', $slug],
            // ['limit_view', '=', 'actual_view'],
        ])
        ->get();

        if($articles->isEmpty()){
            return 'good'; 
        }
        else{
            return view('blog.article_detail')->with('articles',$articles);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public static function get_category($id){
        $categoryName = settingsModel::select(
            'key_value'
            )
        ->where([
            ['part', '=', 'blog'],
            ['key_name', '=', 'category'],
            ['id', '=', $id],
        ])
        ->get();
        foreach($categoryName as $name){
            return $name->key_value;
        }
    }
}
