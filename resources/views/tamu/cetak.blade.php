@extends('layouts.nav')

@section('content')

 <style>
    .tabell{
        border-radius:10px;
        margin-top:50px;
        width:1000px;
        height:450px;
    }
</style>
<center>
<br>
    <div class="tabell">
    <div class="card-header">
   <center> <h1><b>Reservasi</b></h1></center>
  </div>
    <table class="table table-hover">
  <thead> 
  <tr  class="bg-primary" style="color:white">
        <th scope="col">Nama Tamu</th>
        <th scope="col">Tanggal Check In</th>
        <th scope="col">Tanggal Check Out</th>
        <th scope="col">Print</th>

        </tr>
  </thead>
  <tbody>
  @foreach ($reservasis as $r)
  <tr>
       <td>{{ $r->namatam }}</td>
        <td>{{ $r->chekin }}</td>
        <td>{{ $r->chekout }}</td>
        <td>
            <a target="_blank" href="/tamu/cetak/{{ $r->id }} "class="btn btn-success" role="button" aria-pressed="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
            <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
            <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
            </svg></a>
       </td>   
       </tr>
        @endforeach
  </tbody>
</table>
    </div>
</center>
@include('sweetalert::alert')

@endsection