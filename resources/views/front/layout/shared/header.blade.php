<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/front/img/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('front.home') }}">home</a></li>
                                        <li><a href="#">Housing Offers <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('front.housings')  }}">Housing Offers</a></li>
                                                @auth
                                                    <li><a href="{{ route('front.housings.create')  }}">Add new offer</a></li>
                                                @endauth
                                            </ul>
                                        </li>
                                        <li><a href="#">Demands <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('front.demands')  }}">Demands</a></li>
                                                @auth
                                                    <li><a href="{{ route('front.demands.create')  }}">Add new demand</a></li>
                                                @endauth
                                            </ul>
                                        </li>
                                        @guest
                                            <li><a href="#">Account <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a data-toggle="modal" data-target="#modal-login" href="#">Login</a></li>
                                                    <li><a data-toggle="modal" data-target="#modal-register" href="#">Register</a></li>
                                                </ul>
                                            </li>
                                        @else
                                            <li><a href="#">{{ Auth::user()->name }} <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('front.housings.create') }}">My account</a></li>
                                                    <li><a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">Logout</a></li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="social_wrap d-flex align-items-center justify-content-end">
                                <div class="number">
                                    <p> <i class="fa fa-phone"></i> 10(256)-928 256</p>
                                </div>
                            </div>
                        </div>
                        <div class="seach_icon">
                            <a href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

@include('front.layout.shared.login_modal')

@include('front.layout.shared.register_modal')
