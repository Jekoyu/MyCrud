@extends('admin.index')
@section('title', $title)
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Resi</th>
                            <th>Bayar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $index => $data)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{ $data->customer->name }}</td>
                            <td>{{ $data->orderDate }}</td>
                            <td>@rp( $data->totalAmount )</td>
                            <td> @if ($data->status == 1)
                                <div class="badge bg-primary text-white rounded-pill">Selesai</div>
                                @elseif ($data->status == 0)
                                <div class="badge bg-warning text-white rounded-pill">Di Proses</div>
                                @endif
                            </td>
                            <td> @if ($data->payments->status == 1)
                                <div class="badge bg-primary text-white rounded-pill">Lunas</div>
                                @elseif ($data->payments->status == 0)
                                <div class="badge bg-danger text-white rounded-pill">Belum Bayar</div>
                                @endif
                            </td>


                            <td>{{ $data->resi }}</td>
                            <td>
                                <a href=" {{ route('orders.show', $data->id) }}" class="btn btn-primary btn-sm">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection