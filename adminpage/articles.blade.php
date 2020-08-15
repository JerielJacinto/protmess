@extends('layout.master-layout-1')

@section('page-title')
admin page
@endsection





@section('additional-meta')
<meta name="robots" content="no-index" />
@endsection


@section('body-content')
   <!-- Table Start -->
   <div style="padding-top: 50px"></div>
    <div class="col mt-4 pt-2" id="tables">
        <div class="component-wrapper rounded shadow">
            <div class="p-4 border-bottom">
                <h4 class="title mb-0"> Articles </h4>
            </div>

            <div class="p-4">
                <div class="table-responsive bg-white shadow rounded">
                    <table class="table mb-0 table-center">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">excerpt</th>
                            <th scope="col">last update</th>
                            <th scope="col">status</th>
                            <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                            <tr>
                                <th scope="row">{{$article->id}}</th>
                                <td style="width:25%">{{$article->title}}</td>
                                <td style="width:30%">{{$article->excerpt}}</td>
                                <td style="width:10%">{{$article->isactive}}</td>
                                <td>{{$article->updated_at}}</td>
                                <td><a href="/my-admin-page/editarticle/{{$article->id}}">edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--end col-->
    <!-- Table End -->

@endsection


@section('additional-footer-link')

@endsection