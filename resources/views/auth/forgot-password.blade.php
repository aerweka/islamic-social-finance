@extends('auth.layout')

@section('title', 'Forgot Password')

@section('card-body')
	@if (session('status'))
		<div class="mb-4 font-medium text-sm text-green-600">
			{{ session('status') }}
		</div>
	@endif
	<p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
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
		<div class="row">
			<div class="col-12">
				<button type="submit" class="btn btn-primary btn-block">Request new password</button>
			</div>
			<!-- /.col -->
		</div>
	</form>
@endsection
