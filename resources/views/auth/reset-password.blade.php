@extends('auth.layout')

@section('title', 'Reset Password')

@section('card-body')
	<p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
	<form action="/reset-password" method="post">
		@csrf
		<input type="hidden" name="token" value="{{ request()->route('token') }}">
		<input type="hidden" name="email" value="{{ request()->query('email') }}">
		<div class="input-group mb-3">
			<input name="password" type="password" class="form-control" placeholder="Password">
			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-lock"></span>
				</div>
			</div>
		</div>
		<div class="input-group mb-3">
			<input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-lock"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<button type="submit" class="btn btn-primary btn-block">Perbarui password</button>
			</div>
			<!-- /.col -->
		</div>
	</form>
@endsection
