@extends('layout.master-layout-1')

@section('page-title')
FAQ - 
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
                    <h4 class="title"> Frequently Asked Questions </h4>
                    
                </div>
            </div>  <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->

<section class="section bg-light border-bottom">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="p-4 feature-form ml-lg-5">
                    <div class="faq-content">
                        <div class="accordion" id="accordionExample">
                            <div class="card border rounded shadow mb-2">
                                <a data-toggle="collapse" href="#collapseOne" class="faq position-relative" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header bg-light p-3" id="headingOne">
                                        <h4 class="title mb-0 faq-question">What if I burn a secret?</h4>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">Burning a secret is going to erase it before it is revealed. If you give someone a secret link and burn it before they see it, they won't be able to read it. It will literally appear to them as if the secret never existed at all.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card border rounded shadow mb-2">
                                <a data-toggle="collapse" href="#collapseTwo" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header bg-light p-3" id="headingTwo">
                                        <h4 class="title mb-0 faq-question">Why should I see the encrypted message only once?</h4>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">We'll display the message once so that when someone gets this private page (in the history of your browser or when you send a private link mistakenly instead of the hidden one), the hidden value won't be visible.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card border rounded shadow mb-0">
                                <a data-toggle="collapse" href="#collapseThree" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header bg-light p-3" id="headingfive">
                                        <h4 class="title mb-0 faq-question">How long does the encrypted message go?</h4>
                                    </div>
                                </a>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">The secret link will be available depends on message lifespan you choose  until it's viewed or burned.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card border rounded shadow mb-0">
                                <a data-toggle="collapse" href="#collapsefour" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsefour">
                                    <div class="card-header bg-light p-3" id="headingfive">
                                        <h4 class="title mb-0 faq-question">Can I erase a message that has already been made?</h4>
                                    </div>
                                </a>
                                <div id="collapsefour" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">Sure, there's a choice to "burn" your secrets to erase them. This is going to erase the message forever.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>  

    <!--         <div class="col-lg-3 col-md-3 col-sm-12 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                asd
            </div> -->
        </div><!--end row-->
    </div><!--end container-->

</section><!--end section-->

@endsection
