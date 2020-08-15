<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>@yield('page-title') | admin page</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <meta name="robots" content="no-index" />
        @yield('additional-meta')
        
        
        <meta name="author" content="Protected Message">
        <meta name="Version" content="2.1.0">


        <!-- site image -->
        <meta itemprop="image" content="https://protectedmessage.com/images/ProtectedMessage_logo_sm.png">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{URL::TO('/')}}/images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{{URL::TO('/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Icons -->
        <link href="{{URL::TO('/')}}/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <!-- Slider -->               
        <link rel="stylesheet" href="{{URL::TO('/')}}/assets/owl-carousel/css/owl.carousel.min.css"> 
        <link rel="stylesheet" href="{{URL::TO('/')}}/assets/owl-carousel/css/owl.theme.default.min.css">    
        <!-- Main Css -->
        <link href="{{URL::TO('/')}}/css/style.css" rel="stylesheet" type="text/css" id="theme-opt">
        <link href="{{URL::TO('/')}}/css/default.css" rel="stylesheet" id="color-opt"> 
       

    </head>

    <body data-gr-c-s-loaded="true" style="overflow: visible;">
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky active nav-sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="/">Protected <span class="text-primary">Message</span></a>
                </div>          
                
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                    

                @include('accessory.master-menu')

            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
        

        @yield('body-content')


        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">

                    <div class="col-sm-4 mt-4 mt-sm-0 pt-2 pt-sm-0" style="text-align:left">
                        <a class="logo-footer" href="/">Protected Message<span class="text-primary">.</span></a>
                    </div><!--end col-->


                    <div class="col-sm-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled footer-list mt-4">
                            <li class="list-inline-item">
                                <a href="/privacy-policy" class="text-foot">Privacy Policy</a>
                            </li> | 
                            <li class="list-inline-item">
                                <a href="/terms-and-conditions" class="text-foot">Terms and Conditions</a>
                            </li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-sm-4">
                        <div class="text-sm-right">
                            <p class="mb-0">© 2020 Protected Message.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

<!--         <div class="gdpr" id="gdpr"><p>
        We use cookies to enhance and personalize your experience, and to analyze traffic on our website. For more information, see our <a href="/cookie-policy">Cookie Policy</a>
        <a class="gdpr-accept" href="javascript:void(0)" onclick="gdprAccept()">Accept</a></p>
        </div> -->

        <!-- Load Facebook SDK for JavaScript -->


        <!-- javascript -->
        <script src="{{URL::TO('/')}}/js/jquery.min.js"></script>
        <!-- SLIDER -->
        <script src="{{URL::TO('/assets/counter')}}/js/counter.init.js"></script>
        
        <script src="{{URL::TO('/')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{URL::TO('/')}}/js/jquery.easing.min.js"></script>
        <script src="{{URL::TO('/')}}/js/scrollspy.min.js"></script>
        <!-- SLIDER -->
        <script src="{{URL::TO('/')}}/assets/owl-carousel/js/owl.carousel.min.js"></script>
        
        <!-- Main Js -->
        <script src="{{URL::TO('/')}}/js/custom-app.js"></script>
        <script src="{{URL::TO('/')}}/js/custom-script.js"></script>
        @yield('additional-footer-link')
    
</body></html>