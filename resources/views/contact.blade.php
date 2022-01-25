@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact</h2>
</div>
<form>
  <div class="mb-3">
    <label for="inputname">Nama</label>
    <input type="text" class="form-control" id="inputname" placeholder="Masukkan nama anda">  
  </div>
  <div class="mb-3">
    <label for="inputemail">Email</label>
    <input type="email" class="form-control" id="inputemail" placeholder="Masukkan email anda">
    <div id="emailHelp" class="form-text">Kami tidak akan menyebarkan email anda ke siapapun.</div>
  </div>
  <div class="mb-3">
    <label for="floatingTextarea2">Pesan</label>
    <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="floatingTextarea2" style="hight= 100px"></textarea>      
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection