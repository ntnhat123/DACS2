
@extends('layout.app')
@section('content')
<head>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- ************************* CSS Files ************************* -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor.css">

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
    {{-- {{ dd($products)}} --}}
    <!-- Preloader Start -->
    <div class="ft-preloader active">
        <div class="ft-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ft-child ft-bounce1"></div>
            <div class="ft-child ft-bounce2"></div>
            <div class="ft-child ft-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->
 
    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        
        <!-- Header End -->

        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">
            <!-- Slider area Start -->
            <section class="homepage-slider mb--75 mb-md--55">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="element-carousel slick-right-bottom"
                            data-slick-options='{
                                "slidesToShow": 1, 
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-arrow-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-arrow-right" }
                            }' 
                            data-slick-responsive='[{"breakpoint": 768, "settings": {"arrows": false}}]'>
                                <div class="item">
                                    <div class="single-slide d-flex align-items-center bg-color" data-bg-color="#dbf3f2">
                                        <div class="row align-items-center no-gutters w-100">
                                            <div class="col-xl-7 col-md-6 mb-sm--50">
                                                <figure data-animation="fadeInUp" data-duration=".3s" data-delay=".3s" class="plr--15">
                                                    <img src="assets/img/slider/slider-1.png" alt="Slider O1 image" class="mx-auto">
                                                </figure>
                                            </div>
                                            <div class="col-md-6 col-lg-5 offset-lg-1 offset-xl-0">
                                                <div class="slider-content">
                                                    <div class="slider-content__text mb--40 mb-md--30">
                                                        <p class="mb--15" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">#New Sofa</p>
                                                        <p class="mb--20" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">Hoàn thiện phòng khách với </p>
                                                        <h1 class="heading__primary lh-pt7" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">Ghế Sofa</h1>
                                                    </div>
                                                    <div class="slider-content__btn">
                                                        <a href="#" class="btn btn-outline btn-brw-2" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">Đặt hàng ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-slide d-flex align-items-center bg-color" data-bg-color="#dbf3f2">
                                        <div class="row align-items-center no-gutters w-100">
                                            <div class="col-xl-6 col-md-6 mb-sm--50 order-md-2">
                                                <figure data-animation="fadeInUp" data-duration=".3s" data-delay=".3s" class="pl-15 pr--60">
                                                    <img src="assets/img/slider/slider-2.png" alt="Slider O1 image" class="mx-auto">
                                                </figure>
                                            </div>
                                            <div class="col-md-5 col-lg-5 offset-md-1 order-md-1">
                                                <div class="slider-content">
                                                    <div class="slider-content__text border-color-2 mb--40 mb-md--30">
                                                        <p class="mb--15" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">SALE</p>
                                                        <p class="mb--20" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">LÀM MỚI KHÔNG GIAN SỐNG</p>
                                                        <h1 class="heading__primary lh-pt7" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">Xem sản phẩm</h1>
                                                    </div>
                                                    <div class="slider-content__btn">
                                                        <a href="#" class="btn btn-outline btn-brw-2 btn-brc-2" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">Mua Ngay</a>
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
            </section>
            <!-- Slider area End -->
          
            <!-- Product Tab Area Start -->
            <section class="product-tab-area mb--30 mb-md--10">
                <div class="container">
                    <div class="row mb--28 mb-md--18 mb-sm--33">
                        <div class="col-md-3 text-md-left text-center">
                            <h2>Tất cả sản phẩm</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-style-1">
                                <div class="nav nav-tabs justify-content-md-end justify-content-center" id="product-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="new-all-tab" data-toggle="tab" href="#new-all" role="tab" aria-controls="new-all" aria-selected="true">
                                        <span class="nav-text">Tất cả</A></span>
                                    </a>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="product-tab-content">
                                <div class="tab-pane fade show active" id="new-all" role="tabpanel" aria-labelledby="new-all-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="element-carousel"
                                            data-slick-options='{
                                                "spaceBetween": 30,
                                                "slidesToShow": 4
                                            }'
                                            data-slick-responsive='[
                                                {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                                                {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                                            ]'>
                                            
                                            @foreach ($products as $product)
                                                    
                                                <div class="item">
                                                    <div class="ft-product">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <figure class="product-image--holder">
                                                                    <img src="{{asset("/assets/img/products/".$product->image) }}" alt="Product">
                                                                </figure>
                                                                <a href="product?id={{$product->id}}" class="product-overlay"></a>
                                                                <div class="product-action">
                                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                                        <i class="la la-eye"></i>
                                                                    </a>
                                                                    <a href="wishlist.html" class="action-btn">
                                                                        <i class="la la-heart-o"></i>
                                                                    </a>
                                                                    <a href="wishlist.html" class="action-btn">
                                                                        <i class="la la-repeat"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info plr--20">
                                                                {{-- <h3 class="product-title"><a href="/product">Ghế Sofa Băng Giá-TB21</a></h3> --}}
                                                                <h3 class="product-title"><a href="/product">{{$product->name}}</a></h3>
                    
                                                                <div class="product-info-bottom">
                                                                    <div class="product-price-wrapper">
                                                                        {{-- <span class="money">6.500.000Đ</span> --}}
                                                                        
                                                                        <span class="money">{{$product->price}}</span>
                    
                                                                    </div>
                                                                    <a href="{{ route('add.to.cart', $product->id) }}" class="add-to-cart">

                                                                        <i class="la la-plus"></i>
                                                                        <span>Thêm vào giõ hàng</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            @endforeach
                                              
                                            </div>
                                        </div>
                                   
                                    </div>
                                   
                                </div>
                                

                               
                                @foreach ($products as $product)

                                <div class="tab-pane fade" id="new-wooden" role="tabpanel" aria-labelledby="">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="{{asset("/assets/img/products/".$product->image) }}" alt="Product">
                                                            
                                                        </figure>
                                                        <a href="product-details.html" class="product-overlay"></a>
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                                                <i class="la la-eye"></i>
                                                            </a>
                                                            <a href="wishlist.html" class="action-btn">
                                                                <i class="la la-heart-o"></i>
                                                            </a>
                                                            <a href="wishlist.html" class="action-btn">
                                                                <i class="la la-repeat"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="product-category">
                                                            <a href="product-details">{{$product->name }}</a>
                                                        </div>
                                                        {{-- <h3 class="product-title"><a href="product-details.html">{{$product->description}}</a></h3> --}}
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">{{$product->price}} đ</span>
                                                            </div>
                                                            <a href="cart" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                
                                
                                @endforeach
 

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Product Tab Area End -->

            

            <!-- Best Sale Product Area Start -->
            <section class="best-sale-product-area mb--75 mb-md--55">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="best-sale-product bg-color" data-bg-color="#f7f8f9">
                                <div class="best-sale-product__inner bg-color" data-bg-color="#ffffff">
                                    <figure class="best-sale-product__img">
                                        <a href="/product">
                                            <img src="assets/img/products/best-product-1.png" alt="Best Sale Product">
                                        </a>
                                    </figure>
                                    <div class="best-sale-product__info">
                                        <h2 class="best-sale-product__heading">
                                            <span class="best-sale-product__heading--main">Bán tốt nhất</span>
                                            <span class="best-sale-product__heading--sub">Nhận chiết khấu giá tốt</span>
                                        </h2>
                                        <p class="best-sale-product__desc">Một thực tế đã có từ lâu rằng người đọc sẽ bị phân tâm bởi nội dung có thể đọc được</p>
                                        <a href="shop.html" class="btn btn-outline btn-size-md btn-color-primary btn-shape-round btn-hover-2">Mua ngay</a>
                                    </div>
                                </div>
                                <figure class="best-sale-product__top-image">
                                    <img src="assets/img/products/treo.png" alt="bg image">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Best Sale Product Area End -->

       
        </main>
       
        <aside class="mini-cart" id="miniCart">
            <div class="mini-cart-wrapper">
                <div class="mini-cart__close">
                    <a href="#" class="btn-close"><i class="la la-remove"></i></a>
                </div>
                <div class="mini-cart-inner">
                    <h3 class="mini-cart__heading mb--45">Shopping Cart</h3>
                    <div class="mini-cart__content">
                        <ul class="mini-cart__list">
                            @php $total = 0 @endphp
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                
                                    <li class="mini-cart__product">
                                        <a href="{{route('remove.from.cart')}}" class="mini-cart__product-remove remove-from-cart">
                                            <i class="la la-remove"></i>
                                        </a>
                                       
                                        <div class="mini-cart__product-image">
                                            <img src="{{asset('assets/img/products/avatar-large-2.jpg')}}" alt="products">
                                        </div>
                                       
                                        <div class="mini-cart__product-content">
                                            <a class="mini-cart__product-title" href="product-details.html">{{ $details['name'] }}</a>
                                            <span class="mini-cart__product-quantity">{{ $details['quantity'] }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            @endif        
                           
                        </ul>
                        <div class="mini-cart__total">
                            <span>Subtotal</span>
                            <span class="ammount">{{$total}}</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="cart" class="btn btn-fullwidth btn-bg-primary mb--20">View Cart</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Mini Cart End -->

        <!-- Searchform Popup Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="la la-remove"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                
                <form method="get" action="{{ route('searchindex') }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} searchform">
                        <input type="text" name="search" id="search" class="searchform__input" placeholder="Search Entire Store...">
                        <button type="submit" class="searchform__submit"><i class="la la-search"></i></button>            
                        @include('alerts.feedback', ['field' => 'name'])
                    </div>
            
                </form>
            </div>
        </div>
        <!-- Searchform Popup End -->

        <!-- Qicuk View Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="la la-remove"></i></span>
                </button>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="element-carousel slick-vertical-center"
                        data-slick-options='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-angle-double-left" },
                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-angle-double-right" }
                        }'
                        >
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge sale">sale</span>
                            </div>
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/prod-02.jpg" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge sale">sale</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="modal-box product-summary">
                            <div class="product-navigation text-right mb--20">
                                <a href="#" class="prev"><i class="la la-angle-double-left"></i></a>
                                <a href="#" class="next"><i class="la la-angle-double-right"></i></a>
                            </div>
                            <div class="product-rating d-flex mb--20">
                                <div class="star-rating star-three">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                </div>
                            </div>
                            <h3 class="product-title mb--20">Golden Easy Spot Chair.</h3>
                            <p class="product-short-description mb--25">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                            <div class="product-price-wrapper mb--25">
                                <span class="money">$200.00</span>
                                <span class="price-separator">-</span>
                                <span class="money">$400.00</span>
                            </div>
                            <form action="#" class="variation-form mb--30">
                                <div class="product-color-variations d-flex align-items-center mb--20">
                                    <p class="variation-label">Color:</p>
                                    <div class="product-color-variation variation-wrapper">
                                        <div class="variation">
                                            <a class="product-color-variation-btn red selected" data-toggle="tooltip" data-placement="top" title="Red">
                                                <span class="product-color-variation-label">Red</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-color-variation-btn black" data-toggle="tooltip" data-placement="top" title="Black">
                                                <span class="product-color-variation-label">Black</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-color-variation-btn pink" data-toggle="tooltip" data-placement="top" title="Pink">
                                                <span class="product-color-variation-label">Pink</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-color-variation-btn blue" data-toggle="tooltip" data-placement="top" title="Blue">
                                                <span class="product-color-variation-label">Blue</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-size-variations d-flex align-items-center mb--15">
                                    <p class="variation-label">Size:</p>   
                                    <div class="product-size-variation variation-wrapper">
                                        <div class="variation">
                                            <a class="product-size-variation-btn selected" data-toggle="tooltip" data-placement="top" title="S">
                                                <span class="product-size-variation-label">S</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="M">
                                                <span class="product-size-variation-label">M</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="L">
                                                <span class="product-size-variation-label">L</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="XL">
                                                <span class="product-size-variation-label">XL</span>
                                            </a>
                                        </div>
                                    </div>                                 
                                </div>
                                <a href="" class="reset_variations">Clear</a>
                            </form>
                            <div class="product-action d-flex flex-sm-row flex-column align-items-sm-center align-items-start mb--30">
                                <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                    <label class="quantity-label" for="quick-qty">Quantity:</label>
                                    <div class="quantity">
                                        <input type="number" class="quantity-input" name="qty" id="quick-qty" value="1" min="1">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-size-sm btn-shape-square" onclick="window.location.href='cart.html'">
                                    Add To Cart
                                </button>
                            </div>  
                            <div class="product-footer-meta">
                                <p><span>Category:</span>
                                    <a href="shop.html">Full Sweater</a>,
                                    <a href="shop.html">SweatShirt</a>,
                                    <a href="shop.html">Jacket</a>,
                                    <a href="shop.html">Blazer</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Qicuk View Modal End -->

        <!-- Global Overlay Start -->
        <div class="global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Global Overlay Start -->
        <a class="scroll-to-top" href=""><i class="la la-angle-double-up"></i></a>
        <!-- Global Overlay End -->
    </div>
    <!-- Main Wrapper End -->
 

    <!-- ************************* JS Files ************************* -->
    <script type="text/javascript">
        var route = "{{ url('autocomplete-search') }}";

        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
    <!-- jQuery JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
    <script src="/js/app.js"></script>

    <script src="assets/js/vendor.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

@endsection