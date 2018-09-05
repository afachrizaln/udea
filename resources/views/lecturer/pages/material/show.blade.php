@extends('layouts.app')

@section('styles')
<!-- jquery file upload Frame work -->
<link href="{{ asset('ablepro/assets/pages/jquery.filer/css/jquery.filer.css') }}" type="text/css" rel="stylesheet" />
@endsection

@section('breadcumb')
<div class="page-header-title">
    <h4 class="m-b-10">Edit Materi</h4>
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
        <a href="#!">Edit Materi</a>
    </li>
</ul>
@endsection

@section('content')
<!-- [ page content ] start -->
<div class="row">
    <div class="col-sm-9">
        <div class="card">
            <div class="card-header">
                <h5><i class="icofont icofont-tasks-alt m-r-5"></i> {{ $subChapter->chapter->course->title }}</h5>
            </div>
            <div class="card-block">
                <div class="m-b-20">
                    <h6 class="sub-title m-b-15">{{ $subChapter->chapter->title }}</h6>
                    <p>{{ $subChapter->chapter->description }}</p>
                </div>
                <div class="m-b-20">
                    <h6 class="sub-title m-b-15">{{ $subChapter->title }}</h6> 
                    <div class="form-group">
                        <input type="file" name="files[]" id="filer_input" multiple="multiple">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ page content ] end -->
@endsection

@section('scripts')
<!-- jquery file upload js -->
<script src="{{ asset('ablepro/assets/pages/jquery.filer/js/jquery.filer.min.js') }}"></script>
<script src="{{ asset('ablepro/assets/pages/filer/custom-filer.js') }}"></script>
{{-- <script src="{{ asset('ablepro/assets/pages/filer/jquery.fileuploads.init.js') }}"></script> --}}
@endsection