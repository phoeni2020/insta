@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" class="w-100" alt="">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-50" style="max-width: 100px" alt="">
                        </div>
                        <span><a class="text-dark font-weight-bold pr-3" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a>
                        <a href="#" class="btn btn-primary"> follow</a>
                        </span>
                    </div>

                    <hr>
                   <p><span class="font-weight-bold"><a class="text-dark" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span>{{$post->cptian}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
