@extends('layouts.app2')

@section('header')
    @include('layouts.header')
@endsection
@section('content-header')
    @include('layouts.page_header')
@endsection

@section('content')
    <h2>Preview</h2>
    <hr>
    <div class="card">
        <div class="col-12">
            <form>
                <div class="card-header">
                    <h4 class="card-title">{{ $kuesioner->title }}</h4>
                </div>
                <div class="card-body">
                    @foreach($questions as $question)
                        @if($question->type_id == 1)
                            <div class="mb-3">
                                <div class="form-label">{{ $loop->iteration }}. {{  $question->question }}</div>
                                <div>
                                    @foreach($question->answers as $answer)
                                        <label class="form-check">
                                            <input class="form-check-input" type="radio" name="user_answer">
                                            <span class="form-check-label">{{ $answer->answer }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        @if(@$question->type_id == 2)
                            <div class="mb-3">
                                <div class="form-label">{{ $loop->iteration }}. {{  $question->question }}</div>
                                <div>
                                    @foreach($question->answers as $answer)
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                            <span class="form-check-label">{{ $answer->answer }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        @if($question->type_id == 3)
                            <div class="mb-3">
                                <label class="form-label">
                                    {{ $loop->iteration }}. {{  $question->question }}
                                </label>
                                <input type="text" class="form-control" name="example-text-input"
                                       placeholder="Masukkan Jawaban">
                            </div>
                        @endif

                    @endforeach
                </div>

                <div class="card-footer"></div>
            </form>
        </div>
    </div>

@endsection
