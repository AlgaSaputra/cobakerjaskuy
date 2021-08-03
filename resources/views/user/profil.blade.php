@extends('user.home')

@section('title','Profil')

@section('content')

<form method="POST" action="{{ url('profil') }}">
@csrf

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan nama" name="name" value="{{ $user->name }}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan email" name="email" value="{{ $user->email }}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="masukkan password" name="password" value="{{ $user->password }}">
  </div>
  {{-- <div>
    <label for="">Password</label>
    <input type="password" class="form-control" id="">
  </div>
  <div>
    <label for="">Konfirmasi Password</label>
    <input type="password" class="form-control" id="">
  </div> --}}

  <button type="submit" class="btn btn-outline-primary btn-block">Simpan</button>
</form>    
@endsection
