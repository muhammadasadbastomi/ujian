@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group"><label class="form-control-label">Nama Anggota</label>
                                <input type="text" name="nama" placeholder="nama" class="form-control"
                                    value="{{ $ujian->nama }}">
                            </div>
                            <div class="form-group"><label class="form-control-label">Id Anggota</label>
                                <input type="text" name="id_anggota" placeholder="nama" class="form-control"
                                    value="{{ $ujian->id_anggota }}">
                            </div>
                            {{-- <div class="form-group"><label class="form-control-label">Foto</label>
                                <input type="file" name="foto"  placeholder="foto" class="form-control" value="{{$ujian->foto}}">
                            </div> --}}
                            <div class="form-group"><label class="form-control-label">Alamat Anggota</label>
                                <input type="text" name="alamat" placeholder="alamat" class="form-control"
                                    value="{{ $ujian->alamat }}">
                            </div>
                            <div class="form-group"><label class="form-control-label">Buku yang Dipinjam</label>
                                <input type="text" name="buku" placeholder="buku" class="form-control"
                                    value="{{ $ujian->buku }}">
                            </div>
                    </div>
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
