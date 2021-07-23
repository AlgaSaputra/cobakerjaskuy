@extends('user.home')

@section('content')

<form class="form" method="get" action="{{ url('/') }}">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Cari Pekerjaan yang kamu inginkan!</label>
        <input type="search" name="keyword" class="form-control w-75 d-inline" placeholder="Ketik nama pekerjaan/nama perusahaan">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
</form>
{{-- Start kode untuk form pencarian
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif --}}

<link rel="stylesheet" href="templateuser/assets/css/fontawesome.css">
<link rel="stylesheet" href="templateuser/assets/css/templatemo-sixteen.css">
<link rel="stylesheet" href="templateuser/assets/css/owl.css">


{{-- <br> --}}
{{-- <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('foto_perusahaan/'. $item->foto_perusahaan ) }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$item['nama_perusahaan']}}</h5>
          <br> 
          <br> 
          <h6 class="card-title">{{$item['pekerjaan']}}</h6>
          <br>Syarat :
          <p class="card-text">{{$item['syarat_ketentuan']}}</p>
          <div class="card-footer">
          <p class="card-text"><small class="text-muted">{{$item['kontak']}}</small></p>
        </div>
        </div>
      </div>
    </div>
  </div>





  <div class="container">
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


                
                  
                  <div class="products">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                        </div>
                        <div class="col-md-12">
                          <div class="filters-content">
                              <div class="row grid">
                                  {{-- <div class="col-lg-4 col-md-4 all des">
                                    <div class="product-item">
                                      <a href="#"><img src="{{ asset('foto_perusahaan/'. $item->foto_perusahaan ) }}" alt=""></a>
                                      <div class="down-content">
                                        <a href="#"><h4>Tittle goes here</h4></a>
                                        <h6>$18.25</h6>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                                        <span>Reviews (12)</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-md-4 all dev">
                                    <div class="product-item">
                                      <a href="#"><img src="{{ asset('foto_perusahaan/'. $item->foto_perusahaan ) }}" alt=""></a>
                                      <div class="down-content">
                                        <a href="#"><h4>Tittle goes here</h4></a>
                                        <h6>$16.75</h6>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                                        <ul class="stars">
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (24)</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-md-4 all gra">
                                    <div class="product-item">
                                      <a href="#"><img src="{{ asset('foto_perusahaan/'. $item->foto_perusahaan ) }}" alt=""></a>
                                      <div class="down-content">
                                        <a href="#"><h4>Tittle goes here</h4></a>
                                        <h6>$32.50</h6>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                                        <ul class="stars">
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (36)</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-md-4 all gra">
                                    <div class="product-item">
                                      <a href="#"><img src="{{ asset('foto_perusahaan/'. $item->foto_perusahaan ) }}" alt=""></a>
                                      <div class="down-content">
                                        <a href="#"><h4>Tittle goes here</h4></a>
                                        <h6>$24.60</h6>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                                        <ul class="stars">
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (48)</span>
                                      </div>
                                    </div>
                                  </div> --}}
                                  {{-- @foreach($conten as $item) --}}
                                  {{-- <div class="col-lg-4 col-md-4 all dev">
                                    <div class="product-item">
                                      <a href="#"><img src="{{ asset('foto_perusahaan/'. $item->foto_perusahaan ) }}" alt=""></a>
                                      <div class="down-content">
                                        <a href="#"><h4>Tittle goes here</h4></a>
                                        <h6>$18.75</h6>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                                        <span>Reviews (60)</span>
                                      </div>
                                    </div>
                                  </div> --}}
                                  {{-- @endforeach --}}
                                  @foreach ($conten as $item )
                                  <div class="col-lg-4 col-md-4 all dev">
                                    <div class="product-item">
                                      <a><img src="{{ asset('foto_perusahaan/'. $item->foto_perusahaan ) }}" style="width: 100%"></a>
                                      <div class="down-content">
                                        <a><h4>{{$item['nama_perusahaan']}}</h4></a>
                                        <h6>{{$item['gaji']}}</h6>
                                        <p>{{$item['pekerjaan']}}</p>
                                        <p>{{$item['syarat_ketentuan']}}</p>
                                        <span>{{$item['kontak']}}</span>
                                      </div>
                                    </div>
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              
              
                  <!-- Bootstrap core JavaScript -->
                  <script src="vendor/jquery/jquery.min.js"></script>
                  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              
              
                  <!-- Additional Scripts -->
                  <script src="assets/js/custom.js"></script>
                  <script src="assets/js/owl.js"></script>
                  <script src="assets/js/slick.js"></script>
                  <script src="assets/js/isotope.js"></script>
                  <script src="assets/js/accordions.js"></script>

                            
  
    {{-- Bootstrap core JavaScript --}}
    <script src="templateuser/vendor/jquery/jquery.min.js"></script>
    <script src="templateuser/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    {{-- Additional Script --}}
    <script src="templateuser/assets/js/custom.js"></script>
    <script src="templateuser/assets/js/owl.js"></script>
    <script src="templateuser/assets/js/slick.js"></script>
    <script src="templateuser/assets/js/isotope.js"></script>
    <script src="templateuser/assets/js/accordions.js"></script>


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