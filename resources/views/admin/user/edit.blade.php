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
                        <h5 class="text-muted">Alamat Laznas</h5>
                        <div class="form-group">
                            <label for="alamat_jalan">Jalan</label>
                            <input type="text" class="form-control" value="{{ $data->alamat_jalan }}" id="alamat_jalan"
                                placeholder="name@example.com">
                        </div>
                        @error('alamat_jalan')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="alamat_prov">Provinsi</label>
                            <select class="form-control" name="alamat_prov" id="alamat_prov">
                                @foreach ($provinces as $prov)
                                    <option value="{{ $prov->code }}" {{ $prov->code == $data->prov ? 'selected' : '' }}>
                                        {{ $prov->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('alamat_prov')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="alamat_kabkot">Kabupaten/Kota</label>
                            <select class="form-control" name="alamat_kabkot" id="alamat_kabkot">
                                @foreach ($cities as $city)
                                    <option value="{{ $city->code }}"
                                        {{ $city->code == $data->kabkot ? 'selected' : '' }}>{{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('alamat_kabkot')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="alamat_kec">Kecamatan</label>
                            <select class="form-control" name="alamat_kec" id="alamat_kec">
                                @foreach ($districts as $dis)
                                    <option value="{{ $dis->code }}" {{ $dis->code == $data->kec ? 'selected' : '' }}>
                                        {{ $dis->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('alamat_kec')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="alamat_desa">Desa</label>
                            <select class="form-control" name="alamat_desa" id="alamat_desa">
                                @foreach ($villages as $vil)
                                    <option value="{{ $vil->code }}" {{ $vil->code == $data->desa ? 'selected' : '' }}>
                                        {{ $vil->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('alamat_desa')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <h5 class="text-muted">Informasi Laznas</h5>
                        <div class="form-group">
                            <label for="nama_direktur_laznas">Nama Direktur</label>
                            <input type="text" class="form-control" value="{{ $data->nama_direktur_laznas }}"
                                id="nama_direktur_laznas" placeholder="name@example.com">
                        </div>
                        @error('nama_direktur_laznas')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="tingkatan_laznas">Tingkatan</label>
                            <select class="form-control" name="tingkatan_laznas" id="tingkatan_laznas" class="form-control">
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
                            <label for="no_telpon_laznas">Telpon</label>
                            <input type="text" class="form-control" value="+62{{ $data->no_telpon_laznas }}"
                                id="no_telpon_laznas" placeholder="name@example.com">
                        </div>
                        @error('no_telpon_laznas')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="no_rekomendasi_pembuatan">No Rekomendasi Pembuatan</label>
                            <input type="text" class="form-control" value="{{ $data->no_rekomendasi_pembuatan }}"
                                id="no_rekomendasi_pembuatan" placeholder="xxxxxxx">
                        </div>
                        @error('no_rekomendasi_pembuatan')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="tgl_rekomendasi_pembuatan">Tanggal Rekomendasi Pembuatan</label>
                            <input type="date" class="form-control" value="{{ $data->tgl_rekomendasi_pembuatan }}"
                                id="tgl_rekomendasi_pembuatan" placeholder="xxxxxxx">
                        </div>
                        @error('tgl_rekomendasi_pembuatan')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="no_rekomendasi_perpanjangan">No Rekomendasi Perpanjangan</label>
                            <input type="text" class="form-control" value="{{ $data->no_rekomendasi_perpanjangan }}"
                                id="no_rekomendasi_perpanjangan" placeholder="xxxxxxx">
                        </div>
                        @error('no_rekomendasi_perpanjangan')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-js')
    <script type="text/javascript">
        $(document).ready(function() {
            // Country dependent ajax
            $("#alamat_prov").on("change", function() {
                var provinceCode = $(this).val();
                $.ajax({
                    url: "{{ route('get_kabkot') }}?provinceCode=" + $(this).val(),
                    type: "GET",
                    success: function(data) {
                        $("#alamat_kabkot").html(data);
                    }
                });
            });

            $("#alamat_kabkot").on("change", function() {
                var cityCode = $(this).val();
                $.ajax({
                    url: `{{ route('get_kec') }}?cityCode=` + cityCode,
                    type: "GET",
                    cache: false,
                    data: {
                        cityCode: cityCode
                    },
                    success: function(data) {
                        $("#alamat_kec").html(data);
                    }
                });
            });

            $("#alamat_kec").on("change", function() {
                var districtCode = $(this).val();
                $.ajax({
                    url: `{{ route('get_desa') }}?districtCode=` + districtCode,
                    type: "GET",
                    cache: false,
                    data: {
                        districtCode: districtCode
                    },
                    success: function(data) {
                        $("#alamat_desa").html(data);
                    }
                });
            });
        });
    </script>
@endsection
