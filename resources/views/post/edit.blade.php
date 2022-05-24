@extends('template')

@section('main')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Halaman Edit Data</h1>
            <form action="{{ url('post/'.$data->id)}}" method="post">
                @csrf
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $data->nama }}">
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $data->alamat }}">
                </div>

                <div class="form-group">
                    <label for="">Umur</label>
                    <input type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ $data->umur }}">
                </div>

                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ $data->category_id }}">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="Edit Data">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection