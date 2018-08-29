@extends('lecturer.layouts.app')

@section('styles')
<!-- jquery file upload Frame work -->
<link href="{{ asset('ablepro/assets/pages/jquery.filer/css/jquery.filer.css') }}" type="text/css" rel="stylesheet" />
@endsection

@section('breadcumb')
<div class="page-header-title">
    <h4 class="m-b-10">Buat Materi</h4>
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
        <a href="#!">Tambah Kompetensi</a>
    </li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-9">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <form class="form-material">
                <div class="card-block">
                    <h4 class="sub-title">Kompetensi</h4>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-static-label">
                                <input type="text" class="form-control" required="">
                                <span class="form-bar"></span>
                                <label class="float-label">Judul</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-static-label">
                                <textarea class="form-control"  required=""></textarea>
                                <span class="form-bar"></span>
                                <label class="float-label">Deskripsi</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-md btn-danger">Batal</button>
                            <button type="submit" class="btn btn-md btn-primary m-r-10">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-sm-3">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-block">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-9">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <form class="form-material">
                <div class="card-block">
                    <h4 class="sub-title">Sub-Kompetensi</h4>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group form-static-label">
                                <input type="text" class="form-control" required="">
                                <span class="form-bar"></span>
                                <label class="float-label">Judul</label>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="file" name="files[]" id="filer_input" multiple="multiple">
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <a href="#"><i class="feather icon-trash"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <button href="{{ route('lecturer.material.create') }}" class="btn btn-sm btn-block btn-inverse waves-effect waves-light float-right"><i class="feather icon-plus-circle"></i> Tambah Sub-Kompetensi</a>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-md btn-danger">Batal</button>
                            <button type="submit" class="btn btn-md btn-primary m-r-10">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- jquery file upload js -->
<script src="{{ asset('ablepro/assets/pages/jquery.filer/js/jquery.filer.min.js') }}"></script>
<script src="{{ asset('ablepro/assets/pages/filer/custom-filer.js') }}"></script>
<script src="{{ asset('ablepro/assets/pages/filer/jquery.fileuploads.init.js') }}"></script>
@endsection