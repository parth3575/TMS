@extends('admin.base_admin')

@section('content')
<div class="signup-form">
    {{-- <form action="{{ route('admin.store_lang') }}" method="post"> --}}
    {{-- <form action="{{url('import_excel/import')}}" method="post" enctype="multipart/form-data"> --}}
    <form action="{{url('import_excel/import')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center">Import excel file</h1>
        <hr>

        <div class="form-group">
        <div class="row">
            <div class="col">
                <input type="file" name="file" class="form-control">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>
        </div>



@endsection
