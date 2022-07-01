@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Post</div>
                    <div class="card-body">
                        <form action="/posts" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control {{$errors->has('title') ? 'border-danger' : ''}}" id="title" name="title" value="{{old('title')}}">
                                <small class="form-text text-danger">{{$errors->first('title')}}</small>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="text" class="form-control {{$errors->has('image') ? 'border-danger' : ''}}" id="image" name="image" placeholder="https://picsum.photos/200" value="{{old('image')}}">
                                <small class="form-text text-danger">{{$errors->first('image')}}</small>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control {{$errors->has('description') ? 'border-danger' : ''}}" id="description" name="description" rows="5">{{old('description')}}</textarea>
                                <small class="form-text text-danger">{{$errors->first('description')}}</small>
                            </div>

                            <input class="btn btn-primary mt-4" type="submit" value="Save Post">
                        </form>
                        <a class="btn btn-primary float-right" href="/posts"><i class="fa-solid fa-circle-arrow-up"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection