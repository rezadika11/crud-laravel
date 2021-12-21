@extends('layout.main')
@section('content')
<div class="container">
        <h3 class="mt-3">Halaman Blog</h3>
        <div class="card ">
            <div class="card-header">
              Featured
            </div>
            
            <div class="card-body ">
              <a href="{{ route('pegawaiexport') }}" class="btn btn-success mb-2">Export</a>
              
              <a href="#"class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Import</a>
                
              <a href="{{ route('tambahpegawai') }}" class="btn btn-primary mb-2 ms-auto">Tambah Data</a>
              <table class="table table-bordered table-striped">
                <thead>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Tanggal Lahir</th>
                  <th>No Telepon</th>
                </thead>
                @foreach ($pegawai as $p)
                <tr>
                  <td>{{ $p->nama }}</td>
                  <td>{{ $p->alamat }}</td>
                  <td>{{ date('d-m-y',strtotime($p->tgllhr))  }}</td>
                  <td>{{ $p->telp }}</td>
                </tr>

                    
                @endforeach
              
              </table>
            </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('pegawaiimport') }}" method="post"  enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
        
          {{ csrf_field() }}
          <div class="form-group">
            <input type="file" name="file" required='required'>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Import</button>
      </div>
      </div>
    </form>
    </div>
  </div>
</div>
     

               
</div>

    
@endsection