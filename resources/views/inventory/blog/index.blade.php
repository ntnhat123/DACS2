@extends('layouts.app', ['page' => 'New Blog', 'pageSlug' => 'blogs', 'section' => 'inventory'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">

                        <div class="col-8">
                            <h4 class="card-title">Blogs</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{route('blog.create')}}" class="btn btn-sm btn-primary">Thêm Blogs</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col" width="400px;">Tiêu đề</th>
                                <th scope="col" width="550px;">Mô tả</th>

                                <th scope="col">Ảnh</th>
                                
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->description }}</td>    
                                        <td><img src="{{asset("/assets/img/blog/".$blog->image) }}"width="100px;" height="100px;"></td>

                                        
                                       
                                        <td class="td-actions text-right">
                                            <a href="{{ route('blog.show', $blog) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Xem chi tiết">
                                                <i class="tim-icons icon-zoom-split"></i>
                                            </a>
                                            <a href="{{ route('blog.edit', $blog) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Sửa danh mục">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="{{ route('blog.destroy', $blog) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Xóa" onclick="confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?') ? this.parentElement.submit() : ''">
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
@endsection
