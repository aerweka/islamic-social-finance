@extends('layouts.master')
@section('page-css')
<link rel="stylesheet" href="{{ asset('assets/styles/vendor/datatables.min.css') }}">
@endsection

@section('main-content')
<div class="breadcrumb">
	<h1>Version 1</h1>
	<ul>
		<li><a href="">Dashboard</a></li>
		<li>Version 1</li>
	</ul>
</div>

<div class="separator-breadcrumb border-top"></div>

<div class="row">
	<!-- ICON BG -->
	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
			<div class="card-body text-center">
				<i class="i-Add-User"></i>
				<div class="content">
					<p class="text-muted mt-2 mb-0">New Leads</p>
					<p class="text-primary text-24 line-height-1 mb-2">205</p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
			<div class="card-body text-center">
				<i class="i-Financial"></i>
				<div class="content">
					<p class="text-muted mt-2 mb-0">Sales</p>
					<p class="text-primary text-24 line-height-1 mb-2">$4021</p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
			<div class="card-body text-center">
				<i class="i-Checkout-Basket"></i>
				<div class="content">
					<p class="text-muted mt-2 mb-0">Orders</p>
					<p class="text-primary text-24 line-height-1 mb-2">80</p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
			<div class="card-body text-center">
				<i class="i-Money-2"></i>
				<div class="content">
					<p class="text-muted mt-2 mb-0">Expense</p>
					<p class="text-primary text-24 line-height-1 mb-2">$1200</p>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="row">
	<div class="col-lg-8 col-md-12">
		<div class="card mb-4">
			<div class="card-body">
				<div class="card-title">Rata Rata Survey</div>
				<div id="chart_performance_avg" style="height: 300px;"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-sm-12">
		<div class="card mb-4">
			<div class="card-body">
				<div class="card-title">Jumlah User Tiap Tingkatan</div>
				<div id="pie_user" style="height: 300px;"></div>
			</div>
		</div>
	</div>
</div>

<div class="row">
<div class="col-md-12 mb-4">
	<div class="card text-left">

		<div class="card-body">
			<h4 class="card-title mb-3">Feature enable / disable</h4>

			<p>Disabling features that you don't wish to use for a particular table is easily done by setting a variable
				in the initialisation object. The full list of available options is <a
					href="https://datatables.net/reference/option">available in the DataTables reference</a>.</p>

			<div class="table-responsive">
				<table id="tabel_answer" class="display table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Nama Laznas</th>
							<th>No Telp</th>
							<th>Tingkatan</th>
							<th>Tanggal Mengisi</th>
							<th>Nilai Environment</th>
							<th>Nilai Social</th>
							<th>Nilai Governance</th>
							<th>Total Nilai</th>
							<th>Detail</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($getchart_answer as $answer)
						<tr>
							<td>{{$loop-> iteration}}</td>
							<td>{{$answer-> users-> name}}</td>
							<td>{{$answer-> users-> nama_laznas}}</td>
							<td>{{$answer-> users-> no_telpon_laznas}}</td>
							<td>{{$answer-> users-> tingkatan_laznas}}</td>
							<td>{{$answer-> filled_at}}</td>
							<td>{{$answer-> total_env}}</td>
							<td>{{$answer-> total_soc}}</td>
							<td>{{$answer-> total_gov}}</td>
							<td>{{$answer-> total_all}}</td>
							<td>{{$answer-> iteration}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
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
var echartElemBar = document.getElementById('chart_performance_avg');
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

	var echartElemPie = document.getElementById('pie_user');
    if (echartElemPie) {
        var echartPie = echarts.init(echartElemPie);
        echartPie.setOption({
            color: ['#62549c', '#7566b5', '#7d6cbb', '#8877bd', '#9181bd', '#6957af'],
            tooltip: {
                show: true,
                backgroundColor: 'rgba(0, 0, 0, .8)'
            },

            series: [{
                name: 'Sales by Country',
                type: 'pie',
                radius: '60%',
                center: ['50%', '50%'],
                data: [{ value: @json($getchart_user[0]->pusat), name: 'Pusat' }, { value: @json($getchart_user[0]->provinsi), name: 'Provinsi' }, { value: @json($getchart_user[0]->kota_kabupaten), name: 'Kota/Kabupaten' }, { value: @json($getchart_user[0]->mikro), name: 'Mikro' }],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        });
        $(window).on('resize', function () {
            setTimeout(function () {
                echartPie.resize();
            }, 500);
        });
    }
}});
</script>

<script>
	$(document).ready(function () {
    // contact-list-table 
    

    $('#tabel_answer').DataTable({
        "paging": true,
        "ordering": false,
        "info": false,
		dom: 'Bfrtip',
        buttons: [
			{
                extend: 'excel',
                title: 'Data Jawaban export'
            },
            {
                extend: 'pdf',
                title: 'Data Jawaban export'
            }
        ],
		
    });


})
</script>

<script src="{{ asset('assets/js/vendor/datatables.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/echarts.min.js') }}"></script>
<script src="{{ asset('assets/js/es5/echart.options.min.js') }}"></script>
<script src="{{ asset('assets/js/es5/dashboard.v1.script.js') }}"></script>
@endsection