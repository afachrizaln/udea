@extends('layouts.app')

@section('styles')
@endsection

@section('breadcumb')
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
@endsection

@section('content')
<div class="row">
    <div class="col-sm-9">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-12">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3 task-detail-right">
        @include('partials.clock')

        <div class="card">
            <div class="card-header borderless">
                <h5 class="card-header-text">Kelas</h5>
                <div class="card-header-right">
                    <i class="icofont icofont-navigation-menu"></i>
                </div>
            </div>
            <div class="card-block">
                <i class="icon-history pull-right"></i> <b>Daftar Kelas</b>
                <ul class="nav navigation"><br>
                    @foreach($classrooms as $row)
                    <li class="waves-effect waves-light">
                        <a href="#v_1_2">{{ $row->name }}<span class="text-muted text-regular pull-right">{{ "(" . $row->course->title . ")" }}</span></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    </div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $('#calendar').fullCalendar({
        locale: 'id'
    })
});
</script>
@endsection