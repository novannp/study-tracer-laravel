@extends('layouts.app2')

@section('header')
    @include('layouts.header')
@endsection
@section('content-header')
    @include('layouts.page_header')
@endsection

@section('content')
    @if ($message = Session::get('delete_success'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-title">Berhasil !</h4>
            <div class="text-muted">{{ $message }}</div>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-title">Berhasil !</h4>
            <div class="text-muted">{{ $message }}</div>
        </div>
    @endif
    @if ($message = Session::get('edit_success'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-title">Berhasil !</h4>
            <div class="text-muted">{{ $message }}</div>
        </div>
    @endif
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table table-striped">
                    <thead>
                        <tr>
                            <th class="w-1">No</th>
                            <th class="w-25">Judul Kuisioner</th>
                            <th class="w-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kuesioners as $kuesioner)
                            <tr>
                                <td class="w-1">{{ $loop->iteration }}</td>
                                <td class="w-75">{{ $kuesioner->title }}</td>
                                <td class="w-1">
                                    <a href="/kuesioners/{{ $kuesioner->id }}" class="w-25 btn btn-secondary"
                                        href="">Lihat</a>
                                    <a class="btn w-25 btn-azure"
                                        href={{ route('kuesioners.questions.index', $kuesioner->id) }}>Edit</a>
                                    <a class="btn w-25 btn-pink" href="">Hapus</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
            <br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-kuesioner">
                Tambahkan Kuisioner
            </button>
            <div class="modal" id="tambah-kuesioner" tabindex="-1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Kuesioner</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('kuesioners.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nama Kuesioner</label>
                                    <input type="text" class="form-control" name="title"
                                        placeholder="Masukkan Judul Kuesioner" />
                                </div>

                                <div class="modal-footer">
                                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                        Cancel
                                    </a>
                                    <button class="btn btn-dark" type="submit">Tambahkan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
