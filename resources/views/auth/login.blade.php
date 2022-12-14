@extends('auth.layout')

@section('title', 'Sign In')

@section('card-body')
	<form action="/login" method="post">
		@csrf
		<div class="input-group mb-3">
			<input name="email" type="email" class="form-control" placeholder="Email">
			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-envelope"></span>
				</div>
			</div>
		</div>
		@error('email')
			<p class="text-red">{{ $message }}</p>
		@enderror
		<div class="input-group mb-3">
			<input name="password" type="password" class="form-control" placeholder="Password">
			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-lock"></span>
				</div>
			</div>
		</div>
		@error('password')
			<p class="text-red">{{ $message }}</p>
		@enderror
		<div class="row">
			<!-- /.col -->
			<div class="col-4">
				<button type="submit" class="btn btn-primary btn-block">Sign In</button>
			</div>
			<!-- /.col -->
		</div>
	</form>

	<p class="mb-1">
		<a href="/forgot-password">Lupa password?</a>
	</p>
	<p class="mb-0">
		<a href="/register" class="text-center">Buat akun baru</a>
	</p>
@endsection
