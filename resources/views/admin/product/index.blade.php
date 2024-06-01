@extends('admin.index')
@section('title', $title)
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <a href="{{ route('products.create') }}" class="btn btn-success">Tambah Data</a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Deskripsi</th>
                            <th>Warna</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Stok</th>

                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $index => $data)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->description }}</td>
                            <td>{{ $data->color }}</td>
                            <td>@rp( $data->price )</td>
                            <td>@rp($data->price * (100 - $data->discount)/100)</td>
                            </td>
                            <td>{{ $data->stock }}</td>
                            <td>
                                @if ($data->image)
                                <img src="{{ asset('storage/' . $data->image) }}" alt="Product Image" style="width: 50px; height: 50px;">
                                @else
                                No Image
                                @endif
                            <td>
                                <a href="{{ route('products.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('products.destroy', $data->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Delete</button>
                                </form>
                            </td> <!-- Add Edit and Delete buttons -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection