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
                        <h1 class="page-title">Oder</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Oder</span></li>
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
                       
                        
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h1>Thông tin khi mua hàng</h1>
                                    
                                </div>
                        
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="post" action="/orderclient"  >
                                        @csrf
                                        
                                        <div class="pl-lg-5">
                                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} ">
                                                <label class="form-control-label" for="input-name">Tên</label>
                                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nhập tên..." value="{{ old('name') }}" required autofocus >
                                                @include('alerts.feedback', ['field' => 'name'])
                                            </div>
                                            <div class="row">
                                                <div class="col-1">
                                                    <label class="form-control-label" for="input-document_type">Màu</label>
                                                    <select name="document_type" id="input-document_type" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                                                        @foreach (['V', 'Đ', 'T', 'X'] as $document_type)
                                                            @if($document_type == old('document_type'))
                                                                <option value="{{$document_type}}" selected>{{$document_type}}</option>
                                                            @else
                                                                <option value="{{$document_type}}">{{$document_type}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label class="form-control-label" for="input-document_id">Số lượng mua</label>
                                                    <input type="number" name="document_id" id="input-document_id" class="form-control form-control-alternative{{ $errors->has('document_id') ? ' is-invalid' : '' }}" placeholder="Số lượng mua" value="{{ old('document_id') }}" required>
                                                    @include('alerts.feedback', ['field' => 'document_id'])
            
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email">Email</label>
                                                <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}" required>
                                                @include('alerts.feedback', ['field' => 'email'])
                                            </div>
                                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-phone">Số điện thoại</label>
                                                <input type="text" name="phone" id="input-phone" class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Số điện thoại" value="{{ old('phone') }}" required>
                                                @include('alerts.feedback', ['field' => 'phone'])
                                            </div>
            
            
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success mt-4">Lưu</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        
                                <!-- Modal footer -->
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->

      


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