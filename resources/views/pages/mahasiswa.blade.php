@extends('pages.master')

@section('content')
    <h1>Daftar Mahasiswa</h1>
    <hr>

    <ul>
        @foreach ($mahasiswa as $nama)
            <li>{{ $nama }}</li>
        @endforeach
    </ul>
@endsection
