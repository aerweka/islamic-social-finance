@extends('auth.layout')

@section('title', 'Register')

@section('card-body')
	<p class="login-box-msg">Register a new membership</p>

	<form action="/register" method="post">
		@csrf
		<div class="input-group mb-3">
			<input name="name" type="text" class="form-control" placeholder="Full name">
			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-user"></span>
				</div>
			</div>
		</div>
		<div class="input-group mb-3">
			<input name="email" type="email" class="form-control" placeholder="Email">
			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-envelope"></span>
				</div>
			</div>
		</div>
		<div class="input-group mb-3">
			<input name="password" type="password" class="form-control" placeholder="Password">
			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-lock"></span>
				</div>
			</div>
		</div>
		<div class="input-group mb-3">
			<input name="password_confirmation" type="password" class="form-control" placeholder="Retype password">
			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-lock"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<button type="submit" class="btn btn-primary btn-block">Register</button>
			</div>
			<!-- /.col -->
		</div>
	</form>

	<a href="/login" class="text-center">Sudah punya akun</a>
@endsection
