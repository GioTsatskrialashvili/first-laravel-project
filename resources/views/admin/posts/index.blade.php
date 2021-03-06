@extends('admin.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="">
            Posts
        </h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">
                        <a type="button" class="btn btn-primary" href="{{route('admin.posts.create')}}">Add Post</a>
                    </h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                               
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                
                                @foreach ($data['posts'] as $item)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->id }}</strong></td>
                                    <td>
                                        <img style="width:70px"src="{{asset('storage/images/'.$item->image)}}" alt="">
                                    </td>
                                    
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('admin.posts.edit',['id'=>$item->id])}}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="{{route('admin.posts.delete',['id'=>$item->id])}}">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </a>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                                
                            </tbody>
                        </table>
                        <div class="p-3 " >
                        {{$data['posts']->links('pagination::bootstrap-4')}}
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection