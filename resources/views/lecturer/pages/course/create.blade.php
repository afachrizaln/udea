@extends('layouts.app')

@section('styles')
@endsection

@section('breadcumb')
<div class="page-header-title">
    <h4 class="m-b-10">Tambah Matakuliah</h4>
</div>
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">
            <i class="feather icon-book"></i>
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="#!">Matakuliah</a>
    </li>
    <li class="breadcrumb-item">
        <a href="#!">Tambah</a>
    </li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-md-9">
        <!-- Form wizard with validation card start -->
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <div id="smartwizard">
                                    <ul>
                                        <li><a href="#step-1">Step Title<br /><small>Step description</small></a></li>
                                        <li><a href="#step-2">Step Title<br /><small>Step description</small></a></li>
                                        <li><a href="#step-3">Step Title<br /><small>Step description</small></a></li>
                                        <li><a href="#step-4">Step Title<br /><small>Step description</small></a></li>
                                    </ul>
                                
                                    <div>
                                        <div id="step-1" class="">
                                            Step Content
                                        </div>
                                        <div id="step-2" class="">
                                            Step Content
                                        </div>
                                        <div id="step-3" class="">
                                            Step Content
                                        </div>
                                        <div id="step-4" class="">
                                            Step Content
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form wizard with validation card end -->
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
  $('#smartwizard').smartWizard();
});
</script>
@endsection