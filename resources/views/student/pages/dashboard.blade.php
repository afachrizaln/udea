@extends('student.layouts.app')

@section('styles')
<!-- Calender css -->
<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/bower_components/fullcalendar/css/fullcalendar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/bower_components/fullcalendar/css/fullcalendar.print.css') }}" media='print'>
@endsection

@section('navigation')
<!-- [ navigation menu ] end -->
<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h4 class="m-b-10">Beranda</h4>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                    <i class="feather icon-home"></i>
                                </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Beranda</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <!-- [ page content ] start -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Hello card</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                            <li><i class="feather icon-trash close-card"></i></li>
                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id='calendar'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ page content ] end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- calender js -->
<script type="text/javascript" src="{{ asset('ablepro/bower_components/moment/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('ablepro/bower_components/fullcalendar/js/fullcalendar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('ablepro/assets/pages/full-calender/calendar.js') }}"></script>
@endsection