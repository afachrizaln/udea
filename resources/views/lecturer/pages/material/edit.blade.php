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
            <form action="{{ route('lecturer.material.update', $subChapter->id) }}" method="POST" enctype="multipart/form-data">        
            <div class="card-header">
                <h5><i class="icofont icofont-tasks-alt m-r-5"></i> {{ strtoupper($subChapter->chapter->course->title) }}</h5>
            </div>
            <div class="card-block">
                <div class="m-b-20">
                    <h6 class="sub-title m-b-15">{{ $subChapter->chapter->title }}</h6>
                    <p>{{ $subChapter->chapter->description }}</p>
                </div>
                <div class="m-b-20">
                    <h6 class="sub-title m-b-15">{{ $subChapter->title }}</h6> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table b-solid requid-table table-xs">
                                    <thead class="text-center text-muted">
                                        <tr>
                                            <td>Tanggal</td>
                                            <td>Unduh</td>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center text-muted">
                                        @if($subChapter->file != null)
                                            <tr>
                                                <td>{{ $subChapter->updated_at }}</td>
                                                <td>
                                                    <div class="action-download">
                                                        <a href="{{ route('lecturer.material.download', $subChapter->slug) }}" target="__blank"><i class="feather icon-download"></i> {{ $subChapter->file }}</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td colspan="2">File tidak tersedia</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="file" name="material" id="filer_input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn waves-effect waves-light btn-primary btn-block">Unggah</button>
            </div>
            </form>
        </div>
    </div>

    <div class="col-sm-3 task-detail-right">
        @include('partials.clock')
    </div>
</div>

<!-- [ page content ] end -->
@endsection

@section('scripts')
<!-- jquery file upload js -->
<script src="{{ asset('ablepro/assets/pages/jquery.filer/js/jquery.filer.min.js') }}"></script>
<script>
$('#filer_input').filer({
    maxSize: null,
    extensions: ['ppt', 'pdf', 'doc'],
    changeInput: true,
    showThumbs: true,
    addMore: false,
    captions: {
        button: "Pilih File",
        feedback: "Pilih file yang akan diunggah",
        feedback2: "file telah dipilih.",
        drop: "Drop file kesini untuk diunggah.",
        removeConfirmation: "Apakah kamu yakin menghapus file ini?",
        errors: {
            filesLimit: "Hanya dapat mengupload 1 file.",
            filesType: "Tipe file tidak support, pastikan hanya mengupload file dengan ekstensi pdf/ppt/doc.",
            filesSize: "File terlalu besar! Silahkan upload dengan kapasitas kurang dari 10 MB.",
        }
    }
});
</script>
@endsection