
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
    {{-- {{ dd($prodssucts)}} --}}
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
                                                        <a href="#" class="btn btn-outline btn-brw-2 btn-brc-2" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">Shop Now</a>
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
            
            <!-- Top Sale Area Start -->
            <section class="top-sale-area mb--75 mb-md--55">
                <div class="container">
                    <div class="row mb--35 mb-md--23">
                        <div class="col-12 text-center">
                            <h2>Doanh số bán hàng cao nhất trong tuần này</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="element-carousel"
                            data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 3
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
                                            <a href="product" class="product-overlay"></a>
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
            </section>
            <!-- Top Sale Area End -->

            <!-- Feature Product Area Start -->
            <section class="feature-product-area mb--75 mb-md--55">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="feature-product bg-color" data-bg-color="#d7fbf9">
                                <div class="feature-product__inner bg-color" data-bg-color="#e9fefd">
                                    <div class="feature-product__info">
                                        <p class="hastag">#Phong cách mới</p>
                                        <h2 class="feature-product__title"><a href="/product">Sang trọng mềm</a></h2>
                                        <a href="/shop" class="feature-product__btn">Mua ngay</a>
                                    </div>
                                    <figure class="feature-product__image mb-sm--30">
                                        <a href="/product">
                                            <img src="assets/img/products/feature-product-01.png" alt="Feature Product">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feature Product Area End -->

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
                                    @foreach ($categories as $category)
                                        <a class="nav-item nav-link" id="new-wooden-tab" data-toggle="tab" href="#new-wooden" role="tab" aria-controls="new-wooden" aria-selected="false">
                                            <span class="nav-text">{{ $category->name }}</span>
                                        </a>
                                    @endforeach
                                    
                                    {{-- <a class="nav-item nav-link" id="new-furnished-tab" data-toggle="tab" href="#new-furnished" role="tab" aria-controls="new-furnished" aria-selected="false">
                                        <span class="nav-text">Giường</span>
                                    </a>
                                    <a class="nav-item nav-link" id="new-table-tab" data-toggle="tab" href="#new-table" role="tab" aria-controls="new-table" aria-selected="false">
                                        <span class="nav-text">Bàn</span>
                                    </a> --}}
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
                                                            <a href="product" class="product-overlay"></a>
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
                                          
                                        {{-- <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-05-270x300.jpg" alt="Product">
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
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="new-price">
                                                                    <span class="money">$150</span>
                                                                </span>
                                                                <span class="old-price">
                                                                    <span class="money">$200</span>
                                                                </span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-06-270x300.jpg" alt="Product">
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
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">$150</span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-09-270x300.png" alt="Product">
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
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">$150</span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                   
                                </div>
                                

                               
                                @foreach ($products as $product)
                                    
                                
                                <div class="tab-pane fade" id="new-wooden" role="tabpanel" aria-labelledby="{{ $category->name }}">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-05-270x300.jpg" alt="Product">
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
                                                            <a href="product-details.html">{{$product->category->name}}</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">{{$product->description}}</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">{{$product->price}}</span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
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
                                <nav aria-label="Page navigation example">
                                    <span class="hidden">
                                     
                                        {{ $pages = ceil($products->total() / $products->perPage()) }}
                                    </span>
                                    @if ($products->total() != 0)

                                    <ul class="pagination">
                                      <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}">Previous</a></li>
                                         @for ($i = 1; $i <= $pages; $i++)
                                            <li>
                                                
                                                <a href = <?php echo url()->current()."?page=".$i ?> >{{ $i }}</a>
                                            </li>
                                         @endfor
                                      <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a></li>
                                    </ul>
                                   @endif

                                </nav>

                                @foreach ($products as $product)
                                    
                                

                                <div class="tab-pane fade" id="new-furnished" role="tabpanel" aria-labelledby="new-furnished-tab">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-02-270x300.jpg" alt="Product">
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
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">$150</span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-01-270x300.jpg" alt="Product">
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
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">$150</span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-05-270x300.jpg" alt="Product">
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
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">$150</span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-03-270x300.jpg" alt="Product">
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
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">$150</span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                @endforeach
                                <div class="tab-pane fade" id="new-table" role="tabpanel" aria-labelledby="new-table-tab">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-03-270x300.jpg" alt="Product">
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
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">$150</span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-10-270x300.png" alt="Product">
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
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Chair.</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">$150</span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-04-270x300.jpg" alt="Product">
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
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">$150</span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="assets/img/products/prod-03-270x300.jpg" alt="Product">
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
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html">Golden Easy Spot Chair.</a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money">$150</span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
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

            <!-- Blog Area Start -->
            <section class="blog-area mb--70 mb-md--50">
                <div class="container">
                    <div class="row mb--35 mb-md--23">
                        <div class="col-12 text-center">
                            <h2>Tin tức &amp; Cập nhật</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="element-carousel" data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 3,
                                "slidesToScroll": 1
                            }'
                            data-slick-responsive='[
                                {"breakpoint": 992, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 768, "settings": {"slidesToShow": 1}}
                            ]'>
                            @foreach ($blogs as $blog)
                                
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="{{asset("/assets/img/blog/".$blog->image) }}" alt="Blog" class="w-100">
                                                    <a href="blog" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h2 class="blog__title"><a href="blog">{{$blog->title}}</a></h2>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            
                            @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Area End -->
        </main>
        <!-- Main Content Wrapper End -->

        <!-- Footer Start-->
        
        <!-- Footer End-->

        <!-- OffCanvas Menu Start -->
        <div class="offcanvas-menu-wrapper" id="offcanvasMenu">
            <div class="offcanvas-menu-inner">
                <a href="" class="btn-close">
                    <i class="la la-remove"></i>
                </a>
                <nav class="offcanvas-navigation">
                    <ul class="offcanvas-menu">
                        <li class="menu-item-has-children active">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.html">Homepage 01</a>
                                </li>
                                <li>
                                    <a href="index-02.html">Homepage 02</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="shop.html">Shop</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Shop Grid</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-fullwidth.html">Full Width</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-three-columns.html">Three Columns</a>
                                        </li>
                                        <li>
                                            <a href="shop-four-columns.html">Four Columns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop List</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-list.html">Full Width</a>
                                        </li>
                                        <li>
                                            <a href="shop-list-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Product Details</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="product-details.html">Tab Style 1</a>
                                        </li>
                                        <li>
                                            <a href="product-details-tab-style-2.html">Tab Style 2</a>
                                        </li>
                                        <li>
                                            <a href="product-details-tab-style-3.html">Tab Style 3</a>
                                        </li>
                                        <li>
                                            <a href="product-details-gallery-left.html">Gallery Left</a>
                                        </li>
                                        <li>
                                            <a href="product-details-gallery-right.html">Gallery Right</a>
                                        </li>
                                        <li>
                                            <a href="product-details-sticky-left.html">Sticky Left</a>
                                        </li>
                                        <li>
                                            <a href="product-details-sticky-right.html">Sticky Right</a>
                                        </li>
                                        <li>
                                            <a href="product-details-slider-box.html">Slider Box</a>
                                        </li>
                                        <li>
                                            <a href="product-details-slider-full-width.html">Slider Box Full Width</a>
                                        </li>
                                        <li>
                                            <a href="product-details-affiliate.html">Affiliate Proudct</a>
                                        </li>                                                    
                                        <li>
                                            <a href="product-details-variable.html">Variable Proudct</a>
                                        </li>
                                        <li>
                                            <a href="product-details-group.html">Group Product</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-01-column.html">Blog 01 column</a>
                                        </li>
                                        <li>
                                            <a href="blog-02-columns.html">Blog 02 columns</a>
                                        </li>
                                        <li>
                                            <a href="blog-03-columns.html">Blog 03 columns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog Details</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-details-audio.html">Audio Blog Details</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-gallery.html">Gallery Blog Details</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-image.html">image Blog Details</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-video.html">Video Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="my-account.html">My Account</a>
                                </li>
                                <li>
                                    <a href="checkout.html">Checkout</a>
                                </li>
                                <li>
                                    <a href="cart.html">Cart</a>
                                </li>
                                <li>
                                    <a href="compare.html">Compare</a>
                                </li>
                                <li>
                                    <a href="order-tracking.html">Track Order</a>
                                </li>
                                <li>
                                    <a href="wishlist.html">Wishlist</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact-us.html">Contact Us</a>
                        </li>
                    </ul>
                    <div class="site-info vertical">
                        <div class="site-info__item">
                            <a href="tel:+01223566678"><strong>+01 2235 666 78</strong></a>
                            <a href="mailto:Support@contixs.com">Support@furtrate.com</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- OffCanvas Menu End -->

        <!-- Mini Cart Start -->
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
                            <span class="ammount">$98.00</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="cart.html" class="btn btn-fullwidth btn-bg-primary mb--20">View Cart</a>
                            <a href="checkout.html" class="btn btn-fullwidth btn-bg-primary">Checkout</a>
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
                <form class="searchform">
                    <input type="text" name="popup-search" id="popup-search" class="searchform__input" placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="la la-search"></i></button>
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

    <!-- jQuery JS -->
    <script src="assets/js/vendor.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

@endsection