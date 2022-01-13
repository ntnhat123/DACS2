@extends('layouts.app', ['page' => 'Danh sách sản phẩm', 'pageSlug' => 'products', 'section' => 'inventory'])

@section('content')

{{-- {{dd($products)}} --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Các sản phẩm</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">Thêm sản phẩm</a>
                        </div>
                        
                    </div>
                </div>
                <form method="get" action="{{ route('search') }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-name">Tìm kiếm</label>
                        <input  type="text" name="search" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Search..."  required autofocus>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">Tìm kiếm</button>
                        </div>
            
                        @include('alerts.feedback', ['field' => 'name'])
                    </div>
            
                </form>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">Thể loại</th>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Giá </th>
                                <th scope="col">Giá cũ</th>
                                <th scope="col">Số lượng hiện có</th>
                                <th scope="col">Đã bán</th>
                                <th scope="col" width="300px;">Mô tả</th>

                                <th scope="col">Ảnh</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td><a href="{{ route('categories.show', $product->category) }}">{{ $product->category->name }}</a></td>
                                        
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>{{ $product->stock_defective }}</td>
                                        <td>{{ $product->solds->sum('qty') }}</td>
                                        <td>{{ $product->description }}</td>
                                        
                                        <td><img src="{{asset("/assets/img/products/".$product->image) }}"width="100px;" height="100px;"></td>
                                       
                                        <td class="td-actions text-right">
                                            <a href="{{ route('products.show', $product) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Xem chi tiết">
                                                <i class="tim-icons icon-zoom-split"></i>
                                            </a>
                                            <a href="{{ route('products.edit', $product) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Chỉnh sửa sản phẩm">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('products.destroy', $product) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Xóa sản phẩm" onclick="confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?') ? this.parentElement.submit() : ''">
                                                    <i class="tim-icons icon-simple-remove"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
               
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end">
                        {{ $products->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection