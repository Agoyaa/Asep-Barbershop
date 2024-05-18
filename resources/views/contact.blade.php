@extends('layouts.main')

@section('konten')

<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">You Can Book Us Here or Ask Any Question</p>
							<h1>Contact us</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- end hero area -->

<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Book Here!</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						@if ($errors->any())
						<div>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
				
					<form action="{{ route('booking.store') }}" method="POST">
						@csrf
						<label for="name">Name:</label>
						<input type="text" id="name" name="name" value="{{ old('name') }}"><br><br>
						<label for="no_handphone">No Handphone:</label>
						<input type="text" id="no_handphone" name="no_handphone" value="{{ old('no_handphone') }}"><br><br>
						<label for="jamcukur">Jam Cukur (HH:MM):</label>
						<input type="text" id="jamcukur" name="jamcukur" value="{{ old('jamcukur') }}"><br><br>
						<button type="submit">Submit</button>
					</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Shop Address</h4>
							<p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Shop Hours</h4>
							<p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->
	@endsection