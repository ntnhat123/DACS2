<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--  --}}

    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('assets/img/icon.png')}}">

    <!-- ************************* CSS Files ************************* -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor.css')}}">

    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- bootstrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- fonticon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__inner fixed-header">
                <div class="header__main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header__main-inner">
                                    <div class="header__main-left">
                                        <div class="logo">
                                            <a href="/index" class="logo--normal">
                                                {{-- <img src="assets/img/logo/logo.png" alt="Logo"> --}}
                                                <h1>NT shop</h1>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="header__main-center">
                                        <nav class="main-navigation text-center d-none d-lg-block">
                                            <ul class="mainmenu">
                                                <li class="mainmenu__item menu-item-has-children">
                                                    <a href="/index" class="mainmenu__link">
                                                        <span class="mm-text">Home</span>
                                                    </a>
                                                    
                                                </li>
                                                <li class="mainmenu__item menu-item-has-children megamenu-holder">
                                                    <a href="/shop" class="mainmenu__link">
                                                        <span class="mm-text">Shop</span>
                                                    </a>
                                                    
                                                </li>
                                                <li class="mainmenu__item menu-item-has-children">
                                                    <a href="/blog" class="mainmenu__link">
                                                        <span class="mm-text">Blog</span>
                                                    </a>
                                                    {{-- <ul class="sub-menu">
                                                        <li class="menu-item-has-children">
                                                            <a href="#">
                                                                <span class="mm-text">Blog Grid</span>
                                                            </a>
                                                            <ul class="sub-menu">
                                                                <li>
                                                                    <a href="blog-left-sidebar.html">
                                                                        <span class="mm-text">Left Sidebar</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog.html">
                                                                        <span class="mm-text">Right Sidebar</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-01-column.html">
                                                                        <span class="mm-text">One Column</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-02-columns.html">
                                                                        <span class="mm-text">Two Columns</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-03-columns.html">
                                                                        <span class="mm-text">Three Columns</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a href=""><span class="mm-text">Blog Details</span></a>
                                                            <ul class="sub-menu">
                                                                <li>
                                                                    <a href="blog-details-image.html">
                                                                        <span class="mm-text">Image Post</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-details-audio.html">
                                                                        <span class="mm-text">Audio Post</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-details-video.html">
                                                                        <span class="mm-text">Video Post</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-details-gallery.html">
                                                                        <span class="mm-text">Gallery Post</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul> --}}
                                                </li>
                                                <li class="mainmenu__item menu-item-has-children">
                                                    <a href="#" class="mainmenu__link">
                                                        <span class="mm-text">Pages</span>
                                                    </a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="my-account.html">
                                                                <span class="mm-text">My Account</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html">
                                                                <span class="mm-text">Checkout</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="cart.html">
                                                                <span class="mm-text">Cart</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <span class="mm-text">Compare</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="order-tracking.html">
                                                                <span class="mm-text">Track Order</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <span class="mm-text">Wishlist</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mainmenu__item">
                                                    <a href="/contact-us" class="mainmenu__link">
                                                        <span class="mm-text">Contact Us</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header__main-right">
                                        <div class="header-toolbar-wrap">
                                            <div class="header-toolbar">
                                                <div class="header-toolbar__item header-toolbar--search-btn">
                                                    <a href="#searchForm" class="header-toolbar__btn toolbar-btn">
                                                        <i class="la la-search"></i>
                                                    </a>
                                                </div>
                                                <div class="header-toolbar__item header-toolbar--minicart-btn">
                                                    <a href="#miniCart" class="header-toolbar__btn toolbar-btn">
                                                        <i class="la la-shopping-cart"></i>
                                                        
                                                    </a>
                                                </div>
                                                {{-- <div class="dropdown show" style="background-color: rgba(255, 0, 0, 0);">
                                                    <a class="btn text-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-user text-light me-2"></i>
                                                    </a>
                                                  
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    
                                                        
                    
                                                        @guest
                                                        @if (Route::has('login'))
                                                     
                                                          <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                      
                                                        @endif
                      
                                                         @if (Route::has('register'))
                                                    
                                                          <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    
                                                        @endif
                    
                                                        @else
                                                
                                                        <a id="dropdown-item" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                          {{ Auth::user()->name }}
                                                        </a>
                      
                                                        <div class="dropdown-item dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                                             onclick="event.preventDefault();
                                                                           document.getElementById('logout-form').submit();">
                                                              {{ __('Logout') }}
                                                          </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    
                                                 
                                                      @endguest
                                                    </div>
                                                </div> --}}
                                                <div class="dropdown " >
                                                    <button type="button" class="btn bg-light dropdown-toggle" data-bs-toggle="dropdown">
                                                      <i class="fas fa-user text-dark"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                      
                                                        @guest
                                                        @if (Route::has('login'))
                                                     
                                                          <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                      
                                                        @endif
                      
                                                         @if (Route::has('register'))
                                                    
                                                          <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    
                                                        @endif
                    
                                                        @else
                                                
                                                        <a id="dropdown-item" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                          {{ Auth::user()->name }}
                                                        </a>
                      
                                                        <div class="dropdown-item dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                                             onclick="event.preventDefault();
                                                                           document.getElementById('logout-form').submit();">
                                                              {{ __('Logout') }}
                                                          </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                        
                                                        @if (Auth::user()->is_admin==1)
                                                            <a href="admin" class="dropdown-item">Admin</a>

                                                            
                                                            
                                                        @endif
                                                 
                                                      @endguest
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>    
        </header>

        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
        @include('footer')
        
    </div>
</body>
</html>
