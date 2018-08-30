@extends('layouts.app')

@section('styles')
<!-- list css -->
<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/assets/pages/list-scroll/list.css') }}">
@endsection

@section('breadcumb')
<div class="page-header-title">
    <h4 class="m-b-10">Kompetensi</h4>
</div>
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">
            <i class="feather icon-book"></i>
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="#!">Materi</a>
    </li>
    <li class="breadcrumb-item">
        <a href="#!">Kompetensi</a>
    </li>
</ul>
@endsection

@section('content')
<!-- [ page content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="row card-block">
                <div class="col-md-12">
                    <ul class="basic-list list-icons">
                        <li>
                            <i class="icofont icofont-speech-comments text-primary p-absolute text-center d-block f-30"></i>
                            <h6>{{ $chapter->title }}</h6>
                            <p>{{ $chapter->description }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ page content ] end -->
@endsection

@section('scripts')
@endsection