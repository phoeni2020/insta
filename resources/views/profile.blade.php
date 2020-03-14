@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fcai2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/87836668_188181042481830_8904715880449966080_n.jpg?_nc_ht=instagram.fcai2-1.fna.fbcdn.net&_nc_ohc=fkxxr0VhmFIAX-Yox6F&oh=d8e5ca06dbefc608482a066ca4c370b9&oe=5E9B2B71" class="rounded-circle">
        </div>
        <div class="col-9 pt-5 ">
            <div class="d-flex justify-content-between align-baseline" >
            <div><h2>{{$data->username}}</h2></div>
            <a href="/p/create">add new post</a>
            </div>
            <a href="/profile/{{$data->id}}/edit">edit profile</a>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$data->posts->count()}} </strong> Posts</div>
                <div class="pr-5"><strong>OOP=>MVC</strong></div>
                <div class="pr-5"><strong>Laravel FrameWork</strong></div>
            </div>
            <div class="pt-3 font-weight-bold">{{$data->profile->title}}</div>
            <div>{{$data->profile->description}}</div>
            <div><a href="#">{{$data->profile->link ?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($data->posts as $post)
        <div class="col-4 pb-4"><a href="/p/{{$post->id}}"><img src="/storage/{{$post->image}}" class="w-100" alt=""></a></div>
        @endforeach
    </div>
</div>
@endsection