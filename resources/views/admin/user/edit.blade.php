@extends('layouts.master')

@section('main-content')
    <div class="breadcrumb">
        <h1>Version 1</h1>
        <ul>
            <li><a href="">Dashboard</a></li>
            <li>User</li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">Edit User</h4>
                    <form action="{{ route('survey.user.update', ['user' => $data->id]) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" value="{{ $data->name }}" id="name"
                                placeholder="Nama lengkap">
                        </div>
                        @error('name')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="text" class="form-control" value="{{ $data->email }}" id="email"
                                placeholder="name@example.com">
                        </div>
                        @error('email')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="nama_laznas">Nama Laznas</label>
                            <input type="text" class="form-control" value="{{ $data->nama_laznas }}" id="nama_laznas"
                                placeholder="name@example.com">
                        </div>
                        @error('nama_laznas')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="alamat_laznas">Alamat Laznas</label>
                            <input type="text" class="form-control" value="{{ $data->alamat_laznas }}" id="alamat_laznas"
                                placeholder="name@example.com">
                        </div>
                        @error('alamat_laznas')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="tingkatan_laznas">Tingkatan Laznas</label>
                            <select name="tingkatan_laznas" id="tingkatan_laznas" class="form-control">
                                <option value="pusat" {{ $data->tingkatan_laznas == 'pusat' ? 'selected' : '' }}>Pusat
                                </option>
                                <option value="provinsi" {{ $data->tingkatan_laznas == 'provinsi' ? 'selected' : '' }}>
                                    Provinsi</option>
                                <option value="kota_kabupaten"
                                    {{ $data->tingkatan_laznas == 'kota_kabupaten' ? 'selected' : '' }}>Kota/kabupaten
                                </option>
                                <option value="mikro" {{ $data->tingkatan_laznas == 'mikro' ? 'selected' : '' }}>Mikro
                                </option>
                            </select>
                        </div>
                        @error('tingkatan_laznas')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="no_telpon_laznas">Telpon Laznas</label>
                            <input type="text" class="form-control" value="+62{{ $data->no_telpon_laznas }}"
                                id="no_telpon_laznas" placeholder="name@example.com">
                        </div>
                        @error('no_telpon_laznas')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
