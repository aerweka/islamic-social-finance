@extends('auth.layout')

@section('title', 'Register')

@section('card-body')
<p class="login-box-msg">Buat akun baru</p>

<form action="/register" method="post">
	@csrf
	<h6>Nama <span class="text-red">*</span></h6>
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
	<h6>Email <span class="text-red">*</span></h6>
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
	<h5 class="text-muted">Alamat Laznas</h5>
	<h6>Jalan <span class="text-red">*</span></h6>
	<div class="input-group mb-3">
		<input name="alamat_jalan" type="text" class="form-control" placeholder="Alamat instansi laznas">
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-road"></span>
			</div>
		</div>
	</div>
	@error('alamat_jalan')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<h6>Provinsi <span class="text-red">*</span></h6>
	<div class="input-group mb-3">
		<select class="form-control" name="alamat_prov" id="alamat_prov">
			@foreach ($provinces as $prov)
			<option value="{{$prov->code}}">{{$prov->name}}</option>
			@endforeach
		</select>
	</div>
	@error('alamat_prov')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<h6>Kabupaten/Kota <span class="text-red">*</span></h6>
	<div class="input-group mb-3">
		<select class="form-control" name="alamat_kabkot" id="alamat_kabkot">
			<option value="">Pilih Kabupaten/Kota</option>
		</select>
	</div>
	@error('alamat_kabkot')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<h6>Kecamatan <span class="text-red">*</span></h6>
	<div class="input-group mb-3">
		<select class="form-control" name="alamat_kec" id="alamat_kec">
			<option value="">Pilih Kecamatan</option>
		</select>
	</div>
	@error('alamat_kec')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<h6>Desa <span class="text-red">*</span></h6>
	<div class="input-group mb-3">
		<select class="form-control" name="alamat_desa" id="alamat_desa">
			<option value="">Pilih Desa</option>
		</select>
	</div>
	@error('alamat_desa')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<h5 class="text-muted">Informasi Laznas</h5>
	<h6>Nama Instansi <span class="text-red">*</span></h6>
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
	<h6>Nama Direktur <span class="text-red">*</span></h6>
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
	<h6>Tingkat Instansi <span class="text-red">*</span></h6>
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
	<h6>No Telpon <span class="text-red">*</span></h6>
	<div class="input-group mb-3">
		<input name="no_telpon_laznas" type="text" class="form-control" placeholder="Telpon laznas">
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-phone"></span>
			</div>
		</div>
	</div>
	@error('no_telpon_laznas')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<h6>Nomor Rekomendasi Pembuatan</h6>
	<div class="input-group mb-3">
		<input name="no_rekomendasi_pembuatan" type="text" class="form-control"
			placeholder="Nomor Rekomendasi Pembuatan">
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-lock"></span>
			</div>
		</div>
	</div>
	@error('no_rekomendasi_pembuatan')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<h6>Tanggal Rekomendasi Pembuatan</h6>
	<div class="input-group mb-3">
		<input name="tgl_rekomendasi_pembuatan" type="date" class="form-control">
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-calendar-alt"></span>
			</div>
		</div>
	</div>
	@error('tgl_rekomendasi_pembuatan')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<h6>Nomor Rekomendasi Perpanjangan</h6>
	<div class="input-group mb-3">
		<input name="no_rekomendasi_perpanjangan" type="text" class="form-control"
			placeholder="No Rekomendasi Perpanjangan">
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-lock"></span>
			</div>
		</div>
	</div>
	@error('no_rekomendasi_perpanjangan')
	<p class="text-red">{{ $message }}</p>
	@enderror
	<h6>Password <span class="text-red">*</span></h6>
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
	<h6>Konfirmasi Password <span class="text-red">*</span></h6>
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