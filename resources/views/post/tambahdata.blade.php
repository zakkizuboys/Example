@extends('template')

@section('main')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Halaman Tambah Data</h1>
            <form action="{{ route('post.store')}}" method="post">
                @csrf
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Masukkan Nama Anda" value="{{ old('nama') }}">
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukkan Alamat Anda" value="{{ old('alamat') }}">
                </div>

                <div class="form-group">
                    <label for="">Umur</label>
                    <input type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" placeholder="Masukkan umur Anda" value="{{ old('umur') }}">
                </div>

                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" class="form-control @error('category_id') is-invalid @enderror" name="category_id" placeholder="Masukkan Category Anda" value="{{ old('category_id') }}">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="Tambah Data">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection