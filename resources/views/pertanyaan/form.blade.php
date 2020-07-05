@extends('adminlte.master')
@section('content')
<div class="ml-3">

    <div class="card card-primay">
        <div class="card-header">
        <h2 class="card-title"> ---  New Pertanyaan  ---</h2>
        </div>
        <form role="form" action="/pertanyaan" method="POST">
            @csrf
        <div class="form-group">
            <div class="ml-3">
            <label for="inputAddress">judul</label>
            </div>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul / Tema pertanya">
        </div>
        <div class="form-group">
            <div class="ml-3">
            <label for="inputAddress2">isi</label>
            </div>
            <input type="text" class="form-control" id="isi" name="isi" placeholder="Deskripsi Pertanyaan">
        </div>

        <div class="ml-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
    </div>
</div>
@endsection