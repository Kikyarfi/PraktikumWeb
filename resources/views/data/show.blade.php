<!-- resources/views/books/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>{{ $data->id }}</h2>
    <p>{{ $data->nama }}</p>
    <a href="{{ route('data.edit', $data->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('data.destroy', $data->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('data.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
