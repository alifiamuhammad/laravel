@extends('layout/base_template')

@section('title','Halaman Data Student')
    <!-- End Nav -->
@section('conten')
   <div class="container">
   	 <div class="content">
   	 	<div class="row">
            <h4>Tabel Student</h4>
            <hr>
            <a href="{{url('/students/create')}}"> <button type="submit" class="btn btn-primary">Tambah Data</button> </a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table table-striped">
              <thead>
                  <th>No</th>
                  <th>nips</th>
                  <th>Nama Siswa</th>
                   <th>Email</th>
                   <th>kelas</th>
                   <th>jurusan</th>
                  <th>Action</th>
              </thead>
              <tbody>
                  <?php $no=1;?>
                  @foreach($data_students as $students)
                  <tr>
                    <td>{{$no++}}</td>
                      <td><?php echo $students->nips ?></td>
                      <td>{{$students->nama}}</td>
                      <td>{{$students->email}}</td>
                      <td>{{$students->kelas}}</td>
                      <td>{{$students->jurusan}}</td>
                      
                      <td>
                     {{-- <a href="#"><span class="badge bg-primary">Delete</span></a>  --}}
                     <form action="{{'students/'.$students->id}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger badge">Delete</button>
                     </form>
                     ||   
                      <a href="{{url('students/edit'.$students->id.'/edit')}}"><span class="badge bg-primary">Edit</span></a> </td>
                  </tr>
                  @endforeach


              </tbody>
            </table>
   	 	</div>
   	 </div>
   </div>
@endsection()

  