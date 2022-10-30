@extends('auth.layout')

@section('title', 'Forgot Password')

@section('card-body')
	@if (session('status'))
		<p class="text-success">
			{{ session('status') }}
		</p>
	@endif
	<p class="login-box-msg">Masukkan email anda untuk buat sandi baru.</p>
	<form action="/forgot-password" method="post">
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
		<div class="row">
			<div class="col-12">
				<button type="submit" class="btn btn-primary btn-block">Kirim email</button>
			</div>
			<!-- /.col -->
		</div>
	</form>
@endsection
