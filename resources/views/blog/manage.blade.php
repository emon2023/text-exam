@extends('master')

@section('title')
    Manage Blog Page
@endsection


@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <div class="card">
                    <div class="card-header text-center text-center display-6">Manage All Blog</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{session('message')}}</h4>
                            <table class="table-hover table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>SI NO</th>
                                    <th>Blog Title</th>
                                    <th>Blog Description</th>
                                    <th>Blog Image</th>
                                    <th colspan="3">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>
                                        <img src="{{asset($blog->image)}}" alt="" height="120" width="120">
                                    </td>
                                    <td>
                                        <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>Edit</a>
                                        <a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Sure you want to delete this....')"><i class="fa fa-trash"></i>Delete</a>
                                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-street-view"></i>View</a>
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
    </section>


@endsection
