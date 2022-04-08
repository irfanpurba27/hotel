@extends('layouts.admin')
   
@section('content')

<style>
    .edit{
        border-radius:10px;
        margin-top:50px;
        width:1000px;
        height:450px;
        
    }
  
    }
</style>

<center>
 <div class="edit">
      
 <div class="modal-body">
      <div class="card">

  <div class="card-body">
    
  <div class="card-body">

      <form action="{{ route('room.update',$room) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
          {{ method_field('PATCH') }}
      
        
            <div class="form-group">
              <select class="form-select" id="inputGroupSelect01" name="tipe">
                <option>{{$room->tipe}}</option>
                <option >Superior</option>
                <option >Deluxe</option>
              </select>            </div>
<br>
             <div class="form-group">
              <label for=""style="float:left">Total Room </label>
              <input type="text" class="form-control" name="jumlah" placeholder="" value="{{$room->jumlah}}">
            </div>


           
          </div>
          <div class="modal-footer">
          <a href="{{ url('room') }}"><button type="button" class="btn btn-success" data-bs-dismiss="modal">kembali</button></a>
        
        <button type="submit" class="btn btn-primary">Simpan perubahan</button>
        </form>
      </div>
        
</div>
  </div>
</div>
</div>

</center>

@endsection