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
                        <th class="w-25">Nama</th>
                        <th class="w-1">NIM</th>
                        <th class="w-1">Email</th>
                        <th class="w-1">Lulusan</th>
                        <th class="w-1">Program Studi</th>
                        <th class="w-1">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $alumni)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                {{ $alumni->name }}
                            </td>
                            <td>
                                {{ $alumni->nim }}
                            </td>
                            <td>
                                {{ $alumni->email }}
                            </td>
                            <td>
                                {{ $alumni->graduation_year }}
                            </td>
                            <td>
                                {{ $alumni->prodi->name }}
                            </td>
                            <td>
                                <div class="d-inline-block">
                                    <form action="/alumni/{{ $alumni->id }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a class="btn btn-dark" href="/alumni/edit/{{ $alumni->id }}">Edit </a>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            {{--            <br>--}}
            {{--            <a href="{{ url('/prodi/add') }}" class="btn btn-primary d-none d-sm-inline-block">--}}
            {{--                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->--}}
            {{--                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"--}}
            {{--                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">--}}
            {{--                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>--}}
            {{--                    <path d="M12 5l0 14"></path>--}}
            {{--                    <path d="M5 12l14 0"></path>--}}
            {{--                </svg>--}}
            {{--                Tambahkan Alumni--}}
            {{--            </a>--}}
        </div>

    </div>
@endsection
