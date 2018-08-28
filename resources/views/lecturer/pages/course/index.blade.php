@extends('lecturer.layouts.app')

@section('styles')
<!-- list css -->
<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/assets/pages/list-scroll/list.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/css/pages.css') }}">
@endsection

@section('breadcumb')
<div class="page-header-title">
    <h4 class="m-b-10">Materi</h4>
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
</ul>
@endsection

@section('content')
<!-- [ page content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary waves-effect waves-light float-right d-inline-block md-trigger" data-modal="modal-13"> <i class="icofont icofont-plus m-r-5"></i> Tambah Matakuliah</button>
            </div>
            @if($courses->isNotEmpty())
            <div class="row card-block">
                <div class="col-md-12">
                    <h6 class="sub-title">Daftar Matakuliah</h6>
                    <ul class="basic-list list-icons">
                        @foreach($courses as $rowCourse)
                        <li>
                            <i class="icofont icofont-speech-comments text-primary p-absolute text-center d-block f-30"></i>
                            <h6>{{ $rowCourse->title }}</h6>
                            <p>{{ $rowCourse->description }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @else
                <div class="card-block">
                    <h6>Belum ada kelas yang diambil.</h6>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- [ page content ] end -->
@endsection

@section('scripts')
<!-- Accordion js -->
<script type="text/javascript" src="{{ asset('ablepro/assets/pages/accordion/accordion.js') }}"></script>
@endsection