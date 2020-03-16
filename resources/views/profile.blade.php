@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{$user->profile->image}}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5 ">
            <div class="d-flex justify-content-between align-baseline" >
                <div class="d-flex align-items-center pb-3 ">
                    <div class="h4">{{$user->username}}</div>
                    <btnfollow userid="{{ $user->id }}"></btnfollow>
                </div>
                @can('update',$user->profile)
                    <a href="/posts/create">add new post</a>
                @endcan
            </div>
            @can('update',$user->profile)
            <a href="/profile/edit/{{$user->id}}">edit profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}} </strong> Posts</div>
                <div class="pr-5"><strong>OOP=>MVC</strong></div>
                <div class="pr-5"><strong>Laravel FrameWork</strong></div>
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->link ?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4"><a href="/posts/{{$post->id}}"><img src="/storage/{{$post->image}}" class="w-100" alt=""></a></div>
        @endforeach
    </div>
</div>
@endsection
