<nav class="navbar navbar-dark navbar-expand-md sticky-top"
    style="background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #fafafa), color-stop(1, #fafafa));border-bottom: 1px solid #c2c7d1;border-top: 1px solid #c2c7d1;">
    <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span
                class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="/"><span
                            style="color: rgb(159, 159, 159);">Home</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('course') }}"><span
                            style="color: rgb(159, 159, 159);">Ecourse</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('diskusi.index') }}"><span
                            style="color: rgb(159, 159, 159);">Q N
                            A</span></a></li>
                <li class="nav-item"><a class="nav-link" href="/profile"><span
                            style="color: rgb(159, 159, 159);">Profile</span></a></li>
            </ul>
            <ul class="navbar-nav class= float-right ">
                @auth
                    <li class="nav-item"><a class="nav-link" href="#">{{ Auth::user()->name }}</a></li>
                @endauth
                        @guest
                            <li class="nav-item"><a class="nav-link" href="/login"><span
                                    style="color: rgb(159, 159, 159);">Login</span></a></li>

                        @endguest
            </ul>
        </div>
    </div>
</nav>
