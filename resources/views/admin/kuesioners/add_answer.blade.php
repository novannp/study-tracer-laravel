@extends('layouts.app2')

@section('header')
    @include('layouts.header')
@endsection


@section('content')
    <div class="page-header page-header-border">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">{{ $question->kuesioner->title }}</h2>
                    <div class="text-muted mt-1">
                        <p>Dibuat pada {{ date('d-m-Y', strtotime($question->kuesioner->created_at)) }}</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="btn-list">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                data-bs-target="#tambah-jawaban-{{ $question->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24"
                                 height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Tambahkan Opsi Jawaban
                        </button>
                        {{--MODAL UNTUK MENAMBAH JAWABAN--}}
                        <div class="modal" id="tambah-jawaban-{{ $question->id }}" tabindex="-1">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Pertanyaan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form
                                            action="{{ route('kuesioners.questions.answers.store',  [$question->kuesioner_id, $question->id ]) }}"
                                            method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Pertanyaan</label>
                                                <input type="text" class="form-control" name="answer"
                                                       placeholder="Masukkan Opsi Jawaban"/>
                                            </div>

                                            <div class="modal-footer">
                                                <a href="#" class="btn btn-link link-secondary"
                                                   data-bs-dismiss="modal">
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
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table table-striped">
                            <thead>
                            <tr>
                                <th class="w-1">No</th>
                                <th class="w-75">Jawaban
                                <th class="w-25">Action</th>
                            </tr>

                    </div>

                    </thead>
                    <tbody>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pertanyaan</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">{{ $question->question }}</p>
                        </div>
                    </div>
                    @foreach ($answers as $answer)
                        <tr>
                            <td class="w-1">{{ $loop->iteration }}</td>
                            <td class="w-1">{{ $answer->answer }}</td>

                            <td class="w-1">

                                <a class="btn w-25 btn-azure"
                                   href={{ route('kuesioners.questions.index', $question->id) }}>Edit</a>
                                <a class="btn w-25 btn-pink" href="">Hapus</a>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                    </table>

                </div>
                <br>


            </div>

        </div>
    </div>
    </div>
@endsection
