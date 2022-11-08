@extends('layouts.master')

@section('page-css')
<link rel="stylesheet" href="{{asset('assets/styles/vendor/sweetalert2.min.css')}}">
<style>
    .list{
        font-size: 15px;
    }
</style>
@endsection

@section('main-content')
<div class="breadcrumb">
	<h1>Pre-Soal</h1>
	<ul>
		<li><a href="">Dashboard</a></li>
		<li>Pre-Soal</li>
	</ul>
</div>

<div class="separator-breadcrumb border-top"></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 style="font-weight:bold">Metode Pembuatan Instrumen</h4>
                    <h5 style="line-height: 150%"> Instrumen pengukuran ini dihasilkan melalui olah data Delphi Analytical Network Process (D-ANP). D-ANP merupakan metode yang menghasilkan kriteria prioritas dan bobot yang kemudian disatukan dalam bentuk pengukuran kinerja.</h5>
                    <h6 class="">Jika anda masih penasaran, lihat video penjelasan lengkapnya <a class="text-success" target="_blank" href="https://www.youtube.com/channel/UCS5NW-_gNysNW8C2BDhGdyw/videos">disini</a>.</h6><br>

                    <h4 style="font-weight:bold">Tujuan Survei</h4>
                    <h5> Mengukur konsistensi Lembaga dalam mengimplementasikan nilai-nilai ESG</h5><br>

                    <h4 style="font-weight:bold">Penjelasan survei</h4>
                    <h5>Survei ini terdiri dari 3 kriteria, yaitu Environtment, Social, dan Governance.</h5>
                    <div class="list">
                        <ul style="text-align: justify">
                            <li style="margin-bottom:5px"><b>Environmental (Lingkungan)</b>, di mana stakholder akan mempertimbangkan dampak aktivitas perusahaan terhadap kelestarian lingkungan. Contohnya seperti penggunaan energi alam, pengelolaan limbah dan polusi, hingga kegiatan konservasi lingkungan.</li>
                            <li style="margin-bottom:5px"><b>Social (Sosial)</b>, di mana stakeholder akan mempertimbangkan bagaimana perusahaan mengelola hubungan kerja dengan para karyawan, mitra usaha, konsumen, hingga masyarakat sekitar. Contohnya seperti perhatian terhadap kesehatan karyawan,penyediaan program pemberdayaan masyarakat, dan sebagainya.</li>
                            <li style="margin-bottom:5px"><b>Governance (Tata Kelola)</b>, di mana stakeholder akan mempertimbangkan bagaimana perusahaan membangun kepemimpinan yang mampu menjalankan prinsip tata kelola yang baik. Hal ini penting untuk dilakukan karena keberhasilan suatu lembaga atau institusi bergantung pada keberhasilan dalam mengelola sumber daya yang dimiliki.</li>
                        </ul>
                    </div>

                    <h4 style="font-weight:bold">Petunjuk Pengisian</h4>
                    <h5 style="line-height: 150%">Indikator dalam kuesioner terbagi menjadi indikator khusus internal lembaga dan indikator
                        khusus program lembaga. Indikator internal lembaga merupakan indikator yang lingkup
                        penerapannya dilaksanakan pada domestik lembaga. Indikator program lembaga adalah
                        indikator yang lingkup penerapannya hanya pada program lembaga saja.
                        Responden diharapkan memilih salah satu nilai dari skala yang telah dirancang sesuai dengan
                        kondisi riil Lembaga. Nilai dari tiap indikator menggambarkan kondisi sebagai berikut:</h5>
                    <div class="list">
                        <ul style="text-align: justify">
                            <li>1 = Penerapan terhadap indikator bersifat <b>lemah</b></li>
                            <li>2 = Penerapan terhadap indikator bersifat <b>cukup lemah</b></li>
                            <li>3 = Penerapan terhadap indikator bersifat <b>netral</b></li>
                            <li>4 = Penerapan terhadap indikator bersifat <b>kuat</b></li>
                            <li>5 = Penerapan terhadap indikator bersifat <b>sangat kuat</b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col text-sm-center text-center" style="margin-top: 10px">
                <a class="btn btn-primary ml-3 mb-3 px-3" id="start">
                    Mulai Kerjakan
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js')
    <script src="{{asset('assets/js/vendor/sweetalert2.min.js')}}"></script>
    <script>
        var a = document.createElement('a');
        $(document).ready(function () {
            $('#start').on('click', function () {
            swal({
                // title: 'Yakin jawaban ingin dikirim?',
                text: "Survei ini akan berlangsung sekali jalan, pastikan Anda mengerjakan sampai selesai untuk menyimpan jawaban",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0CC27E',
                cancelButtonColor: '#FF586B',
                confirmButtonText: 'Mulai Kerjakan',
                cancelButtonText: 'Tidak',
                confirmButtonClass: 'btn btn-success mr-5',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function () {
                window.location.href='/survey/soal'
            }, function (dismiss) {
                // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
                if (dismiss === 'cancel') {
                    }
                })
            });
        })
    </script>
@endsection