@extends('layouts.master')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/styles/vendor/datatables.min.css') }}">
@endsection

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
                    <h4 class="card-title mb-3">Data User</h4>

                    <div class="table-responsive">
                        <table id="tabel_user" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nama Laznas</th>
                                    <th>Direktur Laznas</th>
                                    <th>Tingkatan Laznas</th>
                                    <th>Telpon Laznas</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->nama_laznas }}</td>
                                        <td>{{ $data->nama_direktur_laznas }}</td>
                                        <td>{{ $data->tingkatan_laznas }}</td>
                                        <td>{{ $data->no_telpon_laznas }}</td>
                                        <td>
                                            <a href="{{ route('admin.user.edit', ['user' => $data->id]) }}"
                                                class="btn btn-sm btn-info"><i class="i-Information"></i></a>
                                        </td>
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
    <script src="{{ asset('assets/js/vendor/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // contact-list-table 
            $('#tabel_user').DataTable({
                "paging": true,
                "ordering": true,
                "info": false,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excel',
                        title: 'Data User export',
                        exportOption: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'pdf',
                        title: 'Data User export',
                        exportOption: {
                            columns: 'th:not(:last-child)'
                        }
                    }
                ],

            });
        })
    </script>
@endsection
