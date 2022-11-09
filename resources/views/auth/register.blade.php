{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>
</head>

<body>
    <!-- Navbar-->
    @include('includes.navbar')
    <!-- Navbar-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 align="center">Daftar Member</h2>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">Foto Profile:</label>
                        <input type="file" class="form-control" placeholder="Masukan image" id="iamge" name="image"
                            :value="old('name')" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama:</label>
                        <input class="form-control" placeholder="Masukan nama" id="name" type="text" name="name"
                            :value="old('name')" required>
                    </div>
                    <div class="form-group">
                        <label for="">Bio:</label>
                        <input class="form-control" placeholder="Masukan bio" id="bio" type="text" name="bio"
                            :value="old('name')" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email" type="email"
                            name="email" :value="old('email')" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd"
                            name="password">
                    </div>
                    <div class="form-group">
                        <label for="">No Telepon :</label>
                        <input type="number" class="form-control" placeholder="6208991169449" name="phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('ecourse/assets/img/l2.jpg') }}" alt="login" style="width:100%">
            </div>
        </div>
    </div>

</body>

</html>
