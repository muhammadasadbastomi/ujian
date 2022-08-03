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
                            <div class="form-group"><label class="form-control-label">NIM</label>
                                <input type="text" name="nim" placeholder="nim" class="form-control"
                                    value="{{ $ujian->nim }}">
                            </div>
                            <div class="form-group"><label class="form-control-label">Nama </label>
                                <input type="text" name="nama" placeholder="nama" class="form-control"
                                    value="{{ $ujian->nama }}">
                            </div>
                            {{-- <div class="form-group"><label class="form-control-label">Foto</label>
                                <input type="file" name="foto"  placeholder="foto" class="form-control" value="{{$ujian->foto}}">
                            </div> --}}
                            <div class="form-group"><label class="form-control-label">No hp</label>
                                <input type="text" name="no_hp" placeholder="no_hp" class="form-control"
                                    value="{{ $ujian->no_hp }}">
                            </div>
                            <div class="form-group"><label class="form-control-label">Prodi</label>
                                <input type="text" name="prodi" placeholder="prodi" class="form-control"
                                    value="{{ $ujian->prodi }}">
                            </div>
                            <div class="form-group"><label class="form-control-label">Fakultas</label>
                                <input type="text" name="fakultas" placeholder="fakultas" class="form-control"
                                    value="{{ $ujian->fakultas }}">
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
