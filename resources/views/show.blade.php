@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit Produk</h1>    
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Brand *</label>
                            <input type="text" name="brand" class="form-control" placeholder="Merk" 
                                value="{{$data->brand}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Produk *</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama" 
                                value="{{$data->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Exp *</label>
                            <input type="text" name="exp" class="form-control" placeholder="DD-MM-YYYY" 
                                value="{{$data->exp}}">
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Tambah Produk</button>
                        </div>

                        <div class="form-group mt-2">
                            <a href="{{ url('/') }}">
                                << Kembali ke Halaman Utama</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection