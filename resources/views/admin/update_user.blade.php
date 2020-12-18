@extends('admin.base_admin')
@section('title', 'Register')
@section('content')
<div class="signup-form">
    {{-- <form action="{{ route('admin.store_user') }}" method="post"> --}}
    <form action="{{url('update_user_done/'.$user->id)}}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <h1 class="text-center">Update User</h1>
        <hr>
        <div class="form-group">
			<div class="row">
				<div class="col">
                    <label for="fname">First Name*</label>
                    <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="fname"  value="{{ $user->fname }}" required autocomplete="fname" autofocus>
                    @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
				<div class="col">
                    <label for="mname">Middle Name*</label>
                    <input id="mname" type="text" class="form-control @error('name') is-invalid @enderror" name="mname"  value="{{ $user->mname }}" required autocomplete="mname" autofocus>
                    @error('mname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
				<div class="col">
                    <label for="lname">Last Name*</label>
                    <input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" name="lname"  value="{{ $user->lname }}" required autocomplete="fname" autofocus>
                    @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
			</div>
        </div>

        <div class="form-group">
            <label for="enrollment_no">Enrollment No.*</label>
            <input type="number" class="form-control @error('enrollment_no') is-invalid @enderror"  name="enrollment_no" id="enrollment_no" value="{{ $user->enrollment_no }}" required>
            @error('enrollment_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
			<div class="row">
				<div class="col">
                    <label for="rollno">Roll No.*</label>
                    <input type="number" class="form-control @error('roll_no') is-invalid @enderror"  name="roll_no" id="rollno" value="{{ $user->roll_no }}" required>
                     @error('roll_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

				<div class="col">
                    <label for="gender">Gender*</label>
                    <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $user->gender }}" required>
                        <option value=1>Male</option>
                        <option value=0>Female</option>
                    </select>
                    @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth*</label>
            <input type="date" class="form-control @error('dob') is-invalid @enderror"  name="dob" id="dob" value="{{ $user->dob }}" required>
            @error('dob')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="contact_no">Contact No.*</label>
            <input type="number" class="form-control @error('contact_no') is-invalid @enderror"  name="contact_no" value="{{ $user->contact_no }}" id="contact_no" required>
            @error('contact_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="admin">Is Admin*</label>
        	<input id="admin" type="number" class="form-control @error('admin') is-invalid @enderror" name="admin"  value="{{ $user->usertype }}" required autocomplete="admin" placeholder="enter 1 for creating admin">
            @error('admin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email*</label>
        	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ $user->email }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

		{{-- <div class="form-group">
            <label for="password">Password*</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> --}}

        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
        </div>
    </form>
</div>
@endsection
