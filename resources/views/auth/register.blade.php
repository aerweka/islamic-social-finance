@extends('auth.layout')

@section('title', 'Register')

@section('card-body')
<p class="login-box-msg">Buat akun baru</p>

<form action="/register" method="post">
	@csrf
	<div class="input-group mb-3">
		<input name="name" type="text" class="form-control" placeholder="Nama pengguna">
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-user"></span>
			</div>
		</div>
	</div>
	@error('name')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<div class="input-group mb-3">
		<input name="email" type="email" class="form-control" placeholder="example@">
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
		<input name="nama_laznas" type="text" class="form-control" placeholder="Nama instansi laznas">
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-building"></span>
			</div>
		</div>
	</div>
	@error('nama_laznas')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<div class="input-group mb-3">
		<input name="alamat_laznas" type="text" class="form-control" placeholder="Alamat instansi laznas">
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-road"></span>
			</div>
		</div>
	</div>
	@error('alamat_laznas')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<div class="input-group mb-3">
		<input name="nama_direktur_laznas" type="text" class="form-control" placeholder="Nama direktur instansi laznas">
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-user"></span>
			</div>
		</div>
	</div>
	@error('nama_direktur_laznas')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<div class="input-group mb-3">
		<select name="tingkatan_laznas" id="tingkatan_laznas" class="form-control">
			<option value="#" selected disabled>Tingkatan instansi laznas</option>
			<option value="pusat">Pusat</option>
			<option value="provinsi">Provinsi</option>
			<option value="kota_kabupaten">Kota/kabupaten</option>
			<option value="mikro">Mikro</option>
		</select>
	</div>
	@error('tingkatan_laznas')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<div class="input-group mb-3">
		<input name="no_telpon_laznas" type="text" class="form-control" placeholder="+62">
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-phone"></span>
			</div>
		</div>
	</div>
	@error('no_telpon_laznas')
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