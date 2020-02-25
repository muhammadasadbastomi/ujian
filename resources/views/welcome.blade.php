@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-header">Data Service Kendaraan
                    <div class="text-right">
                        <a href="cetak" class="btn btn-primary"> cetak data</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">+ tambah data</button>                    </div>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Merk</th>
                            <th scope="col" class="text-center">Type</th>
                            <th scope="col" class="text-center">Sparepart</th>
                            <th scope="col" class="text-center">Biaya</th>
                            {{-- <th scope="col" class="text-center">Semester</th> --}}
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $ujian as $u)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{$u->merk}}</td>
                            {{-- <td class="text-center"><img src="img/ujian/{{$u->foto}}" width="40" class="rounded-circle" alt="Cinque Terre"></td> --}}
                            <td class="text-center">{{$u->type}}</td>
                            <td class="text-center">{{$u->sparepart}}</td>
                            <td class="text-center">{{$u->biaya}}</td>
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
            <div class="form-group"><label for="nama" class="form-control-label">Merk</label><input type="text" name="merk" id="merk" placeholder="merk" class="form-control"></div>
            <div class="form-group"><label for="nama" class="form-control-label">Type</label><input type="text" name="type" id="type" placeholder="type" class="form-control"></div>
            {{-- <div class="form-group"><label for="nama" class="form-control-label">Foto</label><input type="file" name="foto" id="foto" placeholder="foto" class="form-control"></div> --}}
            <div class="form-group"><label for="nama" class="form-control-label">Sparepart</label><input type="text" name="sparepart" id="sparepart" placeholder="sparepart" class="form-control"></div>
            <div class="form-group"><label for="nama" class="form-control-label">Biaya</label><input type="text" name="biaya" id="biaya" placeholder="biaya" class="form-control"></div>
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
