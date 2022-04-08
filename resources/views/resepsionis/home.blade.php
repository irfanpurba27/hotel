@extends('layouts.resepsionis')

@section('content')

<style>
    .tabell{
        border-radius:10px;
        margin-top:50px;
        width:1000px;
        height:450px;
      }
    }
</style>

<center>
    <div class="tabell">
    <div class="card-header">
    <h1>Data Reservasi </h1>
    </div>
        
        
<br>

<form action="{{ url('resepsionis') }}" Method="GET">
<input type="submit" value="filter tanggal Chek in"  class="btn btn-primary" style="float:left">
<input type="date" name="date" class="form-control" style="width:200px;float:left" value="{{$request->date }}">
</form>

<a href="{{url('resepsionis')}}" class="btn btn-success" style="float:right;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
</svg></a> 

<form action="{{ url('resepsionis') }}" Method="GET">

<input type="submit" value="cari" class="btn btn-primary" style="float:right;margin-right:5px">
<input type="text" placeholder="cari nama tamu" name="cari" value="{{ $request->cari }}" class="form-control" style="width:200px; float:right;margin-right:5px;">
 
</form>

   <br><br>
    <table class="table table-hover">
  <thead> 
    <tr class="bg-primary" style="color:white">
      
      <th scope="col">#</th>
      <th scope="col">Nama Tamu</th>
      <th scope="col">Tanggal Check-in </th>
      <th scope="col">Tanggal Check-out</th>
      <th scope="col">Action </th>

  
    </tr>
  </thead>
  <tbody>
 
         @foreach($reservasi as $key=>$reservasi)
        <tr>
            <td>{{ $key+1 }} </td>
            <td>{{ $reservasi->namatam }}</td>
            <td>{{ $reservasi->chekin }} </td>
            <td>{{ $reservasi->chekout }} </td>
            <td>
              <form action="{{ route('resepsionis.destroy',$reservasi) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-sm btn-success" style="margin-left: 1px"
                onclick="return confirm('Chek out data?')">  Cek out Data </button>
    </form>

     <form action="{{ route('resepsionis.destroyy',$reservasi) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-sm btn-danger" style="margin-left: 1px"
                onclick="return confirm('Batalkan pesanan?')">  Batalkan pesanan</button>
    </form>
        </td>
        </tr>
          @endforeach
  </tbody>
</table>
</center>
@include('sweetalert::alert')

@endsection
