@extends('layout/base_template')

@section('title','Halaman Data Dosen')
    <!-- End Nav -->
@section('conten')
   <div class="container">
   	 <div class="content">
   	 	<div class="row">
            <h4>Tabel Dosen</h4>
            <hr>
            <a href="{{url('/dosen/create')}}"> <button type="submit" class="btn btn-primary">Tambah Data</button> </a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table table-striped">
              <thead>
                  <th>No</th>
                  <th>NIDN</th>
                  <th>Nama Dosen</th>
                  <th>Email</th>
                   <th>Keahlian</th>
                  <th>Action</th>
              </thead>
              <tbody>
                  <?php $no=1;?>
                  @foreach($data_dosen as $dosen)
                  <tr>
                    <td>{{$no++}}</td>
                      <td><?php echo $dosen->nidin ?></td>
                      <td>{{$dosen->nama}}</td>
                      <td>{{$dosen->email}}</td>
                      <td>{{$dosen->keahlian}}</td>
                      <td>
                     {{-- <a href="#"><span class="badge bg-primary">Delete</span></a>  --}}
                     <form action="{{'dosen/'.$dosen->id}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger badge">Delete</button>
                     </form>
                       
                      <a href="{{url('dosen/'.$dosen->id.'/edit')}}"><span class="badge bg-primary">Edit</span></a> </td>
                  </tr>
                  @endforeach


              </tbody>
            </table>
   	 	</div>
   	 </div>
   </div>
@endsection()

  