@extends('layout.master-layout-1')

@section('page-title')
Burn Message Confimation - Protected Message
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
<!-- ads -->

    <div class="container">
        <div class="row">

          @foreach($messageLinkDetails as $messageLinkDetail)
            <div class="col-lg-12 col-md-12 col-12" style="text-align:center">
                <h4>Burn This Message?</h4>
                <p class="text-muted">Burning a message is permanent and cannot be undone.</p>
                @if ($messageLinkDetail->pass_code != "")
                <h5 class="text-muted">Opps... This message requires a pass code</h5>
                  <div class="alert alert-danger alert-dismissible fade show col-md-5" role="alert" id="passcodeerr" style="display:none; margin: 0 AUTO; padding-bottom:5px">
                      incorrect pass code! try again
                    </div>
                <input type="email" class="form-control col-md-5" style="margin: 0 AUTO;"  value="" id="passcode" name="passcode" placeholder="Enter Pass Code">
                @endif
            </div><br><br>
            <div class="col-lg-9 col-md-9 col-12" style="margin: 0 auto;" id="messageReveal"><br>
                <input type="hidden" id="hiddenID" value="{{$messageLinkDetail->link_code}}"/>
                <button class="btn btn-warning w-100" onclick="messageBurnJS()">Yes, Burn the message</button> 
                <br><br>
                <p class="text-muted center">Message ID : {{$messageLinkDetail->name_code }}</p>

            </div><!--end col-->
          @endforeach

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- How It Work End -->

@endsection


@section('additional-footer-link')

@endsection