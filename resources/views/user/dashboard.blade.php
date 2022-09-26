@extends('layouts.master')
@section('main-content')
<?php 
use Carbon\Carbon;
?>
<div class="breadcrumb">
	<h1>Dashboard</h1>
	<ul>
		<li><a href="">Dashboard</a></li>
	</ul>
</div>

<div class="separator-breadcrumb border-top"></div>


{{-- <div class="row d-flex justify-content-center">
	<div class="col-md-10 col-sm-12 card">
		<div class="card-body">
			<h3 class="text-center my-4 font-weight-bold">
				{{ \Illuminate\Foundation\Inspiring::quote() }}
			</h3>
		</div>
	</div>
</div> --}}
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12 mb-4">
			<div class="row">
				<div class="col text-sm-center text-center">
					@if ($cek_mengisi == 0)
					<h3 class="card-title my-4 font-weight-bold">Anda Belum Mengerjakan Survey Tahun Ini</h3>
					<a href="#tambahsesi" data-toggle="modal" class="btn btn-primary ml-3 mb-3 px-3">
						<i class="fas fa-plus mr-1"></i>
						Kerjakan Survey Tahun ini
					</a>
					@else
					<h3 class="card-title my-4 font-weight-bold">Anda Sudah Mengerjakan Survey Tahun Ini</h3>
					@endif
				</div>
			</div>
			<div class="card text-left">
				<div class="card-body">
					<div class="row">
						<div class="col">
							<h2 class="card-title my-4 font-weight-bold">Statistika Survey</h2>
						</div>

					</div>
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="card mb-4">
								<div class="card-body">
									<div class="card-title">This Year Sales</div>
									<div id="echartBar" style="height: 300px;"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-12">
							<div class="card mb-4">
								<div class="card-body">
									<div class="card-title">Sales by Countries</div>
									<div id="echartPie" style="height: 300px;"></div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="col-md-12 mb-4">
			<div class="card text-left">
				<div class="card-body">

					{{-- TABEL HISTORY SURVEY --}}
					<div class="card mb-4">
						<div class="card-header" style="font-size: 20px !important;">
							<div class="row">
								<div class="col d-flex flex-row align-items-center">
									<h2 class="card-title my-4 font-weight-bold">History Survey</h2>

								</div>
							</div>
						</div>
						@foreach ($answer as $a)
						<div class="card-body">
							<h5 class="card-title">Hasil Survey Tahun {{Carbon::parse($a->filled_at)->year}} </h5>
							<div class="card mb-3">
								<div class="card-body">
									<div class="row">
										<div class="col-1 my-auto">
											<h4 class="text-center mb-0">{{$loop->iteration}}</h4>
										</div>
										<div class="col-9">
											<h2>
												Total Skor : {{$a->total_all}}
											</h2>
											<hr>
											<h5 class="mb-2">
												Skor Environmental : {{$a->total_env}}
											</h5>
											<h5 class="mb-2">
												Skor Sosial : {{$a->total_soc}}
											</h5>
											<h5 class="mb-2">
												Skor Governance : {{$a->total_gov}}
											</h5>
										</div>
										<div class="col text-sm-right text-left">

											<a href="survey/preview/{{Carbon::parse($a->filled_at)->year}}" class="btn btn-secondary ml-4 mb-4 px-4">
												<i class="fas fa-eye mr-1"></i>
												Preview
											</a>
											<a href="survey/cetak-hasil/{{Carbon::parse($a->filled_at)->year}}" class="btn btn-primary ml-4 mb-4 px-4">
												<i class="fas fa-print mr-1"></i>
												Cetak Hasil
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('page-js')
<script src="{{ asset('assets/js/vendor/echarts.min.js') }}"></script>
<script src="{{ asset('assets/js/es5/echart.options.min.js') }}"></script>
<script src="{{ asset('assets/js/es5/dashboard.v1.script.js') }}"></script>
@endsection