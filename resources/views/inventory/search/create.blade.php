@extends('layouts.app', ['page' => 'Search', 'pageSlug' => 'products', 'section' => 'inventory'])

@section('content')
<div class="container">
    <div class="card-header">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title">Search</h4>
            </div>
            <div class="col-4 text-right">
                <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">New product</a>
            </div>
        </div>
    </div>

    <form method="get" action="{{ route('search') }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        {{-- <input type="text" name="search" placeholder="Search..." required/>
        <button type="submit">Search</button> --}}


        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <label class="form-control-label" for="input-name">Search</label>
            <input  type="text" name="search" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Search..."  required autofocus>
            <div class="text-center">
                <button type="submit" class="btn btn-success mt-4">Search</button>
            </div>

            @include('alerts.feedback', ['field' => 'name'])
        </div>

    </form>
</div>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">Category</th>
                                <th scope="col">Product</th>
                                <th scope="col">Base Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Faulty</th>
                                <th scope="col">Total Sold</th>
                                <th scope="col">Description</th>

                                <th scope="col">Image</th>
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
                                            <a href="{{ route('products.show', $product) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="More Details">
                                                <i class="tim-icons icon-zoom-split"></i>
                                            </a>
                                            <a href="{{ route('products.edit', $product) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Product">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('products.destroy', $product) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Product" onclick="confirm('Are you sure you want to remove this product? The records that contain it will continue to exist.') ? this.parentElement.submit() : ''">
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
               
            </div>
        </div>
    </div>
    </div>   

@endsection