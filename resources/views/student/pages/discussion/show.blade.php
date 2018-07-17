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
                        <h4 class="m-b-10">Diskusi</h4>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="feather icon-message-circle"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Detail Diskusi</a>
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
                        <div class="col-sm-9">
                            <div class="card bg-white p-relative">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-left media-middle friend-box">
                                            <a href="#">
                                                <img class="media-object img-radius m-r-20" src="{{ asset($discussion->lecturer->user->path_image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="chat-header">{{ $discussion->lecturer->user->name }}</div>
                                            <div class="f-13 text-muted">{{ $discussion->created_at_display }}</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="timeline-details">
                                            <div class="chat-header">{{ $discussion->title }}</div>
                                            <p class="text-muted">{{ $discussion->description }}</p>
                                        </div>
                                    </div>
                                    <div class="card-block user-box">
                                        <div class="p-b-20">
                                            <span class="f-14">
                                                <i class="icofont icofont-comment text-muted"></i> &nbsp;
                                                <a href="#">Komentar ({{ isset($discussion->comment) ? $discussion->comment->count() : '0' }})</a>
                                            </span>
                                        </div>
                                        @foreach($discussion->comment as $row)
                                        <div class="media">
                                            <a class="media-left" href="#">
                                                <img class="media-object img-radius m-r-20" src="{{ asset($row->user->path_image) }}" alt="Generic placeholder image">
                                            </a>
                                            <div class="media-body b-b-theme social-client-description">
                                                <div class="chat-header">{{ $row->user->name }}<span class="text-muted">{{ $row->created_at_display }}</span></div>
                                                <p class="text-muted">{{ $row->comment }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="media">
                                            <a class="media-left" href="#">
                                                <img class="media-object img-radius m-r-20" src="{{ asset(Sentinel::getUser()->path_image) }}" alt="Generic placeholder image">
                                            </a>
                                            <div class="media-body">
                                                <form class="form-material right-icon-control">
                                                    <div class="form-group form-default">
                                                        <textarea class="form-control" required=""></textarea>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Write something.....</label>
                                                    </div>
                                                    <div class="form-icon ">
                                                        <button class="btn btn-success btn-icon  waves-effect waves-light">
                                                            <i class="fa fa-paper-plane "></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
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
<!-- Accordion js -->
<script type="text/javascript" src="{{ asset('ablepro/assets/pages/accordion/accordion.js') }}"></script>
@endsection