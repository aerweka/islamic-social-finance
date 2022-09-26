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
						<div class="col-lg-12 col-md-12">
							<div class="card mb-4">
								<div class="card-body">
									<div class="card-title"></div>

									<div id="chart_performance" style="height: 300px;"></div>


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
												Total Skor : {{$a->total_gov}}
											</h2>
											<hr>
											<h5 class="mb-2">
												Skor Environmental : {{$a->total_env}}
											</h5>
											<h5 class="mb-2">
												Skor Sosial : {{$a->total_soc}}
											</h5>
											<h5 class="mb-2">
												Skor Governance : {{$a->total_all}}
											</h5>
										</div>
										<div class="col text-sm-right text-left">

											<a href="" class="btn btn-secondary ml-4 mb-4 px-4">
												<i class="fas fa-eye mr-1"></i>
												Preview
											</a>
											<a href="" class="btn btn-primary ml-4 mb-4 px-4">
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
<script>
	$(document).ready(function () {

// Chart in Dashboard version 1
var echartElemBar = document.getElementById('chart_performance');
if (echartElemBar) {
	var echartBar = echarts.init(echartElemBar);
	echartBar.setOption({
		legend: {
			borderRadius: 0,
			orient: 'horizontal',
			x: 'right',
			data: ['Environment', 'Social','Governance','Total']
		},
		grid: {
			left: '8px',
			right: '8px',
			bottom: '0',
			containLabel: true
		},
		tooltip: {
			show: true,
			backgroundColor: 'rgba(0, 0, 0, .8)'
		},
		xAxis: [{
			type: 'category',
			data: @json($chart_tahun), //tahun
			axisTick: {
				alignWithLabel: true
			},
			splitLine: {
				show: false
			},
			axisLine: {
				show: true
			}
		}],
		yAxis: [{
			type: 'value',
			axisLabel: {
				formatter: '{value}'
			},
			min: 0,
			max: 500,
			interval: 100,
			axisLine: {
				show: false
			},
			splitLine: {
				show: true,
				interval: 'auto'
			}
		}],

		series: [{
			name: 'Environment',
			data: @json($chart_total_env), //total_env
			label: { show: false, color: '#f39c29' },
			type: 'bar',
			barGap: 0,
			color: '#f39c29',
			smooth: true,
			itemStyle: {
				emphasis: {
					shadowBlur: 10,
					shadowOffsetX: 0,
					shadowOffsetY: -2,
					shadowColor: 'rgba(0, 0, 0, 0.3)'
				}
			}
		}, {
			name: 'Social',
			data: @json($chart_total_soc), //total_soc
			label: { show: false, color: '#40d0db' },
			type: 'bar',
			color: '#40d0db',
			smooth: true,
			itemStyle: {
				emphasis: {
					shadowBlur: 10,
					shadowOffsetX: 0,
					shadowOffsetY: -2,
					shadowColor: 'rgba(0, 0, 0, 0.3)'
				}
			}
		}, {
			name: 'Governance',
			data: @json($chart_total_gov), //total_gov
			label: { show: false, color: '#e1e82b' },
			type: 'bar',
			color: '#e1e82b',
			smooth: true,
			itemStyle: {
				emphasis: {
					shadowBlur: 10,
					shadowOffsetX: 0,
					shadowOffsetY: -2,
					shadowColor: 'rgba(0, 0, 0, 0.3)'
				}
			}
		}, {
			name: 'Total',
			data: @json($chart_total_all), //total
			label: { show: false, color: '#9bbb59' },
			type: 'bar',
			color: '#9bbb59',
			smooth: true,
			itemStyle: {
				emphasis: {
					shadowBlur: 10,
					shadowOffsetX: 0,
					shadowOffsetY: -2,
					shadowColor: 'rgba(0, 0, 0, 0.3)'
				}
			}
		}]
	});
	$(window).on('resize', function () {
		setTimeout(function () {
			echartBar.resize();
		}, 500);
	});
}});
</script>


<script src="{{ asset('assets/js/vendor/echarts.min.js') }}"></script>
<script src="{{ asset('assets/js/es5/echart.options.min.js') }}"></script>
<script src="{{ asset('assets/js/es5/dashboard.v1.script.js') }}"></script>
@endsection