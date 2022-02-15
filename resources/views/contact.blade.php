@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact</h2>
</div>
<form method="post" action="{{route('contact.store')}}">
  {{csrf_field()}}
  <div class="mb-3">
    <label for="inputname">Nama</label>
    <input type="text" class="form-control" id="inputname" placeholder="Masukkan nama anda" name="nama">  
  </div>
  <div class="mb-3">
    <label for="inputemail">Email</label>
    <input type="email" class="form-control" id="inputemail" placeholder="Masukkan email anda" name="email">
    <div id="emailHelp" class="form-text">Kami tidak akan menyebarkan email anda ke siapapun.</div>
  </div>
  <div class="mb-3">
    <label for="floatingTextarea2">Pesan</label>
    <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="floatingTextarea2" style="hight= 100px" name="pesan"></textarea>      
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection