@extends('layout/base_template')

@section('title','Halaman Insert Data')
    <!-- End Nav -->
@section('conten')
   <div class="container">
   	 <div class="content">
   	 	<div class="row">
            <h4>Create staff</h4>
            <hr>
            <form action="{{url('/staff/store')}}" method="POST">
                @csrf
              <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Nis</label>
                    <input type="text" class="form-control" name="Nis">
                    <div class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama staff</label>
                    <input type="text" class="form-control" name="Nama_staff">
                    <div class="form-text"></div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Bidang</label>
                    <input type="text" class="form-control" name="Bidang">
                    <div class="form-text"></div>
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                
            </form>
   	 	</div>
   	 </div>
   </div>
@endsection()

  