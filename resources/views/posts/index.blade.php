@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">All The Posts</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($posts as $post)
                            <li class="list-group-item">
                                <form action="/posts/{{$post->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="d-flex justify-content-end"><button type="submit" class="btn btn-sm btn-danger mb-2" ><i class="fa-solid fa-trash-can"></i> Delete</button></div>
                                </form>

                                <div class="d-flex justify-content-end"><a class="btn btn-sm btn-warning " href="/posts/{{$post->id}}/edit "><i class="fa-solid fa-pen-to-square"></i> Edit Post</a></div>
                                <div><a title="show the details" href="/posts/{{$post->id}} ">{{$post->title}}</a></div>  
                                <img src="{{$post->image}}" alt="">
                                <p>{{$post->description}}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-2">
                <a class="btn btn-success btn-sm" href="/posts/create"><i class="fa-solid fa-circle-plus"></i> Create New Post</a>
            </div>
        </div>
    </div>
</div>
@endsection