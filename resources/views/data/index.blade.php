<!-- resources/views/data/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Data List Mahasiswa</h2>
    <a href="{{ route('data.create') }}" class="btn btn-primary">Add Data</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Jurusan</th>
                <th>Semester</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->nama }}</td>
                    <td>{{ $book->nim }}</td>
                    <td>{{ $book->jurusan }}</td>
                    <td>{{ $book->semester }}</td>
                    <td>{{ $book->tanggal_lahir }}</td>
                    <td>
                        <a href="{{ route('data.show', $book->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('data.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('data.destroy', $book->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
