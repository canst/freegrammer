@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="POST">
            @@csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Add New Post</h1>
                    </div>
                    <div class="row form-group">
                        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                        <div>
                            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                                name="caption" value="{{ old('caption') }}" required autocomplete="caption">

                            @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image"
                    value="{{ old('image') }}" required autocomplete="image">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row pt-4">
                <button class="btn btn-primary">Add New Post</button>
            </div>
        </form>

    </div>
@endsection
