@extends('layouts.app')

@section('styles')
@endsection

@section('breadcumb')
<div class="page-header-title">
    <h4 class="m-b-10">Diskusi</h4>
</div>
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">
            <i class="feather icon-message-circle"></i>
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="#!">Diskusi</a>
    </li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            @if($classrooms->isNotEmpty())
                <div class="card-block color-accordion-block">
                    <div id="accordion" role="tablist">
                        @foreach($classrooms as $key => $rowClassroom)
                        @php $rowCourse = $rowClassroom->course @endphp
                        <div class="accordion-panel color-accordion">
                            <div class="accordion-heading" role="tab" id={{ 'heading' . $key }}>
                                <h3 class="card-title accordion-title">
                                    <a class="accordion-msg waves-effect waves-dark" data-toggle="collapse" data-parent="#accordion" href={{ '#collapse' . $key }} aria-expanded="true" aria-controls={{ 'collapse' . $key }}>
                                        {{ strtoupper($rowCourse->title) }}
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
                                        <div class="m-b-20">
                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-xs">
                                                        <tbody class="text-center text-muted">
                                                            @foreach($rowCourse->chapter as $keyChapter => $rowChapter)
                                                            
                                                                @if($rowChapter->discussion->count() != 0)
                                                                <tr>
                                                                    <td rowspan="{{ $rowChapter->discussion->count()+1 }}">{{ ($keyChapter+1) }}</td>
                                                                    <td rowspan="{{ $rowChapter->discussion->count()+1 }}" align="left">{{ $rowChapter->title }}</td>
                                                                </tr>
                                                                @else
                                                                    <tr>
                                                                        <td>{{ ($keyChapter+1) }}</td>
                                                                        <td align="left">{{ $rowChapter->title }}</td>
                                                                        <td align="left"><i>Belum ada diskusi</i></td>
                                                                    </tr>
                                                                @endif
                                                                
                                                                @foreach($rowChapter->discussion as $keyDiscussion => $rowDiscussion)
                                                                <tr>
                                                                    <td>{{ ($keyChapter+1) . '.'. ($keyDiscussion+1) }}</td>
                                                                    <td>
                                                                        <div class="{{ $rowDiscussion->hasEnded == true ? 'text-danger' : '' }}">
                                                                            <strong>{{ $rowDiscussion->hasEnded == true ? 'Expired' : 'Open' }}</strong>
                                                                        </div>
                                                                    </td>
                                                                    <td align="left">
                                                                        <div class="title"><a href="{{ route('student.discussion.show', $rowDiscussion->slug) }}">{{ $rowDiscussion->title }}</a></div>
                                                                        <div class="text-danger"> Deadline : {{ $rowDiscussion->closed_at_display }} </div>
                                                                        <div class="text"> Aktivitas : {{ $rowDiscussion->comment->count() }} komentar </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="action-icon"><a class="action" href="{{ route('student.discussion.show', $rowDiscussion->slug) }}"><i class="{{ $rowDiscussion->hasEnded == true ? 'feather icon-eye' : 'feather icon-edit' }}"></i></a></div>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                    
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
@endsection

@section('scripts')
<!-- Accordion js -->
<script type="text/javascript" src="{{ asset('ablepro/assets/pages/accordion/accordion.js') }}"></script>
@endsection