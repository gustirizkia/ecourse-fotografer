@extends('layouts.front')

@section('title')
Diskusi
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold mt-4" style="color:#1566B1;">Diskusi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-left mb-4">
                <a href="{{ route('diskusi.create') }}" class="btn"
                    style="width:270px;background-color:#1566B1;color:#fff !important; border-radius:30px;">Buat
                    Diskusi&nbsp;</a>
            </div>
        </div>

        @forelse ($items as $item)
        <div class="bg-white border-white shadow pl-3 pt-3 pr-3"
            style="padding-bottom:60px; border-radius:20px;margin-bottom:30px;">
            <div class="row">
                <div class="col mb-4">
                    <div class="d-flex align-items-center"><img class="rounded-circle flex-shrink-0 mr-3 fit-cover"
                            width="30" height="30" src="{{ url("storage/".$item->user->image) }}">
                        <div>
                            <h5 class="font-weight-bold text-dark mb-0">{{ $item->user->name }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="font-weight-bold mb-2">{{ $item->judul }}</h5>
            <hr>
            <p class="mb-0">{{ $item->deskripsi }}s<br></p>
            <p class="text-muted float-left mt-4"><strong>{{ $item->jawaban_count }} Diskusi</strong><br></p><a
                class="float-right mt-4" href="{{ route('diskusi.show', $item->id) }}"><strong>Baca Diskusi</strong></a>
        </div>
        @empty
        <h4 class="text-center">Tidak ada diskusi</h4>
        @endforelse

    </div>
</section>
@endsection

@push('addScript')
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="assets/js/sidebar.js"></script>
@endpush
