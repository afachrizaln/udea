@extends('student.layouts.app')

@section('styles')
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
                                <div class="card-block accordion-block">
                                    @foreach($courses as $key => $rowCourse)
                                    <div id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="accordion-panel">
                                            <div class="accordion-heading" role="tab" id={{ 'heading' . $key }}>
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg waves-effect waves-dark" data-toggle="collapse" data-parent="#accordion" href={{ '#collapse' . $key }} aria-expanded="true" aria-controls={{ 'collapse' . $key }}>
                                                        {{ $rowCourse->title }}
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id={{ 'collapse' . $key }} class="panel-collapse collapse" role="tabpanel" aria-labelledby={{ 'heading' . $key }}>
                                                <div class="accordion-content accordion-desc">
                                                    <div class="">
                                                        <div class="m-b-20">
                                                            <p>
                                                                {{ $rowCourse->description }}
                                                            </p>
                                                        </div>
                                                        @foreach($rowCourse->chapter as $keyChapter => $rowChapter)
                                                        <div class="m-b-20">
                                                            <h6 class="sub-title m-b-15">Bab. {{ $rowChapter->title }}</h6>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                        <p align="justify">
                                                                            {{ $rowChapter->description }}
                                                                        </p>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="table-responsive">
                                                                        <table class="table b-solid requid-table table-xs">
                                                                            <thead>
                                                                                <tr class="text-uppercase">
                                                                                    <th class="text-center">#</th>
                                                                                    <th class="text-center">Judul</th>
                                                                                    <th class="text-center">Tanggal Upload</th>
                                                                                    <th class="text-center">Aksi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="text-center text-muted">
                                                                                @foreach($rowChapter->subChapter as $keySubChapter => $rowSubChapter)
                                                                                <tr>
                                                                                    <td>{{ ($keyChapter+1) . '.' . ($keySubChapter+1) }}</td>
                                                                                    <td>{{ $rowSubChapter->title }}</td>
                                                                                    <td> <i class="icofont icofont-ui-calendar"></i>&nbsp; {{ $rowSubChapter->created_at }}</td>
                                                                                    <td>Download</td>
                                                                                </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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
<!-- Accordion js -->
<script type="text/javascript" src="{{ asset('ablepro/assets/pages/accordion/accordion.js') }}"></script>
@endsection