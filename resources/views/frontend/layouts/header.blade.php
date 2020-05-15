<div class="account-popup-sec">
    <div class="account-popup-area">
        <div class="account-popup">
            -->
            <span class="close-popup"><i class="fa fa-close"></i></span>
        </div>
    </div>
</div><!-- Account Popup Sec -->
<header class="simple-header for-sticky ">
    <div class="top-bar">
        <div class="container">
            <ul class="contact-item">
                <li><i class="fa fa-envelope-o"></i>yourcompnay@email.com</li>
                <li><i class="fa fa-mobile"></i>+1 333 44 555 / +1 333 44 500</li>
            </ul>
        </div>
    </div><!-- Top bar -->
    <div class="menu">
        <div class="container">
            <div class="logo">
                <a href="{{ url('/')}}" title="">
                    <i class="fa fa-get-pocket"></i>
                    <span>Car Renting</span>
                    <strong>RENT VEHICULS</strong>
                </a>
            </div><!-- LOGO -->
            <nav>
                <ul>
                    <li>
                        <a href="{{ url('/')}}" title="">HOME</a>
                    </li>
                    <li>
                        <a href="{{ url('vehicle')}}" title="">VEHICULS</a>
                    </li>
                    <li><a href="{{ url('contact')}}" title="">CONTACT</a></li>
                    @if(Auth::check())
                    <li>
                        <i class="fa fa-user" style="color: white"> <a href="{{ url('/user/profile')}}" style="color: white">
                                {{ Auth::user()->name}}</a></i>
                    </li>
                    <li>
                        <i class="fa fa-user" style="color: white"> <a href="{{ url('/user/logout')}}" style="color: white">
                                Logout</a></i>
                    </li>
                    @else
                    <li>
                        <i class="fa fa-user" style="color: white"> <a href="{{ url('/user/register')}}" style="color: white">
                                Signup</a></i>
                    </li>
                    <li>
                        <i class="fa fa-user" style="color: white"> <a href="{{ url('/user/login')}}" style="color: white">
                                Login</a></i>

                    </li>
                    @endif
                </ul>
            </nav>

        </div>
    </div>
</header>
