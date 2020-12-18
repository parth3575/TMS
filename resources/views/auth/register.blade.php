@extends('base')
@section('title', 'Register')
@section('content')
<div class="signup-form">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <h1 class="text-center">REGISTER</h1>
        <hr>
        <div class="form-group">
			<div class="row">
				<div class="col">
                    <label for="fname">First Name*</label>
                    <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="fname"  value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                    @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
				<div class="col">
                    <label for="mname">Middle Name*</label>
                    <input id="mname" type="text" class="form-control @error('name') is-invalid @enderror" name="mname"  value="{{ old('mname') }}" required autocomplete="mname" autofocus>
                    @error('mname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
				<div class="col">
                    <label for="lname">Last Name*</label>
                    <input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" name="lname"  value="{{ old('lname') }}" required autocomplete="fname" autofocus>
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
            <input type="number" class="form-control @error('enrollment_no') is-invalid @enderror"  name="enrollment_no" id="enrollment_no" required>
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
                    <input type="number" class="form-control @error('roll_no') is-invalid @enderror"  name="roll_no" id="rollno" required>
                     @error('roll_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

				<div class="col">
                    <label for="gender">Gender*</label>
                    <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required>
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
            <input type="date" class="form-control @error('dob') is-invalid @enderror"  name="dob" id="dob" required>
            @error('dob')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="contact_no">Contact No.*</label>
            <input type="number" class="form-control @error('contact_no') is-invalid @enderror"  name="contact_no" id="contact_no" required>
            @error('contact_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email*</label>
        	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

		<div class="form-group">
            <label for="password">Password*</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
		<div class="form-group">
            <label for="password-confirm">Confirm Password*</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  required autocomplete="new-password">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{-- {{ __('Remember Me') }} --}}
                I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief and I undertake to inform you of any changes therein,immediately. In case any of the above information is found to be false or untrue or misleading or misrepresenting, I am aware that I may be held liable for it
            </label>
        </div><br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
    </form>
    <div class="text-center">Already have an account? <a href="{{ url("login") }}">Login</a></div><br>
</div>
@endsection



{{-- @extends('base')

@section('content')
<div class="signup-form">
    <form action="{{ route('register') }}" method="post">
        @csrf
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col">
                    <label for="fname">First Name*</label>
                    <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="fname"  value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                    @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
				<div class="col">
                    <label for="mname">Middle Name*</label>
                    <input id="mname" type="text" class="form-control @error('name') is-invalid @enderror" name="mname"  value="{{ old('mname') }}" required autocomplete="mname" autofocus>
                    @error('mname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
				<div class="col">
                    <label for="lname">Last Name*</label>
                    <input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" name="lname"  value="{{ old('lname') }}" required autocomplete="fname" autofocus>
                    @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
			</div>
        </div>

        <div class="form-group">
            <label for="enrollno">Enrollment No.*</label>
            <input type="number" class="form-control @error('enroll_no') is-invalid @enderror"  name="enroll_no" id="enrollno" required>
            @error('enroll_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
			<div class="row">
				<div class="col">
                    <label for="rollno">Roll No.*</label>
                    <input type="number" class="form-control @error('roll_no') is-invalid @enderror"  name="roll_no" id="rollno" required>
                     @error('roll_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

				<div class="col">
                    <label for="gender">Gender*</label>
                    <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
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
            <label for="email">Email*</label>
        	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

		<div class="form-group">
            <label for="password">Password*</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
		<div class="form-group">
            <label for="password-confirm">Confirm Password*</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
        </div>

        <div class="form-group">
            <input class="form-check-input" type="checkbox" required="required">
            <label class="form-check-label">
                I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>*
            </label>
        </div>


		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="{{ url("login") }}">Login</a></div>
</div><br>

@endsection --}}

