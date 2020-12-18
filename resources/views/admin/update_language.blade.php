@extends('admin.base_admin')

@section('content')
<div class="signup-form">
    {{-- <form action="{{ route('admin.store_lang') }}" method="post"> --}}
    <form action="{{url('update_lang_done/'.$lang->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <h1 class="text-center">Add Language</h1>
        <hr>

        <div class="form-group">
            <label for="l_name">Language Name*</label>
            <input id="l_name" type="text" class="form-control @error('l_name') is-invalid @enderror" name="l_name"  value="{{ $lang->l_name }}" required autocomplete="l_name" autofocus>
            @error('l_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
        <div class="row">
            <div class="col">
                <input type="file" name="lang_logo" class="form-control" value="{{ $lang->lang_logo }}">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
        </div>



@endsection


{{-- for image upload --}}
{{-- https://www.w3adda.com/blog/laravel-5-8-simple-image-upload-validation
https://medium.com/@mactavish10101/how-to-upload-images-in-laravel-7-7a7f9982ebba --}}
