@extends('layouts.front')

@section('title')
{{ $diskusi->judul }}
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold mt-4" style="color:#1566B1;">Detail Diskusi</h2>
                <h2 class="font-weight-bold mt-1" style="color:#1566B1;">{{ $diskusi->judul }}</h2>
            </div>
        </div>
        <div class="bg-white border-white shadow pl-3 pt-3 pr-3"
            style="padding-bottom:60px; border-radius:20px;margin-bottom:30px;">
            @forelse ($items as $item)
            <div class="row">
                <div class="col mb-4">
                    <div class="d-flex float-left align-items-center"><img
                            class="rounded-circle flex-shrink-0 mr-3 fit-cover" width="30" height="30" src="{{ url("storage/".$item->user->image)}}">
                        <div>
                            <h5 class="font-weight-bold text-dark mb-0">{{ $item->user->name }}</h5>
                        </div>
                    </div>
                    <p class="text-muted float-right">{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-y') }}
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h5 class="font-weight-bold mb-2">{{ $item->judul }}</h5>
                    <p class="text-black-50 mb-0"><span style="color: rgb(0, 0, 0);">{{ $item->deskripsi }}</span><br>
                    </p>
                    <div class="border-divinder"></div>
                </div>
            </div>
            @empty
            <h4 class="text-center">Tidak ada data</h4>
            @endforelse

            <div class="row">
                <div class="col text-center"><a class="btn btn-light button-comment" role="button"
                        href="{{ route('comment-create', $diskusi->id) }}">Comment&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;<i class="fa fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('addScript')
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="assets/js/sidebar.js"></script>
@endpush
