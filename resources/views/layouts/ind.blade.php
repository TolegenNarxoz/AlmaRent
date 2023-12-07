<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Include All CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/themewar-icons.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('css/preset.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/ignore_in_wp.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- End Include All CSS -->

    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="{{asset('images/favicon.png')}}">
    <!-- Favicon Icon -->
</head>
<body>


<!-- Header Start -->
<header class="header-01 fix-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <h5>AlmaRent</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="mainmenu mobile-menu">
                    <div class="mobile-btn">
                        <a href="javascript: void(0);"><span>Menu</span><i class="twi-bars"></i></a>
                    </div>
                    <ul>
                        <li class="active menu-item-has-children">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0);">Rent</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('products.index')}}">Cars</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0);">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('products.about')}}">About Page</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            @can('create', App\Models\Product::class)
                                <a href="{{route('adm.users.index')}}">Admin Page</a>
                            @endcan
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="header-cogs">
                    @guest
                        @if (Route::has('login'))
                    <a class="user-login" href="{{route('login')}}"><i class="twi-user-circle"></i><span>{{ __('Login') }}</span></a>
                        @endif
                            @if (Route::has('register'))
                                <a class="user-login" href="{{route('register')}}"><i class="twi-user-circle"></i><span>{{ __('Register') }}</span></a>
                            @endif
                    @else
                            <a href="" class="user-login">{{ Auth::user()->name }}</a>
                            <a href="{{ route('logout') }} " class="user-login" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                    @endguest
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Popup Search -->
<section class="popup-search-sec">
    <div class="popup-search-overlay"></div>
    <div class="overlay-popup">
        <a href="javascript:void(0);" class="search-closer">x</a><!-- Close Popup Btn -->
        <div class="middle-search">
            <div class="popup-search-form"><!-- Search Form Start -->
                <form method="get" action="#">
                    <input type="search" name="s" id="s" placeholder="Search...">
                    <button type="submit"><i class="twi-search"></i></button>
                </form><!-- Search Form End -->
            </div>
        </div>
    </div>
</section>
<!-- Popup Search -->
<section class="categorie-section-2">
    @yield('content')
</section>

<!-- Footer Start -->
<footer class="footer-01 inner-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <aside class="widget about-widget">
                    <div class="foo-logo">
                        <a href="index.html"><img src="assets/images/logo.png" alt=""/></a>
                    </div>
                    <div class="ab-social">
                    </div>
                </aside>
            </div>
            <div class="col-lg-2 col-md-4 col-custome-2">
                <aside class="widget">
                    <h3 class="widget-title">Аккаунт</h3>
                    <ul>
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-2 col-md-6 col-custome-3">
                <aside class="widget contact-widget">
                    <h3 class="widget-title">Контакт & адрес</h3>
                    <p>
                        ул. Жандосова 55, Алматы 050035
                    </p>
                    <p>
                        Телефон: +7 777-777-77-77
                        Email: alma.rent7@gmail.com
                    </p>
                </aside>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Ened -->

<!-- Coryight Start -->
<section class="copyright-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-5">

            </div>
            <div class="col-lg-6 col-md-7">
                <div class="copys-text"><i class="twi-copyright"></i>Copyright AlmaRent | All Rights Reserved</div>
            </div>
        </div>
    </div>
</section>
<!-- Coryight End -->

<!-- Include All JS -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/modernizr.custom.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('js/lightcase.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.plugin.min.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/tweenmax.min.js')}}"></script>

<script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Rev slider Add on Start -->
<script src="{{asset('js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- Rev slider Add on End -->

<script src="{{asset('js/theme.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
