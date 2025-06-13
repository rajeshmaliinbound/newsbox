<header class="header-area">
    <!-- Navbar Area -->
    <div class="newsbox-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newsboxNav">

                    <!-- Nav brand -->
                    <a href="{{ route('home') }}" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a id="homepage" href="{{ route('home') }}">News</a></li>
                                <li><a id="technologypage" href="{{ route('technology') }}">Technology</a></li>
                                <li><a id="businesspage" href="{{ route('business') }}">Business</a></li>
                                <li><a id="entertainmentpage" href="{{ route('entertainment') }}">Entertainment</a></li>
                                <li><a id="sciencepage" href="{{ route('science') }}">Science/Health</a></li>
                                <li><a id="travelpage" href="{{ route('travel') }}">Travel</a></li>
                                <li><a id="user-signup" href="{{ route('user_signup') }}"><i class="fa-solid fa-user"></i> Signup</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>