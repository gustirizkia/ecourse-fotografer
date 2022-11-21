@extends('pages.dashboard.master')

@section('title')
    edit diskusi
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin-top: 50px">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form action="{{ route('diskusi-admin.update', $item->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <label for="">Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{ $item->judul }}">

                                <div class="" style="margin-top: 10px; margin-bottom: 10px">
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi" id="" cols="10" rows="10" class="mt-5 form-control" >{{ $item->deskripsi }}</textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
