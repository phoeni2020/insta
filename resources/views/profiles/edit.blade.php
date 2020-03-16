@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <h1>Edit profile</h1>
                    </div>
                    @csrf
                    <div class="row">
                        <label for="title" class="col-md-4 col-form-label ">title</label>
                        <input id="title" type="text"
                               class="form-control @error('title')
                                   is-invalid @enderror" name="title"
                               value="{{ old('title') ?? $user->profile->title}}" required autocomplete="title"
                               autofocus>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label ">description</label>
                        <input id="description" type="text"
                               class="form-control @error('description')
                                   is-invalid @enderror" name="description"
                               value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description"
                               autofocus>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="link" class="col-md-4 col-form-label ">link</label>
                        <input id="link" type="text"
                               class="form-control @error('link')
                                   is-invalid @enderror" name="link"
                               value="{{ old('link') ?? $user->profile->link}}"
                               autofocus>
                        @error('link')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                        <input id="image" type="file"
                               class="form-control-file @error('image')
                                   is-invalid @enderror" name="image"
                               autofocus>
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row pt-5 ">
                        <button class="btn btn-primary">Update info</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
