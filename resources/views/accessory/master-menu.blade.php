
        
<div id="navigation" class="active">
    <!-- Navigation Menu-->   
    <ul class="navigation-menu menu-float">

            <li><a href="/faq">FAQ</a></li>
            <li><a href="/howitworks">How It Works</a></li>
            <li><a href="/blog">blog</a></li>
        
         @guest
            <li><a href="/login">Sign in</a></li>
            <li><a href="/register">Register</a></li>
        @else
            <li class="has-submenu">
            <a href="javascript:void(0)">Hi {{ ucfirst(Auth::user()['name']) }}</a>
            <span class="menu-arrow"></span>
                <ul class="submenu">
                    <li><a href="/account">My Account</a></li>
                    <li><a href="/logout">Sign Out</a></li>
                </ul> 
            </li>
        @endguest

    </ul><!--end navigation menu-->

</div><!--end navigation-->