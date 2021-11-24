@extends('layouts.app', ['page' => 'New Category', 'pageSlug' => 'categories', 'section' => 'inventory'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">New Blog</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">Blog to list</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('blog.update',$blog) }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">Blog Information</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">Title</label>
                                    <input type="text" name="title" id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Name" value="{{ old('title',$blog->title) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">Description</label>
                                    <input type="text" name="description" id="input-description" class="form-control form-control-alternative" placeholder="Description" value="{{ old('description',$blog->description) }}" required>
                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>

                                 <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                                    
                                        <label class="form-control-label" for="input-image">Images</label>
                                        <input type="file" name="image" accept="image/*" id="input-image" class="form-control form-control-alternative" value="{{old('image',$blog->image)}}" multiple required>
                                    
                                    
                                    @include('alerts.feedback', ['field' => 'image'])
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
