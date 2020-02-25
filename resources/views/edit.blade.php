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
                        <div class="form-group"><label for="nama" class="form-control-label">Merk</label><input type="text" name="merk" id="merk" placeholder="merk" class="form-control" value="{{$ujian->merk}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Type</label><input type="text" name="type" id="type" placeholder="type" class="form-control" value="{{$ujian->type}}"></div>
                        {{-- <div class="form-group"><label for="nama" class="form-control-label">Foto</label><input type="file" name="foto" id="foto" placeholder="foto" class="form-control" value="{{$ujian->foto}}"></div> --}}
                        <div class="form-group"><label for="nama" class="form-control-label">Sparepart</label><input type="text" name="sparepart" id="sparepart" placeholder="sparepart" class="form-control" value="{{$ujian->sparepart}}"></div>
                        <div class="form-group"><label for="nama" class="form-control-label">Biaya</label><input type="text" name="biaya" id="biaya" placeholder="biaya" class="form-control" value="{{$ujian->biaya}}"></div>
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
