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
                        <h4 class="m-b-10">Tugas</h4>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="feather icon-paperclip"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Tugas</a>
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
                                @if($classrooms->isNotEmpty())
                                    <div class="card-block color-accordion-block">
                                        <div id="accordion" role="tablist">
                                            @foreach($classrooms as $key => $rowClassroom)
                                            @php $rowCourse = $rowClassroom->course @endphp
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
                                                            <div class="m-b-20">
                                                                <div class="row">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-xs">
                                                                            <tbody class="text-center text-muted">
                                                                                @foreach($rowCourse->chapter as $keyChapter => $rowChapter)
                                                                                
                                                                                    @if($rowChapter->task->count() != 0)
                                                                                    <tr>
                                                                                        <td rowspan="{{ $rowChapter->task->count()+1 }}">{{ ($keyChapter+1) }}</td>
                                                                                        <td rowspan="{{ $rowChapter->task->count()+1 }}" align="left">{{ $rowChapter->title }}</td>
                                                                                    </tr>
                                                                                    @else
                                                                                        <tr>
                                                                                            <td>{{ ($keyChapter+1) }}</td>
                                                                                            <td align="left">{{ $rowChapter->title }}</td>
                                                                                            <td align="left"><i>Belum ada diskusi</i></td>
                                                                                        </tr>
                                                                                    @endif
                                                                                    
                                                                                    @foreach($rowChapter->task as $keyTask => $rowTask)
                                                                                    <tr>
                                                                                        <td>{{ ($keyChapter+1) . '.'. ($keyTask+1) }}</td>
                                                                                        <td>
                                                                                            <div class="{{ $rowTask->hasEnded == true ? 'text-danger' : '' }}">
                                                                                                <strong>{{ $rowTask->hasEnded == true ? 'Expired' : 'Open' }}</strong>
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                        <td align="left">
                                                                                            <div class="title"><a href="{{ route('task.show', $rowTask->slug) }}">{{ $rowTask->title }}</a></div>
                                                                                            <div class="text-danger"> Deadline : {{ $rowTask->closed_at_display }} </div>
                                                                                            <div class="text"> Aktivitas : hey </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="action-icon"><a class="action" href="{{ route('discussion.show', $rowTask->id) }}"><i class="{{ $rowTask->hasEnded == true ? 'feather icon-eye' : 'feather icon-edit' }}"></i></a></div>
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