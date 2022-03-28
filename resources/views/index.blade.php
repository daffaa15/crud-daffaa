@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Data Produk</h1>
                    <a href="{{ url('create') }}" class="btn btn-success">Tambah Produk &raquo;</a>      
                </div>

                <div class="col-lg-8 mt-5">
                    <table class="table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Brand</th>
                            <th>Nama</th>
                            <th>EXP</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $dataProduk)
                        <tr>
                            <td>{{ $dataProduk->id }}</td>
                            <td>{{ $dataProduk->brand }}</td>
                            <td>{{ $dataProduk->nama }}</td>
                            <td>{{ $dataProduk->exp }}</td>
                            <td>
                                <a href="{{ url('/show/' . $dataProduk->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ url('/destroy/' . $dataProduk->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>     
                </div>
            </div>
        </div>
    </section>
@endsection