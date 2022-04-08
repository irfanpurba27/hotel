
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DBTC Hotel</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('img/hotel.jpg') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    
</head>
<body>
<br>
<div class="container">'
   

    <div class="card" style="width:650px">
        <div class="card-header">
           <center> <h2><b>DBTC Hotel</b></h2> </center>
        </div>
        <div class="card-body">
       
        
   
        
      
        @foreach ($reservasis as $r)
        <div class="input-group">
             
             <p class="form-control" style="border:none;">     Nama Pemesan </p>
             <p class="form-control" style="border:none;">   : {{ $r->namapem }}   </p>
        </div>

         <div class="input-group">
             
             <p class="form-control" style="border:none;">     Nama Tamu </p>
             <p class="form-control" style="border:none;">   : {{ $r->namatam }}   </p>
        </div>

          <div class="input-group">
             
             <p class="form-control" style="border:none;">    Email</p>
             <p class="form-control" style="border:none;">   : {{ $r->email }}   </p>
        </div>

          <div class="input-group">
             
             <p class="form-control" style="border:none;">     No Handphone </p>
             <p class="form-control" style="border:none;">   : {{ $r->no_hp}}   </p>
        </div>

          <div class="input-group">
             
             <p class="form-control" style="border:none;">     Tipe Kamar </p>
             <p class="form-control" style="border:none;">   : {{ $tipe }}   </p>
        </div>

          <div class="input-group">
             
             <p class="form-control" style="border:none;">     Jumlah Kamar </p>
             <p class="form-control" style="border:none;">   : {{ $r->total }} Ruangan   </p>
        </div>

          <div class="input-group">
             
             <p class="form-control" style="border:none;">     Tanggal Chek-in</p>
             <p class="form-control" style="border:none;">   : {{ $r->chekin }}   </p>
        </div>

          <div class="input-group">
             
             <p class="form-control" style="border:none;">     Tanggal Chek-out </p>
             <p class="form-control" style="border:none;">   : {{ $r->chekout}}   </p>
        </div>
        @endforeach

    </div>
<br>
    <div class="card-footer">
    <center> <h2> Terimakasih Telah Memesan Kamar di Hotel Kami </h2></center> 
        
    </div>
</div>




        </div>
    </div>

<script type="text/javascript">
    window.print();


</script>


</body>

</html>

