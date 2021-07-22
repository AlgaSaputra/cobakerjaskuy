@extends('user.home')

@section('content')

<form class="form" method="get" action="{{ url('/') }}">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Cari Pekerjaanmu!</label>
        <input type="search" name="keyword" class="form-control w-75 d-inline" placeholder="Ketik nama pekerjaan">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
</form>
<!-- Start kode untuk form pencarian -->
{{-- @if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif --}}

{{-- <link rel="stylesheet" href="templateuser/assets/css/fontawesome.css">
<link rel="stylesheet" href="templateuser/assets/css/templatemo-sixteen.css">
<link rel="stylesheet" href="templateuser/assets/css/owl.css"> --}}

@foreach($conten as $item)
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
          <div class="card">
              <img class="card-img-top" src="{{ asset('foto_perusahaan/'. $item->foto_perusahaan ) }}">
              <div class="card-body">
                <h5 class="card-title">{{$item['nama_perusahaan']}}</h5>
                <br>
                <p class="card-text">{{$item['pekerjaan']}}</p>
                <p class="card-text">{{$item['syarat_ketentuan']}}</p>
                <p class="card-text"><small class="text-muted">{{$item['kontak']}}</small></p>
              </div>
            </div>
        </div>
    </div>
</div>
  @endforeach

  {{-- <div class="container">
      <div class="col">
          <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" style="width: 40%" src="{{ asset('foto_perusahaan/'. $item->foto_perusahaan ) }}">
                <div class="card-body">
                  <h5 class="card-title">{{$item['nama_perusahaan']}}</h5>
                  <h6 class="card-text">{{$item['pekerjaan']}}</h6>
                  <p class="card-text">{{$item['syarat_ketentuan']}}</p>
                  <p class="card-text"><small class="text-muted">{{$item['kontak']}}</small></p>
                </div>
              </div>
          </div>
      </div>
  </div> --}}


    {{-- <!-- Bootstrap core JavaScript -->
    <script src="templateuser/vendor/jquery/jquery.min.js"></script>
    <script src="templateuser/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="templateuser/assets/js/custom.js"></script>
    <script src="templateuser/assets/js/owl.js"></script>
    <script src="templateuser/assets/js/slick.js"></script>
    <script src="templateuser/assets/js/isotope.js"></script>
    <script src="templateuser/assets/js/accordions.js"></script> --}}


    <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
    </script>

    @endsection