@extends('layouts.app2')

@section('header')
@include('layouts.header')
@endsection

@section('content-header')
@include('layouts.page_header')
@endsection

@section('content')
@include('partials.summary')
@include('partials.prodi_summary')
@endsection