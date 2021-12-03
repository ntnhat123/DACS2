@extends('layout.app')

@section('content')
<head>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
        <!-- Breadcrumb area Start -->
        <section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/bg/unnamed.png">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Cart</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="page-content-inner ptb--80 pt-md--40 pb-md--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mb-md--50">
                            <form class="cart-form" action="#">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div class="table-content table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>&nbsp;</th>
                                                        <th>&nbsp;</th>
                                                        <th class="text-left">Product</th>
                                                        <th>price</th>
                                                        <th>quantity</th>
                                                        <th>total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $total = 0 @endphp
                                                    @if(session('cart'))
                                                        @foreach(session('cart') as $id => $details)
                                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                                             
                                                            <tr>
                                                                <td class="product-remove text-left"><a href="{{route('remove.from.cart')}}" class="remove-from-cart"><i class="la la-remove"></i></a></td>
                                                                <td class="product-thumbnail text-left">
                                                                    <img src="{{asset('assets/img/products/avatar-large-2.jpg')}}" alt="products">

                                                                </td>
                                                                <td class="product-name text-left wide-column">
                                                                    <h3>
                                                                        <a href="product-details.html">{{ $details['name'] }}</a>
                                                                    </h3>
                                                                </td>
                                                                <td class="product-price">
                                                                    <span class="product-price-wrapper">
                                                                        <span class="money">{{ $details['price'] }}</span>
                                                                    </span>
                                                                </td>
                                                                <td class="product-quantity">
                                                                    <div class="quantity">
                                                                        
                                                                        <input type="number" value="{{ $details['quantity'] }}" class="quantity-input" name="qty" id="qty-1" value="1" min="1">
                                                                    </div>
                                                                </td>
                                                                <td class="product-total-price">
                                                                    <span class="product-price-wrapper">
                                                                        <span class="money">{{ $details['price'] * $details['quantity'] }}</span>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                          
                                                        @endforeach
                                                    @endif 
                                                  
                                                </tbody>
                                            </table>
                                        </div>  
                                    </div>
                                </div>
                                <div class="row no-gutters border-top pt--20 mt--20">
                                    <div class="col-sm-6">
                                        <div class="coupon">
                                            <input type="text" id="coupon" name="coupon" class="cart-form__input" placeholder="Coupon Code">
                                            <button type="submit" class="cart-form__btn">Apply Coupon</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-right">
                                        <button type="submit"  class="cart-form__btn">Clear Cart</button>
                                        <button type="submit" href="{{route('update.cart')}}" class="cart-form__btn">Update Cart</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-collaterals">
                                <div class="cart-totals">
                                    <h5 class="font-size-14 font-bold mb--15">Cart totals</h5>
                                    <div class="cart-calculator">
                                        @php $total = 0 @endphp
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                @php $total += $details['price'] * $details['quantity'] @endphp
                                                 
                                                    <div class="cart-calculator__item order-total">
                                                        <div class="cart-calculator__item--head">
                                                            <span>Total</span>
                                                        </div>
                                                        <div class="cart-calculator__item--value">
                                                            <span class="product-price-wrapper">
                                                                <span class="money">{{$total}}</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                       
                                                @endforeach
                                            @endif 
                                    </div>
                                </div>
                                <a href="index" class="btn btn-size-md btn-shape-square btn-fullwidth">
                                    Proceed To Checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->

      

        <!-- OffCanvas Menu Start -->
       
        <!-- OffCanvas Menu End -->

        <!-- Mini Cart Start -->
        
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
 
    @section('scripts')
    <script type="text/javascript">
      
        $(".update-cart").change(function (e) {
            e.preventDefault();
      
            var ele = $(this);
      
            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id"), 
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                   window.location.reload();
                }
            });
        });
      
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
      
            var ele = $(this);
      
            if(confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
      
    </script>
    @endsection