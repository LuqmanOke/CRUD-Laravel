@extends('adminlte.master')
@section('content')
    <h1> DATA PERTANYAAN </h1>
    <a href="/pertanyaan/create" class="btn btn-primary">
    Create New pertanyaan
    </a>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Pertanyaan</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pertanyaan as $key => $pertanyaan )
            <tr>
            <th scope="row">{{ $key+1 }}</th>
                <td>{{$pertanyaan-> judul}}</td>
                <td>{{$pertanyaan-> isi}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection