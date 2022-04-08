@extends('layouts.admin')
   
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
        <h3>
          Fasilitas Kamar
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float:left"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></button>
        </h3>
      </div>

    
 
    <table class="table table-hover">
  <thead> 
    <tr class="bg-primary" style="color:white">
      
      <th scope="col">#</th>   
      <th scope="col">Tipe Kamar</th>
      <th scope="col">Fasilitas Kamar</th>
      <th scope="col">Action</th>
  
    </tr>
  </thead>
  <tbody>
  @foreach($fkamar as $key=>$fkamar)
        
        <tr>
            <td>{{$key+1}}</td>
            <td> {{ $fkamar->tipe}} </td>
           <td> {{ $fkamar->nama}} </td>
            
            <td>
            <a href="{{ route('fkamar.edit', $fkamar) }}" class="btn btn-primary  btn-sm" style="float:left;color: white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg></i></a>
            

            <form action="{{ route('fkamar.destroy',$fkamar) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger btn-sm" style="margin-left: 1px"
                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
              </svg></i></button>
          </form>
        </td>
        </tr>

        @endforeach

  </tbody>
</table>
    </div>
</center>
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
    
  <div class="card-body">

      <form action="{{ url('fasilitas-kamar/create') }}" method="post">
        {{ csrf_field() }}
            

            <div class="form-group">
              <input type="text" class="form-control" name="nama" placeholder="Facility Name">
            </div>

          <br>
           <select name="tipe" id="" class="form-control">
                @foreach($room as $c1)
                <option value="<?=$c1->tipe?>"><?=$c1->tipe?></option>
                @endforeach
              </select>
           
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
        
</div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
@include('sweetalert::alert')

@endsection