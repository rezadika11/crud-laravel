@extends('layout.main')
@section('content')
<div class="container">
        <h3 class="mt-3">Halaman Pegawai</h3>
        <div class="card ">
            <div class="card-header">
              Tambah Pegawai
            </div>
            
            <div class="card-body ">
                <form action="{{ route('simpanpegawai') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="mb-3">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                    </div>
                </div>
                    <div class="form-group">
                        <div class="mb-3">
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                    </div>
                </div>
                    <div class="form-group">
                        <div class="mb-3">
                        <input type="date" class="form-control" name="tgllhr" id="tgl" placeholder="Tanggal Lahir">
                    </div>
                </div>
                    <div class="form-group">
                        <div class="mb-3">
                        <input type="number" class="form-control" name="telp" id="nomor" placeholder="No Telepon">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"> Simpan

                </button>
                </form>
            </div>
        </div>
     

               
</div>

    
@endsection