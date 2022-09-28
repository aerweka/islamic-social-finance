@extends('layouts.master')

@section('page-css')
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
                    <h4 style="font-weight:bold">Tujuan Penelitian</h4>
                    <h5> Membangun instrumen pengukuran kinerja lembaga pengelola ISF dengan analisis dimensi Environmental Social Governance (ESG)</h5><br>
                    <h4 style="font-weight:bold">Penjelasan survey</h4>
                    <h5>Survey ini terdiri dari 3 kriteria, yaitu Environtment, Social, dan Governance.</h5>
                    <div class="list">
                        <ul style="text-align: justify">
                            <li style="margin-bottom:5px"><b>Lingkungan</b>, di mana stakholder akan mempertimbangkan dampak aktivitas perusahaan terhadap kelestarian lingkungan. Contohnya seperti penggunaan energi alam, pengelolaan limbah dan polusi, hingga kegiatan konservasi lingkungan.</li>
                            <li style="margin-bottom:5px"><b>Social</b>, di mana stakeholder akan mempertimbangkan bagaimana perusahaan mengelola hubungan kerja dengan para karyawan, mitra usaha, konsumen, hingga masyarakat sekitar. Contohnya seperti perhatian terhadap kesehatan karyawan,penyediaan program pemberdayaan masyarakat, dan sebagainya.</li>
                            <li style="margin-bottom:5px"><b>Governance</b>, di mana stakeholder akan mempertimbangkan bagaimana perusahaan membangun kepemimpinan yang mampu menjalankan prinsip tata kelola yang baik. Hal ini penting untuk dilakukan karena keberhasilan suatu lembaga atau institusi bergantung pada keberhasilan dalam mengelola sumber daya yang dimiliki.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col text-sm-center text-center" style="margin-top: 10px">
                <a href="/survey/soal" class="btn btn-primary ml-3 mb-3 px-3">
                    Mulai Kerjakan
                </a>
            </div>
        </div>
    </div>
</div>
@endsection