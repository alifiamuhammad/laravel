@extends('layout/base_template')

@section('title','Halaman Edit Data')
    <!-- End Nav -->
@section('conten')
   <div class="container">
   	 <div class="content">
   	 	<div class="row">
            <h4>Update Data Dosen</h4>
            <hr>
            <form action="{{url('/dosen'.'/'.$dosen->id.'/'.'update/')}}" method="POST">
                @method('patch')
                @csrf
              <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">NIDN</label>
                    <input type="text" class="form-control" name="nidn" value="{{$dosen->nidin}}">
                    <div class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Dosen</label>
                    <input type="text" class="form-control" name="nama_dosen" value="{{$dosen->nama}}" >
                    <div class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$dosen->email}}">
                    <div class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Keahlian</label>
                    <input type="text" class="form-control" name="keahlian" value="{{$dosen->keahlian}}" >
                    <div class="form-text"></div>
                </div>
                  <button type="submit" class="btn btn-primary">Update</button>
              </div>
                
            </form>
   	 	</div>
   	 </div>
   </div>
@endsection()

  