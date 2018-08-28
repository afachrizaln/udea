@extends('student.layouts.app')

@section('styles')
<!-- jquery file upload Frame work -->
<link href="{{ asset('ablepro/assets/pages/jquery.filer/css/jquery.filer.css') }}" type="text/css" rel="stylesheet" />
<link href="{{ asset('ablepro/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css') }}" type="text/css" rel="stylesheet" />
@endsection

@section('breadcumb')
<div class="page-header-title">
    <h4 class="m-b-10">Tugas</h4>
</div>
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">
            <i class="feather icon-paperclip"></i>
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="#!">Detail Tugas</a>
    </li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-9">
        <div class="card bg-white p-relative">
            <div class="card-block">
                <div class="media">
                    <div class="media-left media-middle friend-box">
                        <a href="#">
                            <img class="media-object img-radius m-r-20" src="{{ asset($task->lecturer->user->path_image) }}" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">{{ $task->lecturer->user->name }}</div>
                        <div class="f-13 text-muted">{{ $task->created_at_display }}</div>
                    </div>
                </div>
                <div class="card-block">
                    <div class="timeline-details">
                        <div class="chat-header">{{ $task->title }}</div>
                        <p align="justify" class="text-muted">{{ $task->description }}</p>
                    </div>
                </div>
                <!-- Image upload card start -->
                <div class="card-block">
                    <input type="file" name="files[]" id="filer_input" multiple="multiple">
                </div>
                <!-- Image upload card end -->
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text"><i class="icofont icofont-clock-time m-r-10"></i>Waktu</h5>
            </div>
            <div class="card-block">
                <div class="counter">
                    <div class="yourCountdownContainer">
                        <div class="row">
                            <div class="col-xs-3">
                                <h2>12</h2>
                                <p>Days</p>
                            </div>
                            <div class="col-xs-3">
                                <h2>24</h2>
                                <p>Hours</p>
                            </div>
                            <div class="col-xs-3">
                                <h2>38</h2>
                                <p>Minutes</p>
                            </div>
                            <div class="col-xs-3">
                                <h2>56</h2>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <!-- end of row -->
                    </div>
                    <!-- end of yourCountdown -->
                </div>
                <!-- end of counter -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- jquery file upload js -->
<script src="{{ asset('ablepro/assets/pages/jquery.filer/js/jquery.filer.min.js') }}"></script>
<script src="{{ asset('ablepro/assets/pages/filer/custom-filer.js') }}" type="text/javascript"></script>
<script src="{{ asset('ablepro/assets/pages/filer/jquery.fileuploads.init.js') }}" type="text/javascript"></script>
<!-- counter js -->
<script src="{{ asset('ablepro/bower_components/countdown/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('ablepro/assets/pages/counter/task-detail.js') }}"></script>
@endsection