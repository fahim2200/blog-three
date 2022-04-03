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
                        <tr>
                            <th>Blog Id</th>
                            <td>{{$blog->id}}</td>
                        </tr>
                        <tr>
                            <th>Blog Sub Title</th>
                            <td>{{$blog->sub_title}}</td>
                        </tr>
                        <tr>
                            <th>Blog Short Description</th>
                            <td>{!! $blog->short_description !!}</td>
                        </tr>
                        <tr>
                            <th>Blog Long Description</th>
                            <td>{!! $blog->long_description !!}</td>
                        </tr>
                        <tr>
                        <th>Blog Image</th>
                        <td><img src="{{asset($blog->image)}}" alt="" height="150" width="200"/></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection



