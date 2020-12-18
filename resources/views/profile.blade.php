@extends('base')
@section('title', 'Profile')
@section('content')
<div class="profile-form">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <h1 class="text-center">Profile</h1>
        <hr>
        <div class="form-group">
			<div class="row">
				<div class="col">
                    <label for="fname">First Name*</label>
                    <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror"  name="fname"  value="{{ Auth::user()->fname }}" required autocomplete="fname" autofocus>
                    @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
				<div class="col">
                    <label for="mname">Middle Name*</label>
                    <input id="mname" type="text" class="form-control @error('name') is-invalid @enderror" name="mname"  value="{{ Auth::user()->mname }}" required autocomplete="mname" autofocus>
                    @error('mname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
				<div class="col">
                    <label for="lname">Last Name*</label>
                    <input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" name="lname"  value="{{ Auth::user()->lname }}" required autocomplete="fname" autofocus>
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
            <input type="number" class="form-control @error('enrollment_no') is-invalid @enderror"  name="enrollment_no" value="{{ Auth::user()->enrollment_no }}" id="enrollment_no" required disabled>
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
                    <input type="number" class="form-control @error('roll_no') is-invalid @enderror" value="{{ Auth::user()->roll_no }}" name="roll_no" id="rollno" required>
                     @error('roll_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

				<div class="col">
                    <label for="gender">Gender*</label>
                    <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ Auth::user()->gender }}" required>
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
            <input type="date" class="form-control @error('dob') is-invalid @enderror" value="{{ Auth::user()->dob }}" name="dob" id="dob" required>
            @error('dob')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="contact_no">Contact No.*</label>
            <input type="number" class="form-control @error('contact_no') is-invalid @enderror"  name="contact_no" value="{{ Auth::user()->contact_no }}" id="contact_no" required>
            @error('contact_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email*</label>
        	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ Auth::user()->email }}" required autocomplete="email" disabled>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </form>
</div>
@endsection
