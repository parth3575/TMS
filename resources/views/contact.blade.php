@extends('base')
@section('title', 'Contact')
@section('content')
<div class="container-xl">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
				<h1>Contact Us</h1>
				<p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
				<form action="contact-us" method="post">
                    @csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputFirstName">First Name</label>
                                <input type="text" class="form-control @error('fname') is-invalid @enderror" placeholder="First Name" name="fname" id="inputFirstName" required>
                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputLastName">Last Name</label>
                                <input type="text" class="form-control @error('lname') is-invalid @enderror" placeholder="Last Name" name="lname" id="inputLastName" required>
                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail">Email Address</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" id="inputEmail" required>
                        @error('lname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
                        <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message" id="inputMessage" rows="5" required></textarea>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<input type="submit" class="btn btn-primary" value="Send">
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
