@extends('template')

@section('main')
<?php //print_r($data) 
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Semua Data</h1>
            <a href="post/create" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Umur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->alamat }}</td>
                        <td>{{ $d->umur }}</td>
                        <td>
                            <a href="{{ url('post/'.$d->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                            <a href="{{ url('hapuspost/'.$d->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>

@stop