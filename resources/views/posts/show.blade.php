@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Post Detail</div>

                <div class="card-body">
                    <div>
                        <b>{{$post->title}}</b>
                    </div>
                    <img src="{{$post->image}}" alt="">
                    <p>{{$post->description}}</p>
                </div>
            </div>

            <div class="mt-2">
                <a class="btn btn-primary btn-sm" href="/posts"><i class="fa-solid fa-circle-arrow-up"></i> Back To All Posts</a>
            </div>
        </div>
    </div>
</div>
@endsection