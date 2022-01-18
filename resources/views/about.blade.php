@extends('layouts.main')

@section('container')
    <h1> Halaman About </h1>
    <h3> {{$Nama}} </h3>
    <p> {{$Email}} </p>
    <img src="images/{{$Gambar}}" alt="{{$Nama}}" width="200">
@endsection