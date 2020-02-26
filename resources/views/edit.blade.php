@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                        <div class="form-group"><label for="nama" class="form-control-label">Id Desa</label><input type="text" name="id_desa" id="id_desa" placeholder="id_desa" class="form-control" value="{{$ujian->id_desa}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Nama Desa</label><input type="text" name="nama" id="nama" placeholder="nama" class="form-control" value="{{$ujian->nama}}"></div>
                        {{-- <div class="form-group"><label for="nama" class="form-control-label">Foto</label><input type="file" name="foto" id="foto" placeholder="foto" class="form-control" value="{{$ujian->foto}}"></div> --}}
                        <div class="form-group"><label for="nama" class="form-control-label">Kecamatan</label><input type="text" name="kecamatan" id="kecamatan" placeholder="kecamatan" class="form-control" value="{{$ujian->kecamatan}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Kabupaten</label><input type="text" name="kabupaten" id="kabupaten" placeholder="kabupaten" class="form-control" value="{{$ujian->kabupaten}}"></div>
                </div>
                <div class="modal-footer">
                    <a href="/" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                    <button type="submit" class="btn btn-primary">ubah data</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
