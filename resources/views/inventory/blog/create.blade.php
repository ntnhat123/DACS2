@extends('layouts.app', ['page' => 'New Blog', 'pageSlug' => 'blogs', 'section' => 'inventory'])

@section('content')
   
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Blog</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{route('blog.index')}}" class="btn btn-primary">Quay lại</a>

                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <form action="{{route('blog.store')}}" method="post" autocomplete="off">
                            <h6 class="heading-small text-muted mb-4">Thông tin trang Blog</h6>
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-title">Tiêu đề</label>
                                    <input type="text" name="title" id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Tiêu đề" value="{{ old('title') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'title'])
                                </div>
                                <div class="form-group">
                                    <label for="input-description" class="form-control-label">Mô tả</label>
                                    <input type="text" name="description" id="input-description" class="form-control form-control-alternative" placeholder="Mô tả" required autofocus value="{{ old('description') }}" >
                                    @include('alerts.feedback', ['field' => 'description'])

                                </div>
                                <div class="form-group">
                                    
                                    <label class="form-control-label" for="input-image">Ảnh</label>
                                    <input type="file" name="image" accept="image/*" id="input-image" class="form-control form-control-alternative" value="{{old('image')}}" multiple required>
                                
                                
                                    @include('alerts.feedback', ['field' => 'image'])
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Lưu</button>
                                </div>
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
