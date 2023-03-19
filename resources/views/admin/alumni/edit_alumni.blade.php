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
            <form action="/alumni/{{ $alumni->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ $alumni->name }}"
                           placeholder="Masukkan nama Program Studi">
                </div>
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="number" class="form-control" name="nim" value="{{ $alumni->nim }}"
                           placeholder="Masukkan nama Program Studi">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $alumni->email }}"
                           placeholder="Masukkan nama Program Studi">
                </div>
                <div class="mb-3">
                    <label class="form-label">Lulusan</label>
                    <input type="text" class="form-control" name="graduation_year"
                           value="{{ $alumni->graduation_year }}"
                           placeholder="Masukkan nama Program Studi">
                </div>
                <div class="mb-3">
                    <label class="form-label">Program Studi</label>
                    <select name="prodi_id" class="form-select" value="{{ $alumni->prodi_id }}">
                        @foreach ($prodi as $prod)
                            <option value="{{ $prod->id }}">{{ $prod->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-dark" type="submit">Update</button>
            </form>
        </div>
    </div>
@endsection
