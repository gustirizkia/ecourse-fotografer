@extends('layouts.front')

@section('title')
Buat Diskusi Baru
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold mt-4" style="color:#1566B1;">Membuat Diskusi</h2>
            </div>
        </div>
        <form method="POST" action="{{ route('comment-store') }}">
            @csrf
            <div class="form-row">
                <div class="col">
                    <div class="form-group"><label>Judul</label><input class="shadow-none form-control inputan-diskusi"
                            type="text" placeholder="Judul Materi" required name="judul"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group"><label>Isi Diskusi</label><textarea
                            class="shadow-none form-control inputan-diskusi" rows="5" placeholder="Masukan diskusi anda"
                            required name="deskripsi"></textarea></div>
                </div>

                <input type="text" required name="diskusi_id" value="{{ $diskusi_id }}" hidden>
            </div>
            <div class="form-row">
                <div class="col text-center"><button class="btn" type="submit"
                        style="width:150px;background-color:#1566B1;color:#fff !important; border-radius:30px;margin-top:30px;">Post</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection


@push('addScript')
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="assets/js/sidebar.js"></script>
@endpush
