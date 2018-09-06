@extends('layouts.app')

@section('styles')
<!-- Data Table Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('breadcumb')
<div class="page-header-title">
    <h4 class="m-b-10">Matakuliah</h4>
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
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <!-- Default ordering table start -->
        <div class="card">
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="course-table" class="table    table-bordered nowrap">
                        <thead>
                            <tr>
                                <th align="center">No.</th>
                                <th align="center">Nama</th>
                                <th align="center">Deskripsi</th>
                                <th align="center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $keyCourse => $course)
                            <tr>
                                <td align="center"  >{{ $keyCourse + 1 }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ str_limit($course->description, 50) }}</td>
                                <!-- <td>{{ str_limit($course->description, 50) }}</td> -->
                                <td align="center">
                                <a href="#"><i class="feather icon-edit"></i></a>
                                <a href="#"><i class="feather icon-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Default ordering table end -->
    </div>
</div>
@endsection

@section('scripts')
<!-- data-table js -->
<script type="text/javascript" src="{{ asset('js/datatable.js') }}"></script>

<script>
    $('#course-table').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="feather icon-plus-circle"></i> Tambah Matakuliah',
            className: 'btn-sm',
            action: function(e, dt, node, config) {
                window.location.href = '/lecturer/course/create';
            }
        }],
        "order": [
            [0, "asc"]
        ]
    });
</script>
@endsection