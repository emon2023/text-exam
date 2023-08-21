@extends('master')


@section('title')
    Home Page
@endsection



@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{asset($blog->image)}}" alt="" height="250">
                            <div class="card-header">
                                <h2>{{$blog->title}}</h2>
                                <p>{{substr($blog->description,0,100)}}.....</p>
                                <hr/>
                                <a href="" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
