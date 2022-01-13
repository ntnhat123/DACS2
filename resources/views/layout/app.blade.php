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

    <title>NT shop</title>

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
                                                        <span class="mm-text">Trang chủ</span>
                                                    </a>
                                                    
                                                </li>
                                                <li class="mainmenu__item menu-item-has-children megamenu-holder">
                                                    <a href="/shop" class="mainmenu__link">
                                                        <span class="mm-text">Cửa hàng</span>
                                                    </a>
                                                    
                                                </li>
                                                <li class="mainmenu__item menu-item-has-children">
                                                    <a href="/blog" class="mainmenu__link">
                                                        <span class="mm-text">Blog</span>
                                                    </a>
                                                  
                                                </li>
                                               
                                                <li class="mainmenu__item">
                                                    <a href="/contact-us" class="mainmenu__link">
                                                        <span class="mm-text">Liên hệ</span>
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
                                             
                                                <div class="dropdown " >
                                                    <button type="button" class="btn bg-light dropdown-toggle" data-bs-toggle="dropdown">
                                                      <i class="fas fa-user text-dark"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                      
                                                        @guest
                                                        @if (Route::has('login'))
                                                     
                                                          <a class="dropdown-item" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                                      
                                                        @endif
                      
                                                         @if (Route::has('register'))
                                                    
                                                          <a class="dropdown-item" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                                    
                                                        @endif
                    
                                                        @else
                                                
                                                        <a id="dropdown-item" class="nav-link dropdown-toggle" style="font-size:15px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                          {{ Auth::user()->name }}
                                                        </a>
                      
                                                        <div class="dropdown-item dropdown-menu-right" aria-labelledby="navbarDropdown" style="font-size:20px;">
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
                                                            <a href="admin" class="dropdown-item" style="font-size:20px;">Admin</a>

                                                            
                                                            
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

        <main class="py-4">
            @yield('content')
        </main>
        @include('footer')

        
        
    </div>
</body>
</html>
