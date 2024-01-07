<!-- resources/views/books/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Edit Data</h2>
    <form action="{{ route('data.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <textarea class="form-control" id="nama" name="nama" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <textarea class="form-control" id="nim" name="nim" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <textarea class="form-control" id="jurusan" name="jurusan" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="semester" class="form-label">Semester</label>
            <textarea class="form-control" id="semester" name="semester" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir" rows="3" required></input>
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
@endsection
