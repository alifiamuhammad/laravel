@extends('layout/base_template')

@section('title','Halaman Insert Data')
    <!-- End Nav -->
@section('conten')
   <div class="container">
   	 <div class="content">
   	 	<div class="row">
            <h4>Create Dosen</h4>
            <hr>
            <form action="{{url('/dosen/store')}}" method="POST">
                @csrf
              <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">NIDN</label>
                    <input type="text" class="form-control" name="nidn">
                    <div class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Dosen</label>
                    <input type="text" class="form-control" name="nama_dosen">
                    <div class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                    <div class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Keahlian</label>
                    <input type="text" class="form-control" name="keahlian">
                    <div class="form-text"></div>
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                
            </form>
   	 	</div>
   	 </div>
   </div>
@endsection()

  