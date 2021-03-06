@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit TheS Post</div>
                    <div class="card-body">
                        <form action="/tags/{{$tag->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control {{$errors->has('name') ? 'border-danger' : ''}}" id="name" name="name" value="{{old('name') ?? $tag->name}}">
                                <small class="form-text text-danger">{{$errors->first('name')}}</small>
                            </div>

                            <div class="form-group">
                                <label for="style">Style</label>
                                <input type="text" class="form-control {{$errors->has('style') ? 'border-danger' : ''}}" id="style" name="style" placeholder="https://picsum.photos/200" value="{{old('style') ?? $tag->style}}">
                                <small class="form-text text-danger">{{$errors->first('style')}}</small>
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