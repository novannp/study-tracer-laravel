@extends('layouts.app2')

@section('header')
    @include('layouts.header')
@endsection
@section('content-header')
    @include('layouts.page_header')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <form action="/prodi/create" method="post">
            @csrf
                <div class="mb-3">
                    <label class="form-label">Program Studi</label>
                    <input type="text" class="form-control" name="name" placeholder="Masukkan nama Program Studi">
                </div>
                <button class="btn btn-dark" type="submit">Tambahkan</button>
            </form>
        </div>
    </div>
@endsection
