@extends('master.admin.master')

@section('body')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Manage Tables</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Manage Tables</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Blog</h4>
                    <p class="text-center text-success">{{ Session::get('message') }}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th width="5%">Feature Image</th>
                            <th>Blog Title</th>
                            <th>Sub Title</th>
                            <th>Author Name</th>
                            <th>Category Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><img src="{{ asset($blog->image) }}" alt="" width="100%"></td>
                                <td>{{ $blog->main_title }}</td>
                                <td>{{ $blog->sub_title }}</td>
                                <td>{{ \App\Models\User::find($blog->author_id)->name }}</td>
                                <td>{{ $blog->category->name }}</td>
                                <td class="badge rounded-pill {{ $blog->status == 1 ? 'bg-success' : 'bg-danger' }} text-white m-2">
                                    {{ $blog->status == 1 ? 'Published' : 'Unpublished' }}
                                </td>
                                <td> <a href="{{ route('blog.detail', ['id'=> $blog->id]) }}" class="btn btn-info btn-sm" title="View Blog Detail">
                                        <i class="fa fa-book-open"></i>
                                    </a> <a href="" class="btn btn-primary btn-sm" title="Published Blog">
                                        <i class="fa fa-arrow-up"></i>
                                    </a>
                                    <a href="{{ route('blog.edit', ['id'=> $blog->id]) }}" class="btn btn-success btn-sm" title="Edit Blog">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('blog.delete', ['id'=> $blog->id]) }}" class="btn btn-danger btn-sm" title="Delete Blog">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection



