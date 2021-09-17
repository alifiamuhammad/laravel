@extends('layout/base_template')

@section('title','Halaman Data Staff')
    <!-- End Nav -->
@section('conten')
   <div class="container">
   	 <div class="content">
   	 	<div class="row">
            <h4>Tabel Staff</h4>
            <hr>
            <a href="{{url('/staff/create')}}"> <button type="submit" class="btn btn-primary">Tambah Data</button> </a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table table-striped">
              <thead>
                  <th>No</th>
                  <th>Nis</th>
                  <th>Nama Staff</th>
                   <th>Bidang</th>
                  <th>Action</th>
              </thead>
              <tbody>
                  <?php $no=1;?>
                  @foreach($data_staff as $staff)
                  <tr>
                    <td>{{$no++}}</td>
                      <td><?php echo $staff->Nis ?></td>
                      <td>{{$staff->Nama}}</td>
                      <td>{{$staff->Bidang}}</td>
                      <td>
                     {{-- <a href="#"><span class="badge bg-primary">Delete</span></a>  --}}
                     <form action="{{'staff/'.$staff->id}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger badge">Delete</button>
                     </form>
                     ||   
                      <a href="{{url('staff/edit'.$staff->id.'/edit')}}"><span class="badge bg-primary">Edit</span></a> </td>
                  </tr>
                  @endforeach


              </tbody>
            </table>
   	 	</div>
   	 </div>
   </div>
@endsection()

  