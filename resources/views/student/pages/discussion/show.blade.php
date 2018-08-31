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
        <a href="#!">Detail Diskusi</a>
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
                            <img class="media-object img-radius m-r-20" src="{{ Avatar::create($discussion->lecturer->user->name)->toBase64() }}" alt="">
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
                            <img class="media-object img-radius m-r-20" src="{{ Avatar::create($row->user->name)->toBase64() }}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body b-b-theme social-client-description">
                            <div class="chat-header">{{ $row->user->name }}<span class="text-muted">{{ $row->created_at_display }}</span></div>
                            <p class="text-muted">{{ $row->comment }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="media">
                        <a class="media-left" href="#">
                            <img class="media-object img-radius m-r-20" src="{{ Avatar::create(Sentinel::getUser()->name)->toBase64() }}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                            <form class="form-material right-icon-control" action="{{ route('student.discussion.comment', $discussion->slug) }}" method="POST">
                                <div class="form-group form-default">
                                    <textarea name='comment' class="form-control" required></textarea>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Tulis sesuatu.....</label>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary m-b-0" type="submit">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Task-detail-right start -->
    <div class="col-sm-3 task-detail-right">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text"><i class="icofont icofont-clock-time m-r-10"></i>Waktu Diskusi</h5>
            </div>
            <div class="card-block">
                @if(date('Y-m-d H:i:s') < $discussion->closed_at)
                    <div class="counter" data-countdown="{{ $discussion->closed_at }}">
                        <div>Batas Akhir</div>
                        <div>{{ $discussion->closed_at_display }}</div>
                        <div class="yourCountdownContainer"></div>
                        <!-- end of yourCountdown -->
                    </div>
                    <!-- end of counter -->
                @else
                    <div class="counter">
                        <div>Batas Akhir</div>
                        <div class="text-danger">{{ $discussion->closed_at_display }}</div>
                        <div class="text-danger">Waktu habis</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- counter js -->
<script src="{{ asset('ablepro/bower_components/countdown/js/jquery.countdown.js') }}"></script>
{{-- <script src="{{ asset('ablepro/assets/pages/counter/task-detail.js') }}"></script> --}}

<script>
$(document).ready(function() {
    var finalDate = $('.counter').data('countdown');
    $('.yourCountdownContainer').countdown({
        date: finalDate,
        render: function (date) {
            this.el.innerHTML = "<p>" + date.days  + " hari, " +
                                this.leadingZeros(date.hours) + " jam " +
                                this.leadingZeros(date.min) + " mnt " +
                                this.leadingZeros(date.sec) + " dtk</p>";
        }
    });
});
</script>
@endsection