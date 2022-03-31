@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $nama }}<h3>
    <p>{{ $email }}<p>
    <img src="images/{{ $nama }}" alt="{{ $nam
        a }}" width="200px" >
@endsection