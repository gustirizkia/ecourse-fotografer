@extends('pages.dashboard.master')

@section('title')
    Edit Admin
@endsection

@push('addStyle')
    <style>
        .form-control{
            margin-bottom: 12px;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Admin</h1>
            </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form action="{{ route('user-admin.update', $item->id) }}" method="post">
                            @csrf
                            @method("PUT")
                            <label for="">Nama</label>
                            <input required type="text" class="form-control" value="{{ $item->name }}" name="name">
                            <label for="">Email</label>
                            <input required type="email" class="form-control" name="email" value="{{ $item->email }}">
                            <label for="">No Tlp</label>
                            <input required type="number" class="form-control" value="{{ $item->phone }}" name="phone">
                            <label for="">Bio</label>
                            <input required type="text" class="form-control" name="bio" value="{{ $item->bio }}">
                            <label for="">Password baru</label>
                            <input type="password" class="form-control" name="password" style="margin-bottom: 0px;">
                            <div class="" style="margin-bottom: 12px;">
                                <small >*Kosongkan jika tidak ingin di ubah</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
    </div>
@endsection
