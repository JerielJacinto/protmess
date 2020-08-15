         <!-- google ad sense -->
        <script data-ad-client="ca-pub-7072981673327815" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165564194-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-165564194-1');
        </script>

        <!-- facebook app -->
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '306705974102751',
              cookie     : true,
              xfbml      : true,
              version    : 'v8.0'
            });
              
            FB.AppEvents.logPageView();   
              
          };
        
          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "https://connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
        
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
        
        
        
        {
            status: 'connected',
            authResponse: {
                accessToken: '...',
                expiresIn:'...',
                signedRequest:'...',
                userID:'...'
            }
        }
        
        <script>
                                        
        <fb:login-button 
          scope="public_profile,email"
          onlogin="checkLoginState();">
        </fb:login-button>
        
        
        function checkLoginState() {
          FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
          });
        }
        
        
    </script>