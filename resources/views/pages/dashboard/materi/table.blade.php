@extends('pages.dashboard.master')

@section('title')
    Materi Course
@endsection

@push('addStyle')
    <style>
        /* .header__materi{
            display: flex;
            justify-content: center;
        }

        .header__materi .btn {
            display: inline;
        } */
    </style>
@endpush

@section('content')
    <div class="row">

        <div class="col-lg-12 header__materi">
            <h1 class="page-header">Materi</h1>
            <a href="{{ route('materi.create') }}" class="btn btn-success">Tambah Materi</a>
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
   <div class="">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($items as $item)
            <tr>
                <th scope="row">{{ $no }}</th>
                <td>{{ $item->judul }}</td>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-M-Y') }}</td>
            </tr>
            @php
                $no++
            @endphp
            @endforeach
        </tbody>
    </table>
   </div>
@endsection
