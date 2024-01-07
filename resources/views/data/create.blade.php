<!-- resources/views/data/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Add Data</h2>
    <form action="{{ route('data.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control" id="nama" name="nama" rows="3" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input class="form-control" id="nim" name="nim" rows="3" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input class="form-control" id="jurusan" name="jurusan" rows="3" required>
        </div>
        <div class="mb-3">
            <label for="semester" class="form-label">Semester</label>
            <input class="form-control" id="semester" name="semester" rows="3" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" rows="3" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit Data</button>
    </form>
@endsection
