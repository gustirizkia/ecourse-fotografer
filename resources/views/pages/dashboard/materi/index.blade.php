@extends('pages.dashboard.master')

@section('title')
    Tambah Materi
@endsection

@section('content')
    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Materi & Video</h1>
        </div>
        <div class="col-lg-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <form action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" placeholder="Judul Materi" name="judul" value="{{ old('judul') }}">
            </div>
            <div class="form-group">
                <label>Materi</label>
                <textarea class="form-control"placeholder="Isi Materi" rows="3" name="materi">{{ old('materi') }}</textarea>
            </div>
                <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="image">
                </div>
                <div class="form-group">
                <label>Video</label>
                <input type="file" name="video">
                </div>
                <div class="form-group">
                <label>Selects</label>
                <select class="form-control" name="kategori">
                    <option value="Pemula">Pemula</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Expert">Expert</option>
                    </select>
                </div>
            <button type="submit" class="btn btn-primary">Upload Materi</button>
        </form>
@endsection
