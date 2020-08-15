@extends('layout.master-layout-1')

@section('page-title')
Protected Message
@endsection

@section('additional-meta')
<meta name="robots" content="noindex" />

<!-- fb image -->
<meta property="og:image" content="https://protectedmessage.com/images/how-it-works-fb.png">

<!-- Twitter image -->
<meta name="twitter:image" content="https://protectedmessage.com/images/how-it-works-fb.png">
@endsection

@section('body-content')
<!-- Hero Start -->
<section class="bg-half-105 bg-light d-table w-100 border-bottom full-height"  id="home">

	<div class="container">
        <div class="row">
          
            <div class="col-lg-12 col-md-12 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
            	<div class="p-4 rounded feature-form border ml-lg-5" style="background-color:#ffffff;">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link rounded active" id="pills-smart-tab" data-toggle="pill" href="#messages-tab" role="tab" aria-controls="messages-tab" aria-selected="false">
                                            <div class="text-center pt-1 pb-1">
                                                <h4 class="title font-weight-normal mb-0">Recent Messages</h4>
                                            </div>
                                        </a><!--end nav link-->
                                    </li><!--end nav item-->
                                    
                                    <li class="nav-item">
                                        <a class="nav-link rounded" id="pills-smart-tab" data-toggle="pill" href="#info-tab" role="tab" aria-controls="info-tab" aria-selected="false">
                                            <div class="text-center pt-1 pb-1">
                                                <h4 class="title font-weight-normal mb-0">My Information</h4>
                                            </div>
                                        </a><!--end nav link-->
                                    </li><!--end nav item-->

                                </ul><!--end nav pills-->
                            </div><!--end col-->
                        </div> <!-- end of row -->

                        <div class="row pt-2">
                            <div class="col-12">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                                        <h3>Recent Messages</h3>
                                        <div class="table-responsive bg-white shadow rounded table-responsive">
                                            <table class="table mb-0 table-center" style="overflow-x:auto">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">ID code</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Created</th>
                                                    <th scope="col">Recipient</th>
                                                    <th scope="col">Expiration</th>
                                                    <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($myMessages as $myMessage)
                                                    <tr>
                                                        <td>{{$myMessage->name_code}}</td>

                                                        @if($myMessage->status == 'unread')
                                                            <td class="text-primary">{{$myMessage->status}}</td>
                                                        @elseif($myMessage->status == 'read')
                                                            <td class="text-success">{{$myMessage->status}}</td>
                                                        @else
                                                            <td class="text-warning">{{$myMessage->status}}</td>
                                                        @endif

                                                        <td>{{ date('D - M  d', strtotime($myMessage->created_at))}}</td>

                                                            @if($myMessage->recipient == "")
                                                            <td>none</td>
                                                            @else
                                                            <td>{{$myMessage->recipient}}</td>
                                                            @endif

                                                        <td>({{$myMessage->lifespan}}) {{date('D - M  d', strtotime($myMessage->expire_date))}}</td>
                                                        </a>
                                                        <td>
                                                            <a href="/secret/{{$myMessage->link_code}}">Open</a>&nbsp;&nbsp;|&nbsp;
                                                            <a href="/burn/{{$myMessage->message_code}}" style="color:red">burn</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>



                                        <div class="spacer-50"></div>
                                        </div>
                                    </div><!--end teb pane-->

                                    
                                    <div class="tab-pane fade" id="info-tab" role="tabpanel" aria-labelledby="info-tab">
                                        <h3>My Information</h3>
                                        <div class="spacer-50"></div>
                                        <div class="row mt-4">
                                            <div class="col-md-2 col-sm-12 desktop-right">
                                                 <label>Your Name <span class="text-danger">*</span></label>
                                            </div>
                                            <input type="hidden" name="hiddenID" id="hiddenID" value="{{Auth::user()->id}}">
                                            <div class="col-md-6 col-sm-12">
                                                <input type="hidden" name="hiddenName" id="hiddenName" value="{{Auth::user()->name}}">
                                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" value="{{Auth::user()->name}}">
                                            </div>
                                        </div>  

                                        <div class="row mt-4">
                                            <div class="col-md-2 col-sm-12 desktop-right">
                                                 <label>Email <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <input type="hidden" name="hiddenEmail" id="hiddenEmail" value="{{Auth::user()->email}}">
                                                <input name="email" id="email" type="text" class="form-control" placeholder="example@domain.com" value="{{Auth::user()->email}}" readonly="readdonly" disabled>
                                            </div>
                                        </div> 

                                        <div class="row mt-4">
                                            <div class="col-md-2 col-sm-12 desktop-right">
                                                 <label>Password <span class="text-danger"></span></label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                    <span class="invalid-feedback" id="notif" role="alert"> </span>

                                                <input id="password" type="password" placeholder="New Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                                <input id="password-confirm" name="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>  

                                        <div class="row mt-4">
                                            <div class="col-md-2 col-sm-12 desktop-right">
                                                 <label>Company (optional)</label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <input type="hidden" name="hiddenComp" id="hiddenComp" value="">
                                                <input name="comp" id="comp" type="text" class="form-control" placeholder="XYZ Co." value="{{Auth::user()->company}}">
                                            </div>
                                        </div>   

                                        <div class="row mt-4">
                                            <div class="col-md-2 col-sm-12 desktop-right">
                                                <button class="btn btn-primary" onclick="updateInfo()">Update</button>
                                            </div>
                                        </div>  


                                    </div><!--end teb pane-->
                                </div><!--end tab content-->
                            </div><!--end col-->
                        </div><!--end row-->

                    </div>
                </div>
            </div><!--end col-->

        </div><!--end row-->
    </div><!--end container-->
</section>




@endsection


@section('additional-footer-link')

@endsection