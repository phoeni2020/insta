@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{id}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <h1>Add new post</h1>
                    </div>
                    @csrf
                    <div class="row">
                        <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>
                        <input id="email" type="text"
                               class="form-control @error('caption')
                                   is-invalid @enderror" name="cptian"
                               value="{{ old('caption') }}" required autocomplete="caption"
                               autofocus>
                        @error('caption')
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
                               required autocomplete="image"
                               autofocus>
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row pt-5 ">
                        <button class="btn btn-primary">Add new post</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
