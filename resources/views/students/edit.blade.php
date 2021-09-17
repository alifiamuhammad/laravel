@extends('layout/base_template')

@section('title','Halaman Edit Data')
    <!-- End Nav -->
@section('conten')
   <div class="container">
   	 <div class="content">
   	 	<div class="row">
            <h4>Update Data Student</h4>
            <hr>
            <form action="{{url('/students'.'/'.$students->id.'/'.'update/')}}" method="POST">
                @method('patch')
                @csrf
              <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Nis</label>
                    <input type="text" class="form-control" name="Nis" value="{{$students->Nis}}">
                    <div class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama student</label>
                    <input type="text" class="form-control" name="Nama_students" value="{{$students->Nama}}" >
                    <div class="form-text"></div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Bidang</label>
                    <input type="text" class="form-control" name="Bidang" value="{{$students->Bidang}}" >
                    <div class="form-text"></div>
                </div>
                  <button type="submit" class="btn btn-primary">Update</button>
              </div>
                
            </form>
   	 	</div>
   	 </div>
   </div>
@endsection()

  