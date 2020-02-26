@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-header">Data 1s
                    <div class="text-right">
                        <a href="cetak" class="btn btn-primary"> cetak data</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">+ tambah data</button>                    </div>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Id Desa</th>
                            <th scope="col" class="text-center">Nama Desa</th>
                            <th scope="col" class="text-center">Kecamatan</th>
                            <th scope="col" class="text-center">Kabupaten</th>
                            {{-- <th scope="col" class="text-center">Semester</th> --}}
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $ujian as $u)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{$u->id_desa}}</td>
                            {{-- <td class="text-center"><img src="img/ujian/{{$u->foto}}" width="40" class="rounded-circle" alt="Cinque Terre"></td> --}}
                            <td class="text-center">{{$u->nama}}</td>
                            <td class="text-center">{{$u->kecamatan}}</td>
                            <td class="text-center">{{$u->kabupaten}}</td>
                            <td class="text-center">
                                <a class="btn btn-info" href="edit/{{$u->id}}">Edit</a>
                                <a class="btn btn-danger" href="hapus/{{$u->id}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group"><label for="nama" class="form-control-label">Id Desa</label><input type="text" name="id_desa" id="id_desa" placeholder="id_desa" class="form-control"></div>
            <div class="form-group"><label for="nama" class="form-control-label">Nama Desa</label><input type="text" name="nama" id="nama" placeholder="nama" class="form-control"></div>
            {{-- <div class="form-group"><label for="nama" class="form-control-label">Foto</label><input type="file" name="foto" id="foto" placeholder="foto" class="form-control"></div> --}}
            <div class="form-group"><label for="nama" class="form-control-label">Kecamatan</label><input type="text" name="kecamatan" id="kecamatan" placeholder="kecamatan" class="form-control"></div>
            <div class="form-group"><label for="nama" class="form-control-label">Kabupaten</label><input type="text" name="kabupaten" id="kabupaten" placeholder="kabupaten" class="form-control"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
