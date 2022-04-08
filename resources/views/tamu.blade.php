@extends('layouts.nav')

@section('content')

<br><br>
<!-- banner -->
<div id="#" class="carousel slide banner_main" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
<li data-target="#myCarousel" data-slide-to="4"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img class="first-slide" src="images/banner.jpg" alt="First slide">
<div class="container">
<div class="carousel-caption relative">
  <h1 style="margin-top:-30px; font-family:cursive">  DBTC <span>Hotel</span></h1><br>
  
</div>
</div>
</div>
<div class="carousel-item">
<img class="second-slide" src="images/banner.jpg" alt="Second slide">
<div class="container">
<div class="carousel-caption relative">
<h1 style="margin-top:-30px; font-family:cursive">  DBTC <span>Hotel</span></h1><br>
</div>
</div>
</div>
<div class="carousel-item">
<img class="third-slide" src="images/banner.jpg" alt="Third slide">
<div class="container">
<div class="carousel-caption relative">
<h1 style="margin-top:-30px; font-family:cursive">  DBTC <span>Hotel</span></h1><br>
</div>
</div>
</div>
<div class="carousel-item">
<img class="third-slide" src="images/banner.jpg" alt="four slide">
<div class="container">
<div class="carousel-caption relative">
<h1 style="margin-top:-30px; font-family:cursive">  DBTC <span>Hotel</span></h1><br>
</div>
</div>
</div>
<div class="carousel-item">
<img class="third-slide" src="images/banner.jpg" alt="five slide">
<div class="container">
<div class="carousel-caption relative">
<h1 style="margin-top:-30px; font-family:cursive">  DBTC <span>Hotel</span></h1><br>
</div>
</div>
</div>
</div>
<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<!-- end banner -->
<br id="reservasi">
<br>
<br><br>
<div class="card" style="width:auto;" >
  <div class="card-body">
<form class="row g-3 needs-validation"  Action="{{url('guest/create')}}" Method="Post" style="margin-left:40px;margin-right:40px"> 
  {{ csrf_field() }}

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Tanggal Chek In</label>
    <input type="date" class="form-control" id="chekin"  required name="chekin">
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label"> Tanggal Chek out</label>
    <input type="date" class="form-control" id="chekout"  required name="chekout">
  </div>
 
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">jumlah kamar</label>
    <input type="number" class="form-control" id="validationCustom02"  style="" required name="total">
    <div class="valid-feedback">
    </div>
  </div>
 
 <button type="button" class="btn btn-primary bi bi-search" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float:left">Pesan <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Maaf</strong> Data yang anda input salah.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DBTC Hotel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">

  <div class="card-body">
        
            <div class="mb-3">
                <label  class="form-label">Nama Pemesan :</label>
                <input type="text" class="form-control" id="exampleInputEmail1" required name="namapem">
            </div>

            <div class="mb-3">
                <label  class="form-label">Email :</label>
                <input type="email" class="form-control" id="exampleInputEmail1" required name="email">
            </div>
            
            <div class="mb-3">
                <label class="form-label">No Handphone :</label>
                <input type="number" class="form-control" id="exampleInputEmail1" required name="no_hp">
            </div>

            <div class="mb-3">
                <label  class="form-label">Nama Tamu :</label>
                <input type="text" class="form-control" id="exampleInputEmail1" required name="namatam">
            </div>

            <div class="mb-3">
              <label  class="form-label">Tipe Kamar :</label>
            <select name="tipe" id="" class="form-control">
              <option value="" disable> pilih tipe kamar </option>
                @foreach($room as $c1)
                <option value="<?=$c1->id?>"><?=$c1->tipe?> (sisa {{$c1->jumlah}} kamar) </option>
                @endforeach
              </select>
            </div>

          </div>
          <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="">Konfirmasi</button>
        </form>
</div></div></div></div></div></div>
<br id="tentang" ><br><br><br>

<div  class="mobile" style="border-radius:10px;border:none">
  <div class="container">
  <div class="row d_flex">
  <div class="col-md-5">
  <div class="mobile_img">
    <figure><img src="images/hotel2.jpg" alt="#"/></figure>
  </div>
  </div>
  <div class="col-md-7">
  <div class="titlepage">
    <h2>Tentang kami</h2><br>
    <p>Direnovasi pada tahun 2015, DBTC Hotel Medan menjamin penginapan yang menyenangkan bagi para tamu di Medan baik untuk tujuan bisnis maupun plesiran. Dengan lokasinya yang hanya 4.5 km dari pusat kota dan 6 km dari bandara, hotel bintang 7 ini menarik perhatian banyak wisatawan setiap tahun. Dengan lokasinya yang strategis, hotel ini menawarkan akses mudah ke destinasi yang wajib dikunjungi di kota ini.</p>
   
  </div>
  </div>
  </div>
  </div>
  </div>

<div id="kamar"  class="about" >
<div class="container">
<div class="row d_flex">
<div class="col-md-7">
<div class="titlepage">
  <h2>Superior</h2>
  <span></span>
  <p>Kamar superior yang tepat seharusnya lebih baik dari kamar standard, baik dari segi interior maupun luas kamar. Namun kebanyakan hotel justru mengkategorikan kamar superior sebagai kamar dengan pemandangan dan lokasi lebih baik dari kamar standard. Karena lebih luas, harganya biasanya lebih mahal daripada kamar standard. Fasilitas di kamar jenis superior biasanya selain kamar mandi shower, terdapat minibar, dan juga meja serta kursi.
</p>
  <a class="read_more" data-bs-toggle="modal" data-bs-target="#superior" >Lihat Fasilitas <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
</div>
</div>
<div class="col-md-5">
<div class="about_img">
  <figure><img src="images/superior.jpg" alt="#"/></figure>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade" id="superior" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DBTC Hotel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
  <div class="card-header">
   <h2>Tipe Superior</h2>
  </div>
  <div class="card-body">

    @foreach($superior as $s)
    <li>{{ $s->nama }}</li>
    @endforeach

          </div>        
</div></div></div></div></div>



  <div id="kamar"  class="about">
    <div class="container">
    <div class="row d_flex">
    <div class="col-md-7">
    <div class="titlepage">
      <h2>Deluxe</h2>
      <span></span>
      <p>Ada baiknya bertanya sebelum memesan kamar hotel jenis ini. Sebab arti dari kamar deluxe yang tepat harusnya kamar deluxe memiliki luas lebih lebar, fasilitas dan pemandangan yang lebih baik dari kamar superior.
  </p>
      <a class="read_more" data-bs-toggle="modal" data-bs-target="#deluxe">Lihat Fasilitas <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    <div class="col-md-5">
    <div class="about_img">
      <figure><img src="images/deluxe.jpg" alt="#"/></figure>
    </div>
    </div>
    </div>
    </div>
    </div>

  <div class="modal fade" id="deluxe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DBTC Hotel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="card">
    <div class="card-header">
    <h2>Superior</h2>
    </div>
    <div class="card-body">
      @foreach($deluxe as $d)
      <li>{{ $d->nama }}</li>
      @endforeach
            </div>
  </div></div></div></div></div>

<br id="fasilitashotel"> <br>  <br>
      <div class="titlepage">
         <center> <h2>Fasilitas Hotel</h2>
          <span></span></center>
      </div>
  @foreach ($fhotel as $key=>$item)
  <div id="kamar"  class="about">
    <div class="container">
    <div class="row d_flex">
    <div class="col-md-7">
    <div class="titlepage">
      <img src="{{asset('fasilitas_hotel')}}/{{$item->file}}" style="width:500px">
    </div>
    </div>
    <div class="col-md-5">
    <div class="about_img">
      <p><h2>{{$item->fhotel}} </h2></p><br>
       <p>{{$item->keterangan}}   </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endforeach




<!-- clients -->
<div class="clients">
<div class="container">

<div class="row">
<div class="col-md-12">
<div class="clients_box">
  <p>DBTC Hotel adalah program loyalitas pribadi oleh DBTC Hotel Medan. Menawarkan manfaat eksklusif bagi anggota serta kemungkinan untuk mendapatkan cashback dan poin reward dari semua unit DBTC Hotel. Dapatkan jaminan harga terbaik dari situs web kami! <p>
</div>
<div class="jonu">
  <img src="images/irfan.jpg" alt="#" style="width:100px"/>
  <h3>Irfan Purba</h3>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="copyright sticky-bottom"  style="margin-bottom : -100px;">
<div class="container">
<div class="row">
  <div class="col-md-12">
     <p>©irfanpurba XII RPL.</p>
  </div>
</div>
</div>
</div>
</div>

<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>

<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <div id="hotel" class="spacer reserve-info ">
<center>
 
  



@include('sweetalert::alert')
@endsection
