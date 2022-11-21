<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile {{ Auth::user()->name }}</title>
    <link rel="stylesheet" href="{{ asset('ecourse/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ecourse/assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ecourse/assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('ecourse/assets/css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('ecourse/assets/css/global/scroll-senkatech.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('ecourse/assets/css/accordion-sidebar-L-senkatech.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('ecourse/assets/css/Footer-Dark-Multi-Column-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('ecourse/assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('ecourse/assets/css/Projects-Grid-images.css') }}">
    <meta charset="UTF-8">
</head>

<body>
    @include('includes.navbar')
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold" style="color:#1566B1;">Profile</h2>
            </div>
            @if (Session::has('msgSuccess'))
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('msgSuccess') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col mb-4">
                <div class="d-flex align-items-center"><img class="rounded-circle flex-shrink-0 mr-3 fit-cover"
                        width="130" height="130" src="{{ asset("storage/".Auth::user()->image) }}">
                    <div>
                        <h5 class="font-weight-bold text-muted mb-0">{{ Auth::user()->name }}</h5>
                        <p class="text-muted mb-1">{{ Auth::user()->bio }}</p>
                        <ul class="list-inline text-muted w-100 mb-0">
                            <li class="list-inline-item text-center">
                                <div class="d-flex flex-column align-items-center"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16" class="bi bi-facebook">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                        </path>
                                    </svg></div>
                            </li>
                            <li class="list-inline-item text-center">
                                <div class="d-flex flex-column align-items-center"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16" class="bi bi-instagram">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                        </path>
                                    </svg></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mb-4">
                <button class="btn" type="button" data-toggle="modal" data-target="#exampleModal"
                    style="width:270px;background-color:#1566B1;color:#fff !important; border-radius:30px;">Upload Hasil
                    Praktik</button>
            </div>
        </div>

        {{-- Modal --}}

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload Image </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('upload-karya') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
        {{-- endModal --}}

        <div class="row">
            @forelse ($items as $item)
                <div class="col-sm-12 col-md-6 col-lg-4 text-center">
                    <img class="img-fluid" src="{{ asset('storage/'.$item->image) }}" style="border-radius:30px;">
                    @if ($item->status !== 'pending')
                        @if ($item->status === 'aproved')
                            <img class="img-fluid icon-check" src="{{ asset('ecourse/assets/img/check.png') }}">
                        @else
                            <img class="img-fluid icon-check" src="{{ asset('ecourse/assets/img/uncheck.png') }}">
                        @endif
                    @else

                    @endif
                </div>
            @empty
                <div class="col-12">
                    <h2 class="text-center">Tidak ada image</h2>
                </div>
            @endforelse
             <div class="col-sm-12 col-md-6 col-lg-4 text-center"><img class="img-fluid" src="assets/img/image-1.png" style="border-radius:30px;">
                <img class="img-fluid icon-check" src="{{ asset('ecourse/assets/img/uncheck.png') }}">
            </div>
        </div>
    </div>
    <script src="{{ asset('ecourse/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('ecourse/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('ecourse/assets/js/sidebar.js') }}"></script>
</body>

</html>
