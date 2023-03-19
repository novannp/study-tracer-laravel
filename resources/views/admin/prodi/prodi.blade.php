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
                        <th class="w-75">Nama</th>
                        <th class="w-1">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $prodi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                {{ $prodi->name }}
                            </td>
                            <td>
                                <div class="d-inline-block">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit_prodi-{{ $prodi->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapus_prodi-{{ $prodi->id }}">
                                        Hapus
                                    </button>
                                    <div class="modal" id="edit_prodi-{{ $prodi->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Program Studi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/prodi/{{ $prodi->id }}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label class="form-label">Program Studi</label>
                                                            <input type="text" class="form-control"
                                                                   value="{{ $prodi->name }}"
                                                                   name="name"
                                                                   placeholder="Masukkan nama program studi"/>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#" class="btn btn-link link-secondary"
                                                               data-bs-dismiss="modal">
                                                                Cancel
                                                            </a>
                                                            <button class="btn btn-dark" type="submit">Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal" id="hapus_prodi-{{ $prodi->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                <div class="modal-status bg-danger"></div>
                                                <div class="modal-body text-center py-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="icon mb-2 text-danger icon-lg" width="24" height="24"
                                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M12 9v2m0 4v.01"/>
                                                        <path
                                                            d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75"/>
                                                    </svg>
                                                    <h3>Apakah Kamu Yakin?</h3>
                                                    <div class="text-muted">Ingin menghapus program
                                                        studi
                                                        ini ?
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="w-100">
                                                        <div class="row">
                                                            <form action="/prodi/{{ $prodi->id }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="col">
                                                                    <a href="#" class="btn w-100"
                                                                       data-bs-dismiss="modal">
                                                                        Kembali
                                                                    </a>
                                                                </div>
                                                                <br>
                                                                <button type="submit" class="btn w-100 btn-danger">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <br>
            <a href="{{ url('/prodi/add') }}" class="btn btn-dark d-none d-sm-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 5l0 14"></path>
                    <path d="M5 12l14 0"></path>
                </svg>
                Tambahkan Program Studi Baru
            </a>
        </div>

    </div>
@endsection
