@extends('layouts.app')

@section('styles')
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
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            @if($courses->isNotEmpty())
                <div class="card-block color-accordion-block">
                    <div id="accordion" role="tablist">
                        @foreach($courses as $key => $rowCourse)
                        <div class="accordion-panel color-accordion">
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
                                        <div class="m-b-20 m-t-10">
                                            <p align="justify">
                                                {{ $rowCourse->description }}
                                            </p>
                                        </div>
                                        
                                        <div class="action-create">
                                        <a href="{{ route('lecturer.material.create') }}" class="btn btn-sm btn-primary waves-effect waves-light float-right"><i class="feather icon-plus-circle"></i> Buat Chapter baru</a>
                                        </div>
                                        <br><br>
                                        <table class="table b-solid requid-table table-xs">
                                            <tbody class="text-center text-muted">
                                                @foreach($rowCourse->chapter as $keyChapter => $rowChapter)
                                                <tr>
                                                    <td rowspan="{{ $rowChapter->subChapter->count() + 1 }}">{{ ($keyChapter+1) }}</td>
                                                    <td rowspan="{{ $rowChapter->subChapter->count() + 1 }}">{{ $rowChapter->title }}</td>
                                                </tr>
                                                    @foreach($rowChapter->subChapter as $keySubChapter => $rowSubChapter)
                                                        <tr>
                                                            <td>{{ ($keyChapter+1) . '.' . ($keySubChapter+1) }}</td>
                                                            <td>{{ $rowSubChapter->title }}</td>
                                                            <td>Belum ada file</td>
                                                            @if($keySubChapter == 0)
                                                            <td rowspan="{{ $rowChapter->subChapter->count() + 1 }}"><div class="action-icon">
                                                                <a href="{{ route('lecturer.material.show', $rowChapter->slug) }}"><i class="feather icon-edit"></i></a>
                                                                <a href="#"><i class="feather icon-trash"></i></a>
                                                            </div></td>
                                                            @endif
                                                        </tr>
                                                    @endforeach
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
        @else
            <div class="card-block">
                <h6>Belum ada kelas yang diambil.</h6>
            </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
@endsection